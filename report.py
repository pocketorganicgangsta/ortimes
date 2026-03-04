"""
daily-report.py
================
GA4 Data API（必須）+ Search Console API（オプション）で
昨日のアクセスデータを取得し、Gmail SMTPでメール送信する。

環境変数（GitHub Secrets）:
  GA4_PROPERTY_ID            : GA4 プロパティID（数字のみ）
  GA4_SERVICE_ACCOUNT_JSON   : サービスアカウントJSONの中身（文字列）
  GSC_SITE_URL               : https://example.com/  （省略可）
  GSC_SERVICE_ACCOUNT_JSON   : GSC用サービスアカウントJSON（省略可・GA4と共用も可）
  GMAIL_FROM                 : 送信元メールアドレス
  GMAIL_APP_PASSWORD         : Gmail アプリパスワード
  GMAIL_TO                   : 送信先メールアドレス（複数はカンマ区切り）
"""

from __future__ import annotations

import json
import os
import smtplib
import textwrap
from datetime import date, timedelta
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

from google.oauth2 import service_account

YESTERDAY = date.today() - timedelta(days=1)
DATE_STR  = YESTERDAY.strftime("%Y-%m-%d")
DATE_JP   = YESTERDAY.strftime("%Y年%m月%d日")

GA4_SCOPES  = ["https://www.googleapis.com/auth/analytics.readonly"]
GSC_SCOPES  = ["https://www.googleapis.com/auth/webmasters.readonly"]
GA4_LIMIT   = int(os.environ.get("GA4_LIMIT",  "30"))
GSC_LIMIT   = int(os.environ.get("GSC_LIMIT",  "20"))


def _load_credentials(env_key: str, scopes: list[str]) -> service_account.Credentials:
    raw = os.environ.get(env_key, "")
    if not raw:
        raise EnvironmentError(f"環境変数 {env_key} が設定されていません。")
    info = json.loads(raw)
    return service_account.Credentials.from_service_account_info(info, scopes=scopes)


def fetch_ga4_data(property_id: str) -> dict:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    from google.analytics.data_v1beta.types import (
        DateRange, Dimension, Metric, OrderBy, RunReportRequest,
    )

    creds  = _load_credentials("GA4_SERVICE_ACCOUNT_JSON", GA4_SCOPES)
    client = BetaAnalyticsDataClient(credentials=creds)
    prop   = f"properties/{property_id}"
    dr     = [DateRange(start_date=DATE_STR, end_date=DATE_STR)]

    page_resp = client.run_report(RunReportRequest(
        property=prop,
        dimensions=[Dimension(name="pagePath"), Dimension(name="pageTitle")],
        metrics=[Metric(name="screenPageViews")],
        date_ranges=dr,
        order_bys=[OrderBy(
            metric=OrderBy.MetricOrderBy(metric_name="screenPageViews"), desc=True
        )],
        limit=GA4_LIMIT,
    ))

    pages = [
        {
            "path":  r.dimension_values[0].value,
            "title": r.dimension_values[1].value,
            "pv":    int(r.metric_values[0].value),
        }
        for r in page_resp.rows
    ]

    summary_resp = client.run_report(RunReportRequest(
        property=prop,
        metrics=[
            Metric(name="screenPageViews"),
            Metric(name="totalUsers"),
            Metric(name="sessions"),
            Metric(name="bounceRate"),
            Metric(name="averageSessionDuration"),
        ],
        date_ranges=dr,
        limit=1,
    ))

    summary: dict = {}
    if summary_resp.rows:
        mv = summary_resp.rows[0].metric_values
        summary = {
            "pv":       int(mv[0].value),
            "uu":       int(mv[1].value),
            "sessions": int(mv[2].value),
            "bounce":   float(mv[3].value) * 100,
            "avg_sec":  float(mv[4].value),
        }

    source_resp = client.run_report(RunReportRequest(
        property=prop,
        dimensions=[Dimension(name="sessionDefaultChannelGroup")],
        metrics=[Metric(name="sessions")],
        date_ranges=dr,
        order_bys=[OrderBy(
            metric=OrderBy.MetricOrderBy(metric_name="sessions"), desc=True
        )],
        limit=10,
    ))

    sources = [
        {
            "channel":  r.dimension_values[0].value,
            "sessions": int(r.metric_values[0].value),
        }
        for r in source_resp.rows
    ]

    return {"summary": summary, "pages": pages, "sources": sources}


