			
		 <div class="index-right1">	
          <h3>大麻薬局情報</h3>
			<div class="tag-shop-add">
				<img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/greenhouse-1.jpg">
			<p class="tag-shop-add-p-1">Green House</p>
				<p class="tag-shop-add-p-2">バンコク（スクンビット/トンロー/カオサン/チャイナタウン）/サムイ島</p>

     <ul class="pro-ul2">
<!--        <li class="unique-social-item"><a href="https://pokeog555.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-home.png"></a></li>
       <li class="unique-social-item"><a href="https://www.facebook.com/p/Tropical-Thunder-Farm-61565420437643/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-fb.png"></a></li>
--> 
        <li class="unique-social-item"><a href="https://www.instagram.com/greenhouse_thailand/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-ig.png"></a></li>
<!--        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-youtube.png"></a></li>
        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-tiktok.png"></a></li>
        <li class="unique-social-item"><a href="https://twitter.com/ganjabonsai" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-x.png"></a></li>
-->
		 
     </ul>
				
				
			<br clear="all">	
<a
  href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>"
  target="_blank"
  class="pog-contact-btn">
  LINEにこのURLを送る
</a>
			
<a href="https://ganjabonsai.com/cannabis-clinic/green-house-seed/" target="_blank" class="pog-contact-btn">
  トンロー店舗の記事を読む
</a>					

				
			</div>
			<br clear="all">
			<div class="blog-list">
<h3>関連記事一覧</h3>
<ul class="popular-list">
<?php
$popular = pog_get_popular_posts(3); // 3件
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