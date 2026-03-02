			<span class="ganjamaylife-side"><a href="https://ganjabonsai.com/category/smoking-info/" target="_blank"><img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/read-2-2.jpg"></a></span>

<?php get_search_form(); ?>
		<br clear="all">			
		 <div class="index-right1">	

<!--<h3>おすすめ商品一覧</h3>
<div class="ogx-sku350-wrap">
  <section class="ogx-sku350-card">
    <div class="ogx-sku350-top">
      <div class="ogx-sku350-media" aria-label="商品画像">
        <span class="ogx-sku350-mediaText">写真</span>
      </div>

      <div class="ogx-sku350-info">
        <div class="ogx-sku350-title">AOH</div>
        <div class="ogx-sku350-price">$1,000</div>
        <p class="ogx-sku350-desc">
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>

    <div class="ogx-sku350-actions">
      <a href="#" class="ogx-sku350-btn">お店紹介</a>
      <a href="#" class="ogx-sku350-btn">商品ページ</a>
    </div>
  </section>
</div>
			 
	<br clear="all">-->		 
			<div class="blog-list">
<h3>人気記事一覧</h3>
<ul class="popular-list">
<?php
$popular = pog_get_popular_posts(5);

$shown = 0;
if ( $popular->have_posts() ) :
  while ( $popular->have_posts() ) : $popular->the_post();

    // ✅ cbdタグが付いてない投稿は表示しない
    if ( ! has_tag('cbd') ) { continue; }

    $shown++;
?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <span class="blog-list-left">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('thumbnail', ['loading' => 'lazy', 'alt' => get_the_title()]);
            } else { ?>
              <img src="<?php echo esc_url( get_template_directory_uri().'/image/nyc.jpg' ); ?>" alt="">
          <?php } ?>
        </span>
        <h4 class="blog-list-right"><?php the_title(); ?></h4>
      </a>
    </li>
<?php
  endwhile;
  wp_reset_postdata();
else: ?>
  <li>記事がありません。</li>
<?php endif; ?>

<?php if ( empty($shown) ) : ?>
  <li>記事がありません。</li>
<?php endif; ?>
</ul>

				
			</div>
			</div>