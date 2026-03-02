<?php get_header(10); ?>

<div class="page-template2">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>  
    <br clear="all">
<br clear="all">
<?php /*?><section class="ogx-latestRail" aria-label="最新記事">
       <div class="gbj-section-title2">
          <p class="gbj-section-en">ORGANIC GANGSTA TIMESE</p>
          <h2 class="gbj-section-ja">
          【バッドトリップ】人気記事一覧
          </h2>
          <span class="gbj-section-line"></span>
      </div>	

  <!-- レール -->
  <div class="ogx-latestRail__wrap">
    <div class="ogx-latestRail__viewport" tabindex="0">
      <div class="ogx-latestRail__track" id="ogxLatestTrack">

        <!-- Card -->
        <article class="ogx-latestCard">
          <div class="ogx-latestCard__thumb">
            <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cannabis-1-4.jpg" alt="" loading="lazy">
            <!-- ※いいねUIは入れない（不要） -->
          </div>

          <div class="ogx-latestCard__body">
            <!-- 日付：ボタン型（リンク不要） -->
            <button class="ogx-latestChip ogx-latestChip--date" type="button">喫煙後</button>

            <!-- タイトル -->
            <h3 class="ogx-latestCard__headline">大麻バッドトリップとは？初心者が知るべき原因・症状・回避法</h3>

            <!-- 右側ボタン：押すとタグ等の隠し要素を開く（任意） -->
            <div class="ogx-latestCard__row">
              <a href="https://ganjabonsai.com/smoking-info/cannabis-anxiety-bad-trip-prevention/"><button class="ogx-latestCard__toggle" type="button"
                aria-expanded="false" aria-controls="ogxCardHidden-1">
                記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span>
              </button></a>
            </div>


          </div>
        </article>

        <!-- Card -->
        <article class="ogx-latestCard">
          <div class="ogx-latestCard__thumb">
            <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/cannabis-15.jpg" alt="" loading="lazy">
          </div>
          <div class="ogx-latestCard__body">
            <button class="ogx-latestChip ogx-latestChip--date" type="button">喫煙後</button>
            <h3 class="ogx-latestCard__headline">吸ってから30分後に不安が出た理由｜THC過多と体質の関係</h3>
            <div class="ogx-latestCard__row">
              <a href="https://ganjabonsai.com/smoking-info/thc-anxiety-after-30-minutes/"><button class="ogx-latestCard__toggle" type="button"
                aria-expanded="false" aria-controls="ogxCardHidden-2">
                記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span>
              </button></a>
            </div>
          </div>
        </article>

        <!-- Card -->
        <article class="ogx-latestCard">
          <div class="ogx-latestCard__thumb">
            <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/anxiety.jpg" alt="" loading="lazy">
          </div>
          <div class="ogx-latestCard__body">
            <button class="ogx-latestChip ogx-latestChip--date" type="button">喫煙前</button>
            <h3 class="ogx-latestCard__headline">なぜ吸いすぎると不安になるのか？パニック感の正体</h3>
            <div class="ogx-latestCard__row">
              <a href="https://ganjabonsai.com/smoking-info/thc-anxiety-overuse/"><button class="ogx-latestCard__toggle" type="button"
                aria-expanded="false" aria-controls="ogxCardHidden-3">
                記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span>
              </button></a>
            </div>

          </div>
        </article>

        <!-- さらに続く前提（ここが“見切れて一部非表示”になる） -->
        <article class="ogx-latestCard">
          <div class="ogx-latestCard__thumb">
            <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cannabis-37.jpg" alt="" loading="lazy">
          </div>
          <div class="ogx-latestCard__body">
            <button class="ogx-latestChip ogx-latestChip--date" type="button">喫煙前</button>
            <h3 class="ogx-latestCard__headline">初めて大麻を吸う前に必ず準備すべき3つのこと</h3>
            <div class="ogx-latestCard__row">
              <a href="https://ganjabonsai.com/smoking-info/first-time-weed-preparation/"><button class="ogx-latestCard__toggle" type="button"
                aria-expanded="false" aria-controls="ogxCardHidden-4">
                記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span>
              </button></a>
            </div>

          </div>
        </article>
		  
        <!-- さらに続く前提（ここが“見切れて一部非表示”になる） -->
        <article class="ogx-latestCard">
          <div class="ogx-latestCard__thumb">
            <img class="ogx-latestCard__img" src="https://ganjabonsai.com/wp/wp-content/uploads/2025/11/cannabis-2.jpg" alt="" loading="lazy">
          </div>
          <div class="ogx-latestCard__body">
            <button class="ogx-latestChip ogx-latestChip--date" type="button">喫煙前</button>
            <h3 class="ogx-latestCard__headline">初めての大麻 “適量”ガイド｜初心者が安心して楽しむ為の目安</h3>
            <div class="ogx-latestCard__row">
              <a href="https://ganjabonsai.com/smoking-info/cannabis-beginner-dosage-guide/"><button class="ogx-latestCard__toggle" type="button"
                aria-expanded="false" aria-controls="ogxCardHidden-4">
                記事を読む<span class="ogx-latestCard__chev" aria-hidden="true">›</span>
              </button></a>
            </div>

          </div>
        </article>
		  

      </div>
    </div>

    <!-- 右矢印：全体Hoverで表示 -->
    <button class="ogx-latestRail__arrow ogx-latestRail__arrow--right" type="button" aria-label="次へ">
      <span class="ogx-latestRail__arrowIcon" aria-hidden="true">›</span>
    </button>

    <!-- 左矢印（必要なら） -->
    <button class="ogx-latestRail__arrow ogx-latestRail__arrow--left" type="button" aria-label="前へ">
      <span class="ogx-latestRail__arrowIcon" aria-hidden="true">‹</span>
    </button>

    <!-- 右側を“見切れ”っぽくするフェード -->
    <div class="ogx-latestRail__fade ogx-latestRail__fade--right" aria-hidden="true"></div>
    <div class="ogx-latestRail__fade ogx-latestRail__fade--left" aria-hidden="true"></div>
  </div>
</section>
<?php */?>
    <div class="category-main">
        <div class="index-left">
			
       <div class="gbj-section-title1">
          <p class="gbj-section-en">ORGANIC GANGSTA TIMESE</p>
          <h2 class="gbj-section-ja">
          【まとめ記事】新着記事一覧
          </h2>
          <span class="gbj-section-line"></span>
      </div>			
			
            <ul>
                <!-- 記事が存在する場合 -->
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" class="post_links">
                            <span class="index-left-left"><?php the_post_thumbnail($post->ID); ?></span>
                            <h2 class="index-left-right"><?php the_title(); ?></h2>
                        </a></li>
                    <?php endwhile; ?>
                <!-- 記事が存在しない場合の表示 -->
                <?php else: ?>
                    <p class="noblog">該当する記事がありません。</p>
                <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <?php the_posts_pagination(array('prev_next' => false)); ?>
        </div>

        <div class="index-right">
			<br clear="all">

            <?php get_template_part('side-1'); ?>
        </div>
    </div>
</div>

<br clear="all">
<?php get_footer(); ?>
