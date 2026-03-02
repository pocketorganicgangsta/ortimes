<?php 
get_header(6); 
?>

<div class="category">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
        } ?>
    </div>  
    <br clear="all">

    <div class="category-main">
        <div class="index-left">
            <ul>
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php if ( ! has_tag( array( 'food', 'blog' ) ) ) : ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="post_links">
                                    <span class="index-left-left">
                                        <?php the_post_thumbnail(); ?>
                                    </span>
                                    <h2 class="index-left-right">
                                        <?php the_title(); ?>
                                    </h2>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>

                <?php else : ?>

                    <p>該当する記事がありません</p>

                <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <?php
            the_posts_pagination( array(
                'prev_next' => false,
                // 念のため検索クエリを引き継ぐ
                'add_args'  => array(
                    's' => get_search_query(),
                ),
            ) );
            ?>
        </div>

        <div class="index-right">
            <?php get_template_part( 'side-1' ); ?>
        </div>
    </div>
</div>

<?php get_template_part( 'must' ); ?>
<?php get_footer(); ?>
