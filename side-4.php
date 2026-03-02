			
		 <div class="index-right1">	
          <h3>楽天ショップ情報</h3>
			<div class="tag-shop-add">
			<img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/sample.jpg">
			<p class="tag-shop-add-p-1">SAMPLE</p>
			<p class="tag-shop-add-p-3">国内で丁寧に作られる弊社のCBD製品には有機栽培された良質なヘンプを使用しており、開発、製造、販売を一貫して行っているため、その透明性と安全性にも自信があります。</p>
     <ul class="pro-ul2">
<!--        <li class="unique-social-item"><a href="https://pokeog555.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-home.png"></a></li>
-->        <li class="unique-social-item"><a href="https://www.facebook.com/p/Tropical-Thunder-Farm-61565420437643/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-fb.png"></a></li>

        <li class="unique-social-item"><a href="https://www.instagram.com/tropicalthunder_farm/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-ig.png"></a></li>
<!--        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-youtube.png"></a></li>
        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-tiktok.png"></a></li>
        <li class="unique-social-item"><a href="https://twitter.com/ganjabonsai" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-x.png"></a></li>
-->
		 
     </ul>
				
							<br clear="all">	
<a
  href="/"
  target="_blank"
  class="pog-contact-btn">
  ショップを見る
</a>
				
<a href="/" target="_blank" class="pog-contact-btn">
  店舗紹介の記事を読む
</a>	
				
				
			</div>
			<br clear="all">
			<div class="blog-list">
<h3>CBD関連記事一覧</h3>

<ul class="popular-list">
<?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'tag'            => 'cbd', // ← このタグのみ
  'post_status'    => 'publish',
  'ignore_sticky_posts' => true,
);

$query = new WP_Query($args);

if ( $query->have_posts() ) :
  while ( $query->have_posts() ) : $query->the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <span class="blog-list-left">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail(
                'thumbnail',
                array(
                  'loading' => 'lazy',
                  'alt' => esc_attr( get_the_title() )
                )
              );
            } else { ?>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/image/nyc.jpg' ); ?>" alt="">
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