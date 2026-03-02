<?php
/*
Template Name: トップページ（home）
*/
get_header();
?>

<br clear="all">

<main>

<?php
$paged = max(
  1,
  (int) get_query_var('paged'),
  (int) get_query_var('page')
);

// 1ページ目だけトップ要素を表示
if ( $paged === 1 ) : ?>

<section class="hero">
  <div class="hero-inner">

    <!-- 左カラム（背景が切り替わる大カード） -->
    <a class="hero-left" href="https://ganjabonsai.com/smoking-info/thailand-cannabis-friendly-hotels/">
      <!-- 背景レイヤ（自動で切り替え） -->
      <div class="hero-bg">
        <span class="hero-bg-img bg1" aria-hidden="true"></span>
        <span class="hero-bg-img bg2" aria-hidden="true"></span>
        <span class="hero-bg-img bg3" aria-hidden="true"></span>
      </div>

      <!-- テキスト -->
      <div class="hero-text">
        <p class="sub">Cannabis Friendly Hotels</p>
        <p class="hero-title">タイで大麻が吸える<br>ホテルだけを探す</p>
        <p class="desc">
          喫煙ルール・ホテルごとの基準を確認し、実際に“大麻OK”と明記されている宿だけを厳選。バンコク / パタヤ / プーケット など、エリア別にすぐ探せます。
        </p>

        <span class="hero-btn">ホテルを探す →</span>
      </div>
    </a>

    <!-- 右カラム -->
    <div class="hero-right">

      <a class="hero-card" href="https://ganjabonsai.com/category/cannabis-clinic/">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/bar-01.jpg" alt="おすすめの大麻薬局">
        <div class="card-overlay">
          <p class="card-kicker">Recommended Cannabis Clinic</p>
          <p class="card-title">エリア別に厳選したおすすめ大麻薬局</p>
          <span class="card-btn">詳しくみる →</span>
        </div>
      </a>

      <a class="hero-card" href="https://ganjabonsai.com/smoking-info/smoker-beginner/">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/bar-02.jpg" alt="初めて大麻を吸う人向けガイド">
        <div class="card-overlay">
          <p class="card-kicker">Beginner Guide</p>
          <p class="card-title">初めてタイで大麻を吸う人向け安心ガイド</p>
          <span class="card-btn">詳しくみる →</span>
        </div>
      </a>

    </div>
  </div>
</section>	
	
    <div id="main header">
        <?php get_template_part( 'pr' ); ?>
    </div>

    <br clear="all">



<h2 class="top-review-h2">タイに訪問した大麻愛好者の声</h2>	
<div class="review-wrapper" randomdisplay="5">
<div class="custom-scroll-hint" id="custom-scroll-message">→ 右にスクロール</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>バンコクの友人にすすめられて、初めて医療大麻を使ってみました。昔から緊張しやすくて、仕事でも不安が波のように来るタイプ。でもTHC控えめのバランス系を少し吸っただけで、胸のざわざわが静かになっていくのが分かりました。思考が暴走しなくなり、「あ、今の自分で大丈夫だ」と自然に思えたのは初めての感覚。竹のパイプを使ったら、香りがまろやかで温度も低く、体に吸収される空気が優しい。アロマを吸っているような感覚で、自分のメンタルを守るスイッチとして本当に助けられました。（30代／女性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>仕事のストレスで食欲が落ちていた時期、バンコクで思い切って医療大麻を体験。ハイブリッドを少量だけ吸ったんですが、まず肩の力が抜ける。身体が「お腹すいた」と普通にサインを出してくれるのが久しぶりで、自分のリズムがやっと戻る感じでした。竹パイプは香りのキレがよくて、重くならない吸い心地だから初心者でも怖くなかったです。心理的な負担がふっと軽くなって、食事ってこんなに楽しかったんだと気づかせてくれました。（20代／男性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>更年期に入ってから気分の浮き沈みが激しく、夜になると考えすぎて眠れない日が続いていました。バンコクで医療大麻を少量試してみたところ、思考が静まり、体がゆっくり緩むような感覚がありました。何か劇的に変わるわけではなく、「過剰な不安だけが取り除かれる」という自然な働き方に驚きました。竹の水パイプは煙が刺さらず、湯気のように柔らかく喉に入ってきて、呼吸が深くなる。自分の感情と丁寧に向き合える時間が持てるようになり、本当に救われました。（50代／女性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>仕事柄ずっとパソコンの前で頭がフル稼働していて、夜になっても神経がオフにならないのが悩みでした。インディカ寄りをホテルで少量吸ったら、脳の“回転数”が静かになっていって、体と意識がやっと同じ速度に戻るような感じ。深呼吸が自然にできたのは久しぶりでした。竹パイプは空気との混ざり方が絶妙で、重さがないから集中しすぎた脳が緩む。メンタルのブレーキとして使うのは想像以上に合理的だと感じました。（30代／男性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/02/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>仕事で感情の切り替えが追いつかず、心がずっと張りつめたままの日が続いていました。友達とバンコク旅行中に医療大麻を少し体験したら、涙が出るほど緊張が抜けていくのが分かりました。「自分を守る感覚」が戻ってくるというか、優しくなれるスイッチを押されたような感じ。竹のパイプは香りが自然で、草の成分がそのまま風に乗ってくる感じがして安心感がありました。あの落ち着きは、薬では得られなかったものです。（20代／女性）</p>
    </div>
</div>

</div>
	
	
<br clear="all">


<?php endif; ?>

<?php
// 共通一覧パーツ
get_template_part('template-parts/pog-tabs-index');
?>

</main>

<?php get_template_part('must'); ?>
<?php get_footer(1); ?>
