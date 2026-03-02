<?php get_header(2); ?>
<div class="category">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>  
    <br clear="all">

    <div class="category-main">
        <div class="index-left">
<div class="ganja-story-wrap">
  <div class="ganja-story-frame">

    <!-- 上段 -->
    <div class="ganja-story-top">
      <div class="ganja-story-image"><img src="https://ganjabonsai.com/wp/wp-content/uploads/2026/01/kei.jpg" /></div>

      <div class="ganja-story-text">
        <h2 class="ganja-story-title">実際に僕が体験した実話</h2>
        <p class="ganja-story-description">
          出会った１週間のニューヨーカーと結婚して、2年後に離婚からのホームレス生活を経て、
          タイでまた出会って１週間の元GO GO嬢と結婚して有機大麻農家を初めて、
          そこから借金2000万円抱えながらタイで大麻と共に生き抜く中で経験した波瀾万丈な物語。
          ランダムに切り取りながら綴る連載「大麻のそばで、僕は変わる」をお楽しみください。
        </p>

        <a href="https://ganjabonsai.com/ganja-mylife/ganja-my-life-introduction/"
           class="ganja-story-intro-link">
          はじめに読んでください
        </a>
      </div>
    </div>

    <!-- セクションタイトル -->
    <div class="ganja-story-section">
      <span class="ganja-story-section-line"></span>
      <p class="ganja-story-section-label">波瀾万丈物語</p>
      <span class="ganja-story-section-line"></span>
    </div>

    <!-- ボタン -->
    <div class="ganja-story-buttons">
      <span class="ganja-story-button ganja-story-button--disabled">
        ①ニューヨーク移住前の波乱万丈な生活
      </span>

      <span class="ganja-story-button ganja-story-button--disabled">
        ②出会って１週間のニューヨーカーと結婚生活
      </span>

      <a href="https://ganjabonsai.com/tag/new-yorker-life-after-divorce/"
         class="ganja-story-button ganja-story-button--active">
        ③ニューヨーカー離婚後の生活
      </a>

      <span class="ganja-story-button ganja-story-button--disabled">
        ④出会って１週間のGOGO嬢とのタイ生活
      </span>

      <span class="ganja-story-button ganja-story-button--disabled">
        ⑤？？？の波乱万丈な生活（2025年完結済）
      </span>

      <span class="ganja-story-button ganja-story-button--disabled">
        ⑥？？？の波乱万丈な生活（現在進行形）
      </span>
    </div>

  </div>
</div>

			<h2 class="top-review-h2">新着記事一覧</h2>
			<br clear="all">
            <ul>
                <?php 
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$wp_query = new WP_Query( array(
					'cat' => get_queried_object_id(),
					'paged' => $paged,
					'post__not_in' => array(2103),
				));
                
                // 記事があるかチェック
                if ( $wp_query->have_posts() ): ?>
                    <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                        <?php if ( ! has_tag( array( 'food', 'blog' ) ) ) : ?>
                            <li><a href="<?php the_permalink() ?>" class="post_links">
                                <span class="index-left-left"><?php the_post_thumbnail(); ?></span>
                                <h2 class="index-left-right"><?php the_title(); ?></h2>
                            </a></li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>該当する記事がありません</p>
                <?php endif; ?>
                
                <?php wp_reset_postdata(); ?>
            </ul>

            <!-- ページネーション -->
            <?php the_posts_pagination( array( 'prev_next' => false ) ); ?>

			
        </div>

        <div class="index-right">
            <?php get_template_part('side-2'); ?>
        </div>
    </div>
</div>

<?php get_template_part('must'); ?>
<?php get_footer(); ?>
