<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<br clear="all">



<main>
	
<?php
// 今が何ページ目かを取得（front-page / home / 固定ページ どれでも効くように）
$paged = max(
    1,
    (int) get_query_var( 'paged' ),
    (int) get_query_var( 'page' )
);

// 1ページ目だけヒーロー(トップ用ヘッダー)を出す
if ( $paged === 1 ) : ?>
    <div id="main header">
        <?php get_template_part( 'pr' ); ?>
    </div>

    <br clear="all">
<?php endif; ?>


<h2 class="top-review-h2">タイに訪問した大麻愛好者の声</h2>	
<div class="review-wrapper" randomdisplay="5">
<div class="custom-scroll-hint" id="custom-scroll-message">→ 右にスクロール</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://pokeog555.com/wp/wp-content/uploads/2025/10/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>バンコクで初めて大麻を試しました。40代に入ってから眠りが浅く、薬もいまいちだったんですが、CBD寄りの品種にしたら嘘みたいに自然と眠れた。頭が静かになって、久しぶりにスッと起きられたんです。植物って本当に体と心に効くんだなと実感。 竹の水パイプを使ったら煙当たりがやわらかくて、外の空気とも混ざって自然の中にいる感覚。タイの湿気と竹の香りが合わさって、さらにリラックスできました。プラスチックの道具とはまったく別物の、奥行きのある味でした。（40代／男性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://pokeog555.com/wp/wp-content/uploads/2025/10/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>初めてディスペンサリーに入ったときは少し緊張していましたが、店員さんが丁寧に話を聞いてくれて、すすめられたリラックス系を試してみました。吸った瞬間、肩の力がスッと抜けて、深く息ができた。海風や音楽が妙に心地よくて、「ああ、少し休んでいいんだな」と素直に思えたんです。タイのゆるい空気が心まで解きほぐしてくれました。  
使った竹のパイプがすごく印象的で、手に馴染む感触と吸うたびに広がる竹の香りが心地いい。タイのクラフトらしい温もりがあって、“吸う”という行為そのものがアートみたいに感じました。自然素材の優しさが、大麻の体験をより深いものにしてくれました。（30代／男性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://pokeog555.com/wp/wp-content/uploads/2025/10/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>仕事のストレスで笑うことすら忘れていた頃、タイで友人にすすめられて初めて吸ってみました。しばらくすると心がふっと軽くなって、自然と笑顔が出て、人と話すのが楽しく感じられた。依存が怖くて避けていたけど、実際は心を整えるスイッチのような感覚で、少し前向きになれた気がします。  
その場所には小さな大麻盆栽が飾られていて、静かに光を受けながら生きている姿が印象的でした。見ているだけで心が落ち着いて、「自然の中に癒しがある」という言葉の意味を実感。吸うだけじゃなく、“感じる時間”そのものが心のケアになりました。（30代／女性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://pokeog555.com/wp/wp-content/uploads/2025/10/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>デスクワークが続いて慢性的な腰痛に悩まされていました。チェンマイの医療系ディスペンサリーで、THCとCBDのバランスが取れたオイルを試したところ、15分ほどで体がスッと軽くなって本当に驚きました。副作用もなく、薬よりも穏やかで安心できる。体だけでなく、心までほぐれていくような不思議な癒しの感覚でした。  
竹の水パイプを使うと煙が冷やされて、吸い込んでも刺激が少なく、呼吸がとても楽。竹の自然な香りが心地よくて、体の痛みだけでなく心の緊張までやわらぐようでした。医療目的としてだけでなく、心のリトリートとしても大麻と竹の組み合わせは最高だと思います。（20代／女性）</p>
    </div>
</div>

<div class="review-container">
    <div class="review-icon">
        <img src="https://pokeog555.com/wp/wp-content/uploads/2025/10/icon-2-1.png" />
    </div>
    <div class="review-content">
<p>パタヤの海辺で夕日を眺めながら、友人と初めて吸いました。最初は少し緊張したけれど、次第に頭がクリアになって、心の中が落ち着いていくのを感じました。悩みが消えたわけじゃないけど、「まあいっか」と思える余裕が戻ってきた気がします。旅の途中で、ちゃんと自分を休ませる時間を見つけられました。  
そのとき友人が持っていたのが大麻盆栽で、風に揺れる葉を眺めながら吸っていると、不思議と心が静かになりました。自然の力ってこういうことなんだなと思えたし、ただの一服が思っていた以上に深い時間になりました。（20代／男性）</p>
    </div>
</div>

</div>
	
	
<br clear="all">
<hr>

<?php get_template_part('topdis'); ?>


