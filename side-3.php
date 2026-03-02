			
		 <div class="index-right1">	
          <h3>大麻薬局情報</h3>
			<div class="tag-shop-add">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.477284132274!2d100.88771607507482!3d12.877002187429692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102957edce49d5f%3A0xaa52de0f58e00ed0!2sTropical%20Thunder%20%7C%20Weed%20Cannabis%20Dispensary%20%E5%A4%A7%E9%BA%BB!5e0!3m2!1sja!2sth!4v1767849228728!5m2!1sja!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<p class="tag-shop-add-p-1">Tropical Thunder</p>
				<p class="tag-shop-add-p-2">パタヤ / ジョムティエン</p>
			<p class="tag-shop-add-p-3">6421 Unit, 16 Moo 12 Jomtien Second Rd, Muang Pattaya, Bang Lamung District, Chon Buri 20150</p>
     <ul class="pro-ul2">
<!--        <li class="unique-social-item"><a href="https://pokeog555.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-home.png"></a></li>
-->        <li class="unique-social-item"><a href="https://www.facebook.com/p/Tropical-Thunder-Farm-61565420437643/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-fb.png"></a></li>

        <li class="unique-social-item"><a href="https://www.instagram.com/tropicalthunder_farm/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-ig.png"></a></li>
<!--        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-youtube.png"></a></li>
        <li class="unique-social-item"><a href="https://www.instagram.com/ganjabonsai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-tiktok.png"></a></li>
        <li class="unique-social-item"><a href="https://twitter.com/ganjabonsai" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/sns-x.png"></a></li>
-->
		 
     </ul>
				
				
<details class="pog-hours" aria-label="営業時間">
  <summary class="pog-hours__summary">
    <span class="pog-hours__status">営業時間を確認</span>
    <span class="pog-hours__chev" aria-hidden="true"></span>
  </summary>

  <div class="pog-hours__body">
    <dl class="pog-hours__list">
      <div class="pog-hours__row">
        <dt class="pog-hours__day">月曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">火曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">水曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">木曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">金曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">土曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
      <div class="pog-hours__row">
        <dt class="pog-hours__day">日曜日</dt>
        <dd class="pog-hours__time">11時00分〜1時00分</dd>
      </div>
    </dl>
  </div>
</details>
			<br clear="all">	
<a
  href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>"
  target="_blank"
  class="pog-contact-btn">
  LINEにこのURLを送る
</a>
			
<a href="https://ganjabonsai.com/cannabis-clinic/tropical-thunder-dispensary/" target="_blank" class="pog-contact-btn">
  店舗紹介の記事を読む
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