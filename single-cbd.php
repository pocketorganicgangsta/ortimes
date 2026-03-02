<?php
/*
Template Name: CBD single
*/
get_header(11);
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
		  
		     <hr>

    <p class="date-single">
      ※この記事は<?php the_time('Y/m/d'); ?>に公開した情報になります。<br>
      ※当サイトに掲載された情報については、その内容の正確性等に対して、一切保障するものではありません。<br>
      ※当サイトに掲載された情報については、投稿者の個人的な私感が含まれている場合があります。<br>
      ※ご利用等、閲覧者自身のご判断で行なうようお願い致します。<br>
      ※当ウェブサイトに掲載された情報に基づいて被ったいかなる損害についても、情報提供者は一切責任を負いかねます。
    </p>


      </div>

    <?php endwhile; else: ?>

      <span class="title">記事が見つかりませんでした。</span>
      <p>検索で見つかるかもしれません。</p><br />
      <?php get_search_form(); ?>

    <?php endif; ?>
	  <br clear="all">
	  
  <section class="ogx-latestRail" data-ogx-latest-rail aria-label="タイのオススメの大麻薬局">
       <div class="gbj-section-title1">
          <p class="gbj-section-en">ORGANIC GANGSTA TIMES</p>
          <h2 class="gbj-section-ja">
          【CBD】人気記事一覧
          </h2>
          <span class="gbj-section-line"></span>
      </div>

    <div class="ogx-latestRail__wrap">
      <div class="ogx-latestRail__viewport" tabindex="0">
        <div class="ogx-latestRail__track">

          <article class="ogx-latestCard border-ogx">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/sample-shop-05.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ</button>
              <h3 class="ogx-latestCard__headline">日本でCBDをオンライン購入しても大丈夫？違法性・安全性・選び方を整理</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/japan-cbd-online-safety-guide/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/cbd.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ</button>
              <h3 class="ogx-latestCard__headline">CBDは本当に安全なのか？CBD吸引後の不安・体調トラブルの考え方</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/cbd-safety-anxiety-health-effects/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/why-cbd-does-not-work-feel.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ</button>
              <h3 class="ogx-latestCard__headline">CBDが効かないと感じるのは理由があった！体感と誤解を整理</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/why-cbd-does-not-work-feel/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

          <article class="ogx-latestCard">
            <div class="ogx-latestCard__thumb">
              <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/cbd-5.jpg" alt="" loading="lazy">
            </div>
            <div class="ogx-latestCard__body">
              <button class="ogx-latestChip ogx-latestChip--date" type="button">まとめ</button>
              <h3 class="ogx-latestCard__headline">日本で安全なCBDを選ぶ基準を再定義。購入前チェックリスト</h3>
              <div class="ogx-latestCard__row">
                <a class="ogx-latestCard__cta" href="https://ganjabonsai.com/smoking-info/safe-cbd-japan-buying-checklist/">記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span></a>
              </div>
            </div>
          </article>

        </div>
      </div>

      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
      </button>
      <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
        <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
      </button>

      <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
      <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
    </div>
  </section>
<?php /*?>
       <div class="gbj-section-title1">
          <p class="gbj-section-en">ORGANIC GANGSTA TIMES</p>
          <h2 class="gbj-section-ja">
          【CBD】おすすめ商品一覧
          </h2>
          <span class="gbj-section-line"></span>
      </div>  
	  
<div class="ogx-skuGrid">
  <section class="ogx-skuCard">
    <!-- そのまま -->
    <div class="ogx-skuCard__top">
      <div class="ogx-skuCard__media"><span class="ogx-skuCard__mediaText">写真</span></div>
      <div class="ogx-skuCard__info">
        <h3 class="ogx-skuCard__title">SAMPLE</h3>
        <div class="ogx-skuCard__price">￥1,000</div>
        <p class="ogx-skuCard__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
    <div class="ogx-skuCard__actions">
      <a class="ogx-skuCard__btn" href="#">お店紹介</a>
      <a class="ogx-skuCard__btn" href="#">商品ページ</a>
    </div>
  </section>

  <section class="ogx-skuCard">
    <!-- 2個目 -->
    <div class="ogx-skuCard__top">
      <div class="ogx-skuCard__media"><span class="ogx-skuCard__mediaText">写真</span></div>
      <div class="ogx-skuCard__info">
        <h3 class="ogx-skuCard__title">SAMPLE</h3>
        <div class="ogx-skuCard__price">￥1,000</div>
        <p class="ogx-skuCard__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
    <div class="ogx-skuCard__actions">
      <a class="ogx-skuCard__btn" href="#">お店紹介</a>
      <a class="ogx-skuCard__btn" href="#">商品ページ</a>
    </div>
  </section>
<?php */?></div>



  </div>
</main>

<?php get_footer('2'); // footer-2.php ?>
