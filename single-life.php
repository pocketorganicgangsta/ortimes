<?php
/*
Template Name: 投稿ページ
*/
get_header('1'); // header-1.php
?>

<main>
  <div class="single">

    <br clear="all">

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if ( function_exists('bcn_display') ) {
        bcn_display();
      } ?>
    </div>
    <br clear="all">
	  
	  
	  

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php if ( has_post_thumbnail() ) : ?>
        <figure class="eye">
          <?php
            $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
          ?>
          <img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title_attribute(); ?>">
        </figure>
      <?php endif; ?>

      <h1><?php the_title(); ?></h1>

<div class="date">
  <?php
    $published = get_the_date('Y年m月d日（D）');
    $modified  = get_the_modified_time('Y年m月d日（D）');
  ?>

  <span class="published">公開日：<?php echo esc_html( $published ); ?></span>

  <?php if ( $modified !== $published ) : ?>
    <span class="modified"> / 最終更新日：<?php echo esc_html( $modified ); ?></span>
  <?php endif; ?>

  <?php the_tags('<span class="tags">','</span><span class="tags">','</span>'); ?>
</div>
	  <br clear="all">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5613564489469574"
     crossorigin="anonymous"></script>
<!-- ganjabonsai-top-2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5613564489469574"
     data-ad-slot="1240515119"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	 <br clear="all">

      <div class="single-box">
        <br clear="all" />
        <?php the_content(); ?>
		  		  
<?php if ( get_the_ID() !== 2103 ) : ?>
<section class="human-vision-wrap">
  <div class="human-vision-box">

    <div class="human-vision-label">
      「大麻のそばで、僕は変わる」とは？
    </div>

    <div class="human-vision-content">
      <p>
        出会って１週間のニューヨーカーと結婚をしてニューヨークへ移住し、突然の離婚からホームレスになってしまったり、出会って１週間の元GO GO嬢と結婚してタイに移住して、有機大麻農家を始めたりと色々波乱万丈な人生を送っており、その変化の中には大麻がそばにありました。
      </p>

      <p>
        僕にとって大麻はメンタルと整える為のツールから、”自分の本音”と向き合うツールになりました。
        そんな男の波乱万丈な人生を覗きたい方はまずは
        「<a href="https://ganjabonsai.com/ganja-mylife/ganja-my-life-introduction/">
        “大麻のそばで、僕は変わる”を読む前に</a>」を読んでください。
      </p>

      <div class="button014">
        <a href="https://ganjabonsai.com/ganja-mylife/ganja-my-life-introduction/">
          記事を読む
        </a>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>
	  

    <p class="date-single">
      ※この記事は<?php the_time('Y/m/d'); ?>に公開した情報になります。<br>
      ※これは個人の体験であり、医療行為の代替推奨ではありません。<br>
      ※当サイトに掲載された情報については、その内容の正確性等に対して、一切保障するものではありません。<br>
      ※当サイトに掲載された情報については、投稿者の個人的な私感が含まれている場合があります。<br>
      ※ご利用等、閲覧者自身のご判断で行なうようお願い致します。<br>
      ※当ウェブサイトに掲載された情報に基づいて被ったいかなる損害についても、情報提供者は一切責任を負いかねます。
    </p>

    <br clear="all">

      </div>

    <?php endwhile; else: ?>

      <span class="title">記事が見つかりませんでした。</span>
      <p>検索で見つかるかもしれません。</p><br />
      <?php get_search_form(); ?>

    <?php endif; ?>
	  <br clear="all">
	  
	  
<?php get_template_part('must'); ?> 
	  
	  	  
<div class="gbj-section-title">
  <p class="gbj-section-en">THAILAND CANNABIS GUIDE</p>
  <h2 class="gbj-section-ja">
    タイで医療大麻を吸うなら、次に読むべき4つ
  </h2>
  <span class="gbj-section-line"></span>
  <p class="gbj-section-lead">
    この記事を読み終えたあとに「ホテル」「安全」「お店」「最新情報（LINE）」の順で行動できるように、重要な情報だけをまとめています。
  </p>