<div class="tabs">
    <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item" for="all">記事一覧</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item" for="programming" id="back-1-link">ディスペンサリー</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item" for="design" id="back-2-link">おすすめホテル</label>
    <div class="tab_content" id="all_content">
        <div class="index-left">
            <ul>
                 <!-- ループ処理 -->
                 <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                       <li><a href="<?php the_permalink() ?>" class="post_links">
                        <span class="index-left-left"><?php the_post_thumbnail($post->ID); ?></span>
                        <h2 class="index-left-right"><?php the_title(); ?></h2>
                        </a></li>
                 <?php endwhile; endif; ?>
            </ul>
        <!--ページネーション-->
<?php the_posts_pagination( array( 'prev_next' => false ) ); ?>
			
 			
        </div>
        <div class="index-right">

			<?php get_template_part('side'); ?>

		</div>
    </div>
    <div id="back-1"></div><div class="tab_content" id="programming_content">
        <div>
			
<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>個人的にオススメのディスペンサリー</h2>
  </div>
  <div class="custom-scroll-area">
    <div class="custom-scroll-hint1" id="custom-scroll-message">→ 右にスクロール</div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/Amelie.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Amélie</h3>
        <p>チャイナタウン</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/Down-Tempo.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Down Tempo</h3>
        <p>シー・プラヤ </p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Ganja Man</h3>
        <p>アソーク</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/babyblants-2.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>BABY BLUNT</h3>
        <p>エカマイ</p>
        <div class="custom-tour-buttons">
		  <a href="https://ganjabonsai.com/dispensay/baby-blunt/" class="custom-blog-button">ブログを見る</a>
		</div>
      </div>
    </div>
	  
    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Tropicanna Weed Dispensary & Café</h3>
        <p>エカマイ </p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/kushhouse.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Kush House</h3>
        <p>プロンポン </p>
      </div>
    </div>

  </div>
</section>

<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>バンコクにあるオススメのディスペンサリー</h2>
  </div>
  <div class="custom-scroll-area">
    <div class="custom-scroll-hint1" id="custom-scroll-message">→ 右にスクロール</div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/greenhouse.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Green House Thong Lo</h3>
        <p>トンロー</p>
        <div class="custom-tour-buttons">
		  <a href="https://ganjabonsai.com/dispensay/green-house-thong-lo/" class="custom-blog-button">ブログを見る</a>
		</div>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Down Tempo</h3>
        <p>シー・プラヤ </p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/greennation.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Green Nation</h3>
        <p>フアマーク</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cookies.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Cookies</h3>
        <p>ルンピニ</p>
        <div class="custom-tour-buttons"></div>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/peach.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Peach Panties</h3>
        <p>カオサン</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Kush House</h3>
        <p>プロンポン </p>
      </div>
    </div>

  </div>
</section>

<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>パタヤにあるオススメのディスペンサリー</h2>
  </div>
  <div class="custom-scroll-area">

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>The Budtender</h3>
        <p>ウォーキングストリート</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Nirvana Raggaebar</h3>
        <p>ナクルア</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>WICHAI PAIPAR SHOP</h3>
        <p>セントラルパタヤロード</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Highsiam cannabis dispensary</h3>
        <p>サードロード</p>
      </div>
    </div>

    <div class="custom-tour-card">
      <img src="<?php echo get_template_directory_uri(); ?>/image/202610sample.jpg" alt="">
      <div class="custom-tour-card-content">
        <h3>Nuggs Premium Cannabis</h3>
        <p>サードロード</p>
      </div>
    </div>

  </div>
</section>
			
<!--  <section class="custom-category-section">
    <div class="custom-category-header">
      <h2>その他エリアにあるオススメのディスペンサリー</h2>
    </div>
    <div class="custom-scroll-area">
<div class="custom-tour-card">
  <img src="<?php echo get_template_directory_uri(); ?>/image/tour-20.jpg" alt="ラン島の観光施設写真">
  <div class="custom-tour-card-content">
    <h3>ラン島</h3>
    <p>カップル向け</p>
    <div class="custom-tour-rating">★★★★☆ 4.0</div>
 <div class="custom-tour-buttons"></div> 
  </div>
</div>
<div class="custom-tour-card">
  <img src="<?php echo get_template_directory_uri(); ?>/image/tour-21.jpg" alt="トロピカルボタニカルガーデンの観光施設写真">
  <div class="custom-tour-card-content">
    <h3>トロピカルボタニカルガーデン</h3>
    <p>カップル向け</p>
    <div class="custom-tour-rating">★★★★☆ 4.5</div>
    <div class="custom-tour-buttons">
     <a href="#" class="custom-blog-button">ブログを見る</a>
    </div>
  </div>