def fetch_gsc_data(site_url: str) -> list[dict] | None:
    gsc_json = os.environ.get("GSC_SERVICE_ACCOUNT_JSON") or \
               os.environ.get("GA4_SERVICE_ACCOUNT_JSON")
    if not gsc_json:
        return None

    try:
        from googleapiclient.discovery import build

        creds = _load_credentials(
            "GSC_SERVICE_ACCOUNT_JSON"
            if os.environ.get("GSC_SERVICE_ACCOUNT_JSON")
            else "GA4_SERVICE_ACCOUNT_JSON",
            GSC_SCOPES,
        )
        service = build("searchconsole", "v1", credentials=creds)

        body = {
            "startDate": DATE_STR,
            "endDate":   DATE_STR,
            "dimensions": ["query"],
            "rowLimit":   GSC_LIMIT,
            "orderBy":    [{"fieldName": "clicks", "sortOrder": "DESCENDING"}],
        }
        res = (
            service.searchanalytics()
            .query(siteUrl=site_url, body=body)
            .execute()
        )

        return [
            {
                "query":       row["keys"][0],
                "clicks":      row.get("clicks",      0),
                "impressions": row.get("impressions",  0),
                "ctr":         row.get("ctr",          0.0) * 100,
                "position":    row.get("position",     0.0),
            }
            for row in res.get("rows", [])
        ]
    except Exception as e:
        print(f"[WARN] GSCデータ取得スキップ: {e}")
        return None


def _fmt_duration(sec: float) -> str:
    m, s = divmod(int(sec), 60)
    return f"{m}分{s:02d}秒"


def build_report_text(ga4: dict, gsc: list[dict] | None) -> str:
    s = ga4["summary"]
    lines: list[str] = []

    lines += [
        f"{'=' * 52}",
        f"  日次アクセスレポート  {DATE_JP}",
        f"{'=' * 52}",
        "",
        "■ サマリー",
        f"  PV           : {s.get('pv', 0):>8,}",
        f"  ユーザー数   : {s.get('uu', 0):>8,}",
        f"  セッション   : {s.get('sessions', 0):>8,}",
        f"  直帰率       : {s.get('bounce', 0):>7.1f}%",
        f"  平均滞在時間 : {_fmt_duration(s.get('avg_sec', 0))}",
        "",
    ]

    lines += ["■ ページ別PV Top", f"  {'PV':>6}  ページ"]
    for i, p in enumerate(ga4["pages"], 1):
        lines.append(f"  {p['pv']:>6,}  {p['path']}")
        title = textwrap.shorten(p['title'], width=50, placeholder="…")
        lines.append(f"  {'':>6}  └ {title}")
    lines.append("")

    if ga4["sources"]:
        lines += ["■ 流入チャネル別セッション"]
        for s_item in ga4["sources"]:
            lines.append(f"  {s_item['sessions']:>6,}  {s_item['channel']}")
        lines.append("")

    if gsc:
        lines += [
            "■ 検索クエリ Top（Search Console）",
            f"  {'Clicks':>6}  {'Impr':>6}  {'CTR':>5}  {'Pos':>5}  クエリ",
        ]
        for q in gsc:
            lines.append(
                f"  {int(q['clicks']):>6,}  {int(q['impressions']):>6,}"
                f"  {q['ctr']:>4.1f}%  {q['position']:>5.1f}  {q['query']}"
            )
        lines.append("")

    lines += [
        f"{'=' * 52}",
        "Powered by GA4 Data API + GitHub Actions",
    ]
    return "\n".join(lines)


def build_report_html(text: str) -> str:
    body = text.replace("&", "&amp;").replace("<", "&lt;").replace(">", "&gt;")
    return (
        "<html><body style='font-family:monospace;font-size:14px;"
        "background:#f9f9f9;padding:24px'>"
        f"<pre style='background:#fff;padding:20px;border-radius:8px;"
        f"border:1px solid #ddd;line-height:1.7'>{body}</pre>"
        "</body></html>"
    )


def send_email(subject: str, text_body: str, html_body: str) -> None:
    from_addr = os.environ["GMAIL_FROM"]
    app_pw    = os.environ["GMAIL_APP_PASSWORD"]
    to_addrs  = [a.strip() for a in os.environ["GMAIL_TO"].split(",")]

    msg = MIMEMultipart("alternative")
    msg["Subject"] = subject
    msg["From"]    = from_addr
    msg["To"]      = ", ".join(to_addrs)
    msg.attach(MIMEText(text_body, "plain", "utf-8"))
    msg.attach(MIMEText(html_body, "html",  "utf-8"))

    with smtplib.SMTP("smtp.gmail.com", 587) as server:
        server.ehlo()
        server.starttls()
        server.login(from_addr, app_pw)
        server.sendmail(from_addr, to_addrs, msg.as_string())

    print(f"メール送信完了 → {', '.join(to_addrs)}")


def main() -> None:
    property_id = os.environ.get("GA4_PROPERTY_ID", "")
    if not property_id:
        raise EnvironmentError("GA4_PROPERTY_ID が設定されていません。")

    site_url = os.environ.get("GSC_SITE_URL", "")

    print(f"[1/4] GA4 データ取得中... ({DATE_STR})")
    ga4 = fetch_ga4_data(property_id)

    print("[2/4] GSC データ取得中...")
    gsc = fetch_gsc_data(site_url) if site_url else None
    if gsc is None:
        print("      → GSCスキップ（GSC_SITE_URL 未設定 or 取得失敗）")

    print("[3/4] レポート生成中...")
    text = build_report_text(ga4, gsc)
    html = build_report_html(text)
    print(text)

    print("[4/4] メール送信中...")
    subject = f"【日次レポート】{DATE_JP} のアクセス解析"
    send_email(subject, text, html)


if __name__ == "__main__":
    main()
