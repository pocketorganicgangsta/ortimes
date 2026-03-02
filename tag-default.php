<?php get_header(2); ?>
<div class="page-template3">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>  
    <br clear="all">

    <div class="category-main">
        <div class="index-left">
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
            <?php get_template_part('side-1'); ?>
        </div>
    </div>
</div>

<?php get_template_part('must'); ?>
<?php get_footer(); ?>
