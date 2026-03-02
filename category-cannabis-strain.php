<?php
/**
 * Template: category-cannabis-strain.php
 * 大麻品種カテゴリ一覧
 */

get_header(5); ?>

<div id="content" class="single-contents">

  <!-- ★ 2カラムレイアウトのラッパ -->
  <div class="strain-layout">

    <!-- ==========================
         左カラム：一覧本体
    =========================== -->
    <div class="strain-main strain-main1">

      <?php if ( function_exists( 'bcn_display' ) ) : ?>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php bcn_display(); ?>
        </div>
      <?php endif; ?>

      <section class="strain-archive-list">
		  
<input type="checkbox" id="pog-table-toggle" class="pog-table-toggle">

<div class="pog-apple-table-wrap" id="pog-apple-table" aria-label="おすすめまとめ">
	<h2 class="pog-research-title">世界一の医療大麻フルコース探査中</h2>

  <table class="pog-apple-table">
    <thead>
      <tr>
        <th>シチュエーション</th>
        <th>品種名</th>
        <th>ショップ名＋品種詳細</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>創作タイム部門</td>
        <td>Miami Mami</td>
        <td><a class="pog-apple-link" href="https://ganjabonsai.com/cannabis-strain/miami-mami/">Tropical Thunder Dispensary</a></td>
      </tr>

      <tr class="pog-apple-muted">
        <td>社交モード部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>昼ハイ部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>夜チル部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>深夜のインナートリップ部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>映画タイム部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>熟睡モード部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>心のデトックス部門</td><td>探索中</td><td>探索中</td>
      </tr>
      <tr class="pog-apple-muted">
        <td>集中ワーク部門</td><td>探索中</td><td>探索中</td>
      </tr>
    </tbody>
  </table>
</div>

<label for="pog-table-toggle" class="pog-table-button pog-table-button--below">
  もっと見る
