<?php
/*
Template Name: All Posts
*/
get_header(7); // headerファイルの指定

?>

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
            // 現在のページを取得
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // WP_Query の設定
            $args = array(
                'post_type' => 'post', // 投稿タイプ
                'posts_per_page' => 3, // 1ページあたりの投稿数
                'paged' => $paged, // 現在のページ番号を指定
            );
            
            $all_posts = new WP_Query($args); // クエリを生成

            // 投稿があるかチェック
            if ($all_posts->have_posts()):
                while ($all_posts->have_posts()): $all_posts->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="post_links">
                            <span class="index-left-left"><?php the_post_thumbnail(); ?></span>
                            <h2 class="index-left-right"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h2>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else: ?>
                <p>投稿が見つかりません。</p>
            <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <div class="pagination">
                <?php
                // ページネーション表示
                the_posts_pagination( array(
                    'prev_text' => __( '前へ', 'textdomain' ),
                    'next_text' => __( '次へ', 'textdomain' ),
                    'mid_size'  => 2,
                ));
                ?>
            </div>
            
            <?php wp_reset_postdata(); // クエリをリセット ?>
        </div>

        <div class="index-right">
            <?php get_template_part('side'); ?>
        </div>
    </div>
</div>

<?php get_template_part('must'); ?>
<?php get_footer(); ?>
