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
            <ul>
                <?php 
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $wp_query = new WP_Query( array(
                    'cat' => get_queried_object_id(), // 現在のカテゴリIDを取得
                    'paged' => $paged
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
						<br clear="all">
			<ul class="reco-add-01">
				<li><a href="https://ganjabonsai.com/category/cannabis-strain/"><img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/pic-01-1.jpg"></a></li>
				<li><a href="https://ganjabonsai.com/category/dispensay/"><img src="https://ganjabonsai.com/wp/wp-content/uploads/2025/12/pic-02.jpg"></a></li>
			</ul>
			
        </div>

        <div class="index-right">
            <?php get_template_part('side-1'); ?>
        </div>
    </div>
</div>

<?php get_template_part('must'); ?>
<?php get_footer(); ?>