</div>
<div class="custom-tour-card">
  <img src="<?php echo get_template_directory_uri(); ?>/image/tour-22.jpg" alt="ワット・ヤンサンワララムの観光施設写真">
  <div class="custom-tour-card-content">
    <h3>ワット・ヤンサンワララム</h3>
    <p>一人旅向け</p>
    <div class="custom-tour-rating">★★★★☆ 4.0</div>
    <div class="custom-tour-buttons">
      <!--<a href="#" class="custom-blog-button">ブログを見る</a>
    </div>
  </div>
</div>    </div>
  </section>-->
	  

	
		</div>
    </div>
    <div id="back-2"></div><div class="tab_content" id="design_content">
<div class="custom-main-wrapper">
<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>オススメの大麻OKホテル</h2>
  </div>
  <div class="custom-scroll-area">
	  <div class="custom-scroll-hint1 sma" id="custom-scroll-message">→ 右にスクロール</div>

      <!-- Bangkok / Rent V38 -->
      <div class="custom-large-card">
        <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=1665950" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-best-01.jpg">
          <div class="custom-large-card-content">
            <h3>Rent V38</h3>
            <p>バンコク北部 / チャトチャック寄り</p>
            <div class="custom-rating">★★★★☆ 4.8</div>
            <strong>約2,500〜4,000 THB / 泊</strong>
            <span class="custom-blog-button2">詳細を見る</span>
            <p class="hotel-rev-p">
              バンコク中心から少し北にある「アーリー」エリアに建つ The Quarter Ari by UHG は、静かに過ごしたいスモーカーに人気のホテルです。街の騒音からは離れつつも、周囲にはチルなカフェや420フレンドリーな雰囲気のバーが点在。広々とした客室、屋上プール、ジムを備え、1日の終わりにゆったりとリラックスできる環境が整っています。BTSアーリー駅まで徒歩3分とアクセスも良好で、「都会の中で落ち着いて吸える時間」を求める人にぴったりの滞在先です。
            </p>
          </div>
        </a>
      </div>

      <!-- Pattaya / Rabbit Resort -->
      <div class="custom-large-card">
        <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=48417" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-best-02.jpg">
          <div class="custom-large-card-content">
            <h3>Rabbit Resort Pattaya</h3>
            <p>ジョムティエン（パタヤ南部）</p>
            <div class="custom-rating">★★★★☆ 4.7</div>
            <strong>4,000〜7,000 THB / 泊</strong>
            <span class="custom-blog-button2">詳細を見る</span>
            <p class="hotel-rev-p">
              ジョムティエンビーチ沿いにある南国ヴィラタイプのリゾート。木造コテージが木々に囲まれて並び、プールや庭を歩くだけで“チルモード”に入れる空気感が魅力です。各部屋は独立性が高く、周囲の目が気になりにくい設計。ビーチまでは徒歩すぐで、夕方に砂浜を散歩しながらクールダウンするのも最高です。スタッフのホスピタリティも高評価で、初心者・女性・カップルでも安心して滞在できる「大人の420向きリゾート」としておすすめできます。
            </p>
          </div>
        </a>
      </div>

  </div>
</section>

	
<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>バンコク × 大麻OKホテル</h2>
  </div>
  <div class="custom-scroll-area">
    <div class="custom-scroll-hint1" id="custom-scroll-message">→ 右にスクロール</div>

    <!-- 1 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=4472047" target="_blank">
        <span class="custom-rank-badge">1</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-01.jpg">
        <div class="custom-small-card-content">
          <h3>The Quarter Ari by UHG</h3>
          <p>アーリー</p>
          <div class="custom-rating">★★★★☆ 4.7</div>
          <strong>約2,500〜4,000 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            バンコク中心から少し北にある「アーリー」エリアに建つ The Quarter Ari by UHG は、静かに過ごしたいスモーカーに人気のホテルです。街の騒音からは離れつつも、周囲にはチルなカフェや420フレンドリーな雰囲気のバーが点在。広々とした客室、屋上プール、ジムを備え、1日の終わりにゆったりとリラックスできる環境が整っています。BTSアーリー駅まで徒歩3分とアクセスも良好。
          </p>
        </div>
      </a>
    </div>

    <!-- 2 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=9762167" target="_blank">
        <span class="custom-rank-badge">2</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-02.jpg">
        <div class="custom-small-card-content">
          <h3>Live Local Cafe & Hotel</h3>
          <p>旧市街</p>
          <div class="custom-rating">★★★★☆ 4.3</div>
          <strong>約1,400〜2,800 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            旧市街寄りのローカルエリアにある、カフェ併設の小さなホテル。ホテル名から “Cannabis Friendly” を掲げている珍しい宿で、バルコニー付きの部屋と屋外喫煙スペースが確保されています。周辺は落ち着いた住宅街で、夜でも歩きやすく女性ひとり旅のレビューも高評価。「人目を気にせずゆるくチルしたい」人向けの隠れ家です。
          </p>
        </div>
      </a>
    </div>

    <!-- 3 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=96281" target="_blank">
        <span class="custom-rank-badge">3</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-03.jpg">
        <div class="custom-small-card-content">
          <h3>Grande Centre Point Hotel Ratchadamri</h3>
          <p>ラチャダムリ</p>
          <div class="custom-rating">★★★★☆ 4.6</div>
          <strong>約5,000〜8,000 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            ラチャダムリ駅すぐの大型高級ホテル。広めのバルコニー付き客室や屋外プール、スパ、ジャグジーなど設備が充実し、「高級感も安全性も捨てたくない」人に最適です。エリア自体の治安が良く、夜道も明るいので初心者や女性旅でも安心。
          </p>
        </div>
      </a>
    </div>

    <!-- 4 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=108193" target="_blank">
        <span class="custom-rank-badge">4</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-04.jpg">
        <div class="custom-small-card-content">
          <h3>ibis Bangkok Sathorn</h3>
          <p>サトーン</p>
          <div class="custom-rating">★★★★☆ 4.4</div>
          <strong>約1,200〜2,200 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            サトーンエリアのビジネスホテル。価格を抑えつつも、清潔な客室と安定したサービスで「コスパ重視＋安全に泊まりたい」人の定番です。バルコニーはありませんが、ホテル外に喫煙エリアがあります。
          </p>
        </div>
      </a>
    </div>

  </div>