</label>


		  
		  
		  
		  

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php
              // ACFフィールド
              $name = get_field( 'strain-name' );
              $meta = get_field( 'strain-meta' );
              $desc = get_field( 'strain-desc' );

              // 説明文：ACFがなければ本文から生成（全文を使い、見た目はCSSでフェードアウト）
              $source = $desc ? $desc : wp_strip_all_tags( get_the_content() );

              // シチュエーション用タグ（slug が scene-◯◯ のものだけ）
              $scene_tags = array();
              $tags       = get_the_tags();
              if ( $tags ) {
                foreach ( $tags as $tag ) {
                  if ( strpos( $tag->slug, 'scene-' ) === 0 ) {
                    $scene_tags[] = $tag;
                  }
                }
              }
            ?>

            <!-- 1件分のカード -->
            <article class="strain-hero strain-archive-card">
              <div class="strain-hero-inner">

                <!-- 左：サムネイル -->
                <figure class="strain-hero-thumb">
                  <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
                  </a>
                </figure>

                <!-- 右：テキスト -->
                <div class="strain-hero-body">
                  <p class="strain-hero-label">STRAIN PROFILE</p>

                  <!-- 名前（ACFなければタイトル） -->
                  <h2 class="strain-hero-name">
                    
                      <?php echo $name ? esc_html( $name ) : get_the_title(); ?>
                    
                  </h2>

                  <!-- シチュエーションタグ（ピルボタン） -->
                  <?php if ( ! empty( $scene_tags ) ) : ?>
                    <ul class="strain-scene-list">
                      <?php foreach ( $scene_tags as $tag ) : ?>
                        <li class="strain-scene-item">
                          <a href="<?php echo esc_url( get_tag_link( $tag ) ); ?>"
                             class="strain-scene-pill">
                            <?php echo esc_html( $tag->name ); ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <!-- メタ情報 -->
                  <?php if ( $meta ) : ?>
                    <p class="strain-hero-meta"><?php echo esc_html( $meta ); ?></p>
                  <?php endif; ?>

                  <!-- 説明文：下半分をグラデーションでフェードアウト -->
                  <div class="strain-archive-excerpt-wrapper">
                    <p class="strain-archive-excerpt">
                      <?php echo nl2br( esc_html( $source ) ); ?>
                    </p>
                  </div>

                  <!-- 詳細ボタン（説明文のすぐ下） -->
                  <a href="<?php the_permalink(); ?>" class="strain-archive-readmore">
                    詳細を読む
                  </a>

                </div><!-- /.strain-hero-body -->

              </div><!-- /.strain-hero-inner -->
            </article>

          <?php endwhile; ?>

          <!-- ページネーション -->
          <div class="strain-archive-pagination">
            <?php the_posts_pagination(); ?>
          </div>

        <?php else : ?>

          <p class="related-one-none">このカテゴリにはまだ大麻品種の記事がありません。</p>

        <?php endif; ?>

      </section><!-- /.strain-archive-list -->

    </div><!-- /.strain-main -->

 <!-- ===========================
       左：サイドバー（PCは常時表示 / スマホは開閉）
  ============================ -->
  <aside class="strain-sidebar">

    <!-- PC表示：常時表示（detailsを使わない） -->
    <div class="scene-pc">
      <h2 class="strain-side-title">シチュエーションで探す</h2>

      <div class="strain-tags-list">
        <a href="https://ganjabonsai.com/tag/scene-creative-time/" class="tag-card">
          <div class="tag-card-title">創作タイム</div>
          <div class="tag-card-desc">クリエイティブ脳が冴える</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-social-mode/" class="tag-card">
          <div class="tag-card-title">社交モード</div>
          <div class="tag-card-desc">人と話すのが楽しくなる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-day-high/" class="tag-card">
          <div class="tag-card-title">昼ハイ</div>
          <div class="tag-card-desc">外出やアクティブなシーン向け</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-night-chill/" class="tag-card">
          <div class="tag-card-title">夜チル</div>
          <div class="tag-card-desc">落ち着いた静かな夜に最適</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-midnight-trip/" class="tag-card">
          <div class="tag-card-title">深夜のインナートリップ</div>
          <div class="tag-card-desc">感覚が鋭くなる系</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-movie-time/" class="tag-card">
          <div class="tag-card-title">映画タイム</div>
          <div class="tag-card-desc">感情移入が高まる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-deep-sleep/" class="tag-card">
          <div class="tag-card-title">熟睡モード</div>
          <div class="tag-card-desc">睡眠の質を上げたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="tag-card">
          <div class="tag-card-title">心のデトックス</div>
          <div class="tag-card-desc">情緒を整えたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-focus-work/" class="tag-card">
          <div class="tag-card-title">集中ワーク</div>
          <div class="tag-card-desc">タスクをこなしたい時</div>
        </a>
      </div>
    </div>

    <!-- スマホ表示：開閉（初期は閉） -->
    <details class="scene-accordion scene-sp">
      <summary class="scene-summary">シチュエーションで探す</summary>

      <div class="strain-tags-list">
        <a href="https://ganjabonsai.com/tag/scene-creative-time/" class="tag-card">
          <div class="tag-card-title">創作タイム</div>
          <div class="tag-card-desc">クリエイティブ脳が冴える</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-social-mode/" class="tag-card">
          <div class="tag-card-title">社交モード</div>
          <div class="tag-card-desc">人と話すのが楽しくなる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-day-high/" class="tag-card">
          <div class="tag-card-title">昼ハイ</div>
          <div class="tag-card-desc">外出やアクティブなシーン向け</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-night-chill/" class="tag-card">
          <div class="tag-card-title">夜チル</div>
          <div class="tag-card-desc">落ち着いた静かな夜に最適</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-midnight-trip/" class="tag-card">
          <div class="tag-card-title">深夜のインナートリップ</div>
          <div class="tag-card-desc">感覚が鋭くなる系</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-movie-time/" class="tag-card">
          <div class="tag-card-title">映画タイム</div>
          <div class="tag-card-desc">感情移入が高まる</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-deep-sleep/" class="tag-card">
          <div class="tag-card-title">熟睡モード</div>
          <div class="tag-card-desc">睡眠の質を上げたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-heart-detox/" class="tag-card">
          <div class="tag-card-title">心のデトックス</div>
          <div class="tag-card-desc">情緒を整えたい時</div>
        </a>

        <a href="https://ganjabonsai.com/tag/scene-focus-work/" class="tag-card">
          <div class="tag-card-title">集中ワーク</div>
          <div class="tag-card-desc">タスクをこなしたい時</div>
        </a>
      </div>
    </details>

  </aside>
	 
  </div><!-- /.strain-layout -->

</div><!-- /#content -->

<?php get_footer(3); ?>