</div>
<section class="cv-link-section">
  <div class="cv-link-inner">
    <div class="cv-link-grid">

      <div class="cv-link-card">
        <figure class="cv-link-thumb">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/bar-01.jpg" alt="喫煙に寛容なホテルまとめ">
        </figure>
        <div class="cv-link-body">
          <p class="cv-link-tag cv-hotel">ホテル</p>

          <!-- タイトルをリンク化 -->
          <a href="https://ganjabonsai.com/smoking-info/thailand-cannabis-friendly-hotels/" class="cv-link-title">
            タイにある大麻OKなホテルだけを厳選しました
          </a>

          <p class="cv-link-text">
            バルコニーで吸える可能性が高いホテル、スタッフが大麻に寛容な宿を中心に厳選。迷ったらここから。
          </p>

          <!-- CTAボタン -->
          <a href="https://ganjabonsai.com/smoking-info/thailand-cannabis-friendly-hotels/" class="cv-link-btn">
            ホテル特集を見る
          </a>
        </div>
      </div>

      <div class="cv-link-card">
        <figure class="cv-link-thumb">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/bar-02.jpg" alt="LINE登録で最新情報を受け取る">
        </figure>
        <div class="cv-link-body">
          <p class="cv-link-tag cv-line">初めての大麻</p>

          <a href="https://ganjabonsai.com/line/" class="cv-link-title">
            医療大麻を初めて吸う向けにまとめました
          </a>

          <p class="cv-link-text">
            タイに旅行に来て医療大麻を初めて吸う人のために事前に頭に入れておくべき知識をまとめました。
          </p>

          <a href="https://ganjabonsai.com/smoking-info/smoker-beginner/" class="cv-link-btn">
            記事を読む
          </a>
        </div>
      </div>

      <!-- ③ルール・安全 -->
      <div class="cv-link-card">
        <figure class="cv-link-thumb">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/bar-03.jpg" alt="タイで捕まらないための基礎知識">
        </figure>
        <div class="cv-link-body">
          <p class="cv-link-tag cv-rule">波乱万丈物語</p>

          <a href="https://ganjabonsai.com/smoking-info/thailand-weed-guide/" class="cv-link-title">
           波乱万丈人生「大麻のそばで、僕は変わる」
          </a>

          <p class="cv-link-text">
            出会って１週間の女性と結婚してニューヨークとタイに移住した借金2000万抱える大麻盆栽化の物語。
          </p>

          <a href="https://ganjabonsai.com/category/ganja-mylife/" class="cv-link-btn">
            物語を読む
          </a>
        </div>
      </div>

      <!-- ④ディスペンサリー -->
      <div class="cv-link-card">
        <figure class="cv-link-thumb">
          <img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/bar-04.jpg" alt="おすすめディスペンサリー">
        </figure>
        <div class="cv-link-body">
          <p class="cv-link-tag cv-shop">数量限定</p>

          <a href="https://ganjabonsai.com/category/dispensay/" class="cv-link-title">
            全てハンドメイドで作られた竹製喫煙器具
          </a>

          <p class="cv-link-text">
            ニューヨーク、ロンドン、台湾、タイの限られたお店でのみ販売してるオーガニックギャングスターアイテム。
          </p>

          <a href="https://ganjabonsai.com/category/dispensay/" class="cv-link-btn">
            アイテム一覧を見る
          </a>
        </div>
      </div>

    </div><!-- /.cv-link-grid -->

  </div><!-- /.cv-link-inner -->
</section>


	  
	  
<?php get_template_part('topdis'); ?>
<div class="pr1"><?php get_template_part('pr1'); ?></div>


  </div>
</main>

<?php get_footer('2'); // footer-2.php ?>