</section>

	
<section class="custom-category-section">
  <div class="custom-category-header">
    <h2>パタヤ × 大麻OKホテル</h2>
  </div>
  <div class="custom-scroll-area">
    <div class="custom-scroll-hint1" id="custom-scroll-message">→ 右にスクロール</div>

    <!-- 1 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=292206" target="_blank">
        <span class="custom-rank-badge">1</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-06.jpg">
        <div class="custom-small-card-content">
          <h3>Zing Resort & Spa</h3>
          <p>ジョムティエン</p>
          <div class="custom-rating">★★★★☆ 4.4</div>
          <strong>約 1,600〜3,000 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            ジョムティエンの中でも特に「静かで安全」と評判のエリアにあるリゾートホテル。バルコニー付き客室と屋外喫煙スペースがあり、匂いトラブルを起こしにくい動線が取りやすいのがポイント。
          </p>
        </div>
      </a>
    </div>

    <!-- 2 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=951169" target="_blank">
        <span class="custom-rank-badge">2</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-07.jpg">
        <div class="custom-small-card-content">
          <h3>The Monttra Pattaya</h3>
          <p>プラタムナック</p>
          <div class="custom-rating">★★★★☆ 4.5</div>
          <strong>約5,500〜9,500 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            パタヤ南端・プラタムナックの高級住宅街にある、森と海に囲まれたブティックリゾート。全室ヴィラタイプで隣室との距離があり、広いテラスで静かに過ごせます。
          </p>
        </div>
      </a>
    </div>

    <!-- 3 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=1147179" target="_blank">
        <span class="custom-rank-badge">3</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-08.jpg">
        <div class="custom-small-card-content">
          <h3>The Agate Pattaya Boutique Resort</h3>
          <p>ジョムティエン</p>
          <div class="custom-rating">★★★★☆ 4.0</div>
          <strong>約1,800〜3,500 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            ジョムティエンビーチまで徒歩数分のブティックホテル。派手すぎないリゾート感と落ち着いた大人の雰囲気が特徴です。
          </p>
        </div>
      </a>
    </div>

    <!-- 4 -->
    <div class="custom-small-card">
      <a href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1953236&hl=ja-jp&hid=1622455" target="_blank">
        <span class="custom-rank-badge">4</span>
        <img src="<?php echo get_template_directory_uri(); ?>/image/hotel-5-09.jpg">
        <div class="custom-small-card-content">
          <h3>The Grass Serviced Suites</h3>
          <p>パタヤロード</p>
          <div class="custom-rating">★★★☆☆ 3.9</div>
          <strong>約900〜1,800 THB / 泊</strong>
          <span class="custom-blog-button1">予約する</span>
          <p class="hotel-rev-p">
            中心街寄りにありながら、キッチン付きスイートで長期滞在がしやすいサービスアパート。価格を抑えつつ自由度の高い滞在が可能。
          </p>
        </div>
      </a>
    </div>

  </div>
</section>

	
</div>

    </div>
</div>

	



	
</main>


<?php get_template_part('must'); ?>

<?php get_footer(1); ?>