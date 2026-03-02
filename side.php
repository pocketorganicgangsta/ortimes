        <?php get_template_part('me'); ?>
			<span class="ganjamaylife-side"><a href="https://smallnycer.com/oglife/ganja-my-life-introduction/" target="_blank"><img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/read-1.jpg"></a></span>
		<?php get_search_form(); ?>
		<br clear="all">
		 <div class="index-right1">	
          <h3>人気タグ一覧</h3>
            <ul>
                <li><a href="https://ganjabonsai.com/tag/must/">必読記事</a></li>
                <li><a href="https://ganjabonsai.com/tag/cannabis-law-thailand/">法律・ルール</a></li>
                <li><a href="https://ganjabonsai.com/tag/thai-travel/">タイ旅行前</a></li>
                <li><a href="https://ganjabonsai.com/tag/safety-tips/">安全・注意点</a></li>
                <li><a href="https://ganjabonsai.com/tag/effects-experience/">作用・体感</a></li>
                <li><a href="https://ganjabonsai.com/tag/summary-article/">まとめ</a></li>
                <li><a href="https://ganjabonsai.com/tag/ganjabonsai/">大麻盆栽</a></li>
                <li><a href="https://ganjabonsai.com/tag/aroi-mak/">アロイマーク</a></li>
                <li><a href="https://ganjabonsai.com/category/cannabis-strain/">医療大麻図鑑</a></li>
                <li><a href="https://ganjabonsai.com/category/event/">イベントレポ</a></li>
            </ul>
			<br clear="all">
			<div class="blog-list">
<h3>人気記事一覧</h3>
<ul class="popular-list">
<?php
$popular = pog_get_popular_posts(5); // 3件
if ( $popular->have_posts() ) :
  while ( $popular->have_posts() ) : $popular->the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <span class="blog-list-left">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('thumbnail', array('loading' => 'lazy', 'alt' => get_the_title()));
            } else { ?>
              <img src="<?php echo esc_url( get_template_directory_uri().'/image/nyc.jpg' ); ?>" alt="">
          <?php } ?>
        </span>
        <h4 class="blog-list-right"><?php the_title(); ?></h4>
      </a>
    </li>
  <?php endwhile;
  wp_reset_postdata();
else: ?>
  <li>記事がありません。</li>
<?php endif; ?>
</ul>
				
				
	
			</div>
			</div>