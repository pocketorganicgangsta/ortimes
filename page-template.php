<?php get_header(3); ?>
<div class="page-template page-template1">
        <br clear="all">

	<div class="category-main">
		
        <div class="index-left">
            <ul>
            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;?>
            <?php if (have_posts()):?>
                <?php while (have_posts()): the_post();?>
                    <?php if ( ! has_tag( array( 'food', 'blog' ) ) ) : ?>

                       <li><a href="<?php the_permalink() ?>" class="post_links">
                        <span class="index-left-left"><?php the_post_thumbnail($post->ID); ?></span>
                        <h2 class="index-left-right"><?php the_title(); ?></h2>
                        </a></li>
                    <?php endif; ?>
                <?php endwhile;?>
                <?php wp_reset_postdata();?>
            <?php endif;?>
            </ul>
        <!--ページネーション-->
<?php the_posts_pagination( array( 'prev_next' => false ) ); ?>
			
 			
        </div>
			<div class="index-right">

			<?php get_template_part('side-1'); ?>
				
        </div>
    </div>

    </div>

<?php get_template_part('must'); ?>

<?php get_footer(); ?>
