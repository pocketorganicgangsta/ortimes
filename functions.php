<?php
/**
 * functions.php (revised)
 */

/* -----------------------------------------
 * Popular post HTML (custom)
 * ----------------------------------------- */
function my_custom_single_popular_post( $post_html, $p, $instance ){
    // 画像(返り値は「画像ID」)
    $img = get_field( 'img', $p->id ); // 'img' はACFのフィールド名
    $imgurl = wp_get_attachment_image_src( $img, 'full' ); // サイズは自由に
    $imghtml = '';
    if ( ! empty( $imgurl[0] ) ) {
        $imghtml = '<img src="' . esc_url( $imgurl[0] ) . '" alt="">';
    }

    // （略）あなたの処理をここに
    return $post_html;
}

/* -----------------------------------------
 * User Agent mobile detect
 * ----------------------------------------- */
function is_mobile(){
    $useragents = array(
        'iPhone',
        'iPod',
        'Android.*Mobile',
        'Windows.*Phone',
        'dream',
        'CUPCAKE',
        'blackberry9500',
        'blackberry9530',
        'blackberry9520',
        'blackberry9550',
        'blackberry9800',
        'webOS',
        'incognito',
        'webmate'
    );
    $pattern = '/' . implode('|', $useragents) . '/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/* -----------------------------------------
 * Thumbnails
 * ----------------------------------------- */
add_theme_support('post-thumbnails');
add_image_size( 'ig-thum', 400, 400, false );


/* -----------------------------------------
 * Shortcode: include php
 * ※ myphp が2回 add_shortcode されていたので「1つ」に統一
 * ----------------------------------------- */
function my_php_Include($params = array()) {
    $atts = shortcode_atts(array('file' => 'default'), $params);
    $file = sanitize_file_name($atts['file']);

    ob_start();

    // child theme 優先
    $path = trailingslashit( get_stylesheet_directory() ) . $file . '.php';
    if ( file_exists($path) ) {
        include $path;
    }

    return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


/*** ビジュアルリッチエディター非表示 ***/
add_filter('user_can_richedit', function() { return false; }, 50);


/* -----------------------------------------
 * QuickTags
 * ----------------------------------------- */
function add_my_quicktag() {
?>
<script type="text/javascript">
QTags.addButton('見出し(h2)', '見出し(h2)', '<h2>', '</h2>' + '\n');
QTags.addButton('小見出し(h3)', '小見出し(h3)', '<h3>', '</h3>' + '\n');
QTags.addButton('引用囲み', '引用囲み', '<blockquote><strong>', '</strong></blockquote>' + '\n');
QTags.addButton('引用参照元', '引用参照元', '<span class="blockquote-name">', '</span>' + '\n');
QTags.addButton('地図', '地図', '[map]', '[/map]' + '\n');
QTags.addButton('ul/li', 'ul/li', '<ul><li>　</li><li>　</li><li>　</li>', '</ul>' + '\n');
QTags.addButton('出典先URL', '出典先URL', '<div class="link-single-name">Licensed material used with permission by<a target="_blank" href="リンクURL">リンク名</a>', '</div>' + '\n');
QTags.addButton('Youtbe', 'Youtbe', '<div class="youtube">URL', '</div>' + '\n');
QTags.addButton('吹き出し左', '吹き出し左', '[speech_bubble type="std" subtype="L1" icon="left.jpg" name="Kei"]左側の吹き出しです。パターンはいろいろ変えられます。' , '[/speech_bubble]' + '\n');
QTags.addButton('吹き出し右', '吹き出し右', '[speech_bubble type="std" subtype="R1" icon="right.jpg" name="先生"]右側の吹き出しです。しゃべっている人のアイコンは画像に変えられます。' , '[/speech_bubble]' + '\n');
QTags.addButton('吹き出し右(JR)', '吹き出し右(JR)', '[speech_bubble type="std" subtype="R1" icon="right-1.jpg" name="JR"]右側の吹き出しです。しゃべっている人のアイコンは画像に変えられます。' , '[/speech_bubble]' + '\n');
QTags.addButton('関連記事', '関連記事', '<div class="single-relation"><div class="single-relation-left"><img src="" alt="" /></div><div class="single-relation-right"><p>タイトル</p><span class="single-relation-span"><a class="button" href="#" target="_blank">関連記事を読む</a></span></div>', '</div>' + '\n');
QTags.addButton('太文字', '太文字', '<span>', '</span>' + '\n');
</script>
<?php
}
add_action('admin_print_footer_scripts',  'add_my_quicktag');


/* ===============================================
 * レスポンシブ ページネーション
 * =============================================== */
function the_pagination() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 ) return;

    echo '<nav class="pagination">';
    echo paginate_links( array(
        'base'      => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
        'format'    => '',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $wp_query->max_num_pages,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type'      => 'list',
        'end_size'  => 3,
        'mid_size'  => 3
    ) );
    echo '</nav>';
}


/* -----------------------------------------
 * template_include (FIX)
 * 検索結果は絶対にテンプレを変えない
 * all/page/n のときだけテンプレを差し替える（必要なら）
 * ----------------------------------------- */
function load_custom_template_for_pagination( $template ) {

    if ( is_admin() ) return $template;

    // ✅ 検索結果は常に通常テンプレ（これでページ2以降もヘッダーが揃う）
    if ( is_search() ) return $template;

    // ✅ あなたの rewrite で作った all/page/n のときだけ（ページ2以降）
    if ( is_page('all') && is_paged() ) {
        $new_template = locate_template('page-template.php');
        if ( ! empty($new_template) ) {
            return $new_template;
        }
    }

    return $template;
}
add_filter('template_include', 'load_custom_template_for_pagination');


/* -----------------------------------------
 * Rewrite: all/page/n → pagename=all&paged=n
 * ----------------------------------------- */
function custom_rewrite_rules() {
    add_rewrite_rule(
        '^all/page/([0-9]+)/?',
        'index.php?pagename=all&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rules');


/* -----------------------------------------
 * Post views count
 * ----------------------------------------- */
// 1) 閲覧数カウント
function pog_set_post_views( $post_id ) {
    if ( empty( $post_id ) ) return;

    $key = 'post_views_count';
    $count = get_post_meta( $post_id, $key, true );

    if ( $count === '' ) {
        $count = 0;
        add_post_meta( $post_id, $key, '0', true );
    }

    $count = (int) $count + 1;
    update_post_meta( $post_id, $key, (string) $count );
}

// 記事表示時のみカウント（ログイン管理者は除外・任意）
function pog_track_post_views() {
    if ( is_single() ) {
        global $post;
        if ( $post && ! is_preview() ) {
            pog_set_post_views( $post->ID );
        }
    }
}
add_action( 'wp_head', 'pog_track_post_views' );


// 2) 人気記事取得（メタ無い投稿も0扱いで拾う＆フォールバック付き）
function pog_get_popular_posts( $limit = 3, $post_type = 'post' ) {

    // まず「閲覧数メタがある投稿」を人気順で取得
    $q = new WP_Query( array(
        'post_type'      => $post_type,
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'meta_key'       => 'post_views_count',
        'orderby'        => 'meta_value_num',
        'order'          => 'DESC',
        'meta_query'     => array(
            array(
                'key'     => 'post_views_count',
                'compare' => 'EXISTS',
            )
        ),
        'no_found_rows'        => true,
        'ignore_sticky_posts'  => true,
    ) );

    // 1件も無い＝まだ誰もメタを持っていない → 新着でフォールバック
    if ( ! $q->have_posts() ) {
        $q = new WP_Query( array(
            'post_type'      => $post_type,
            'posts_per_page' => $limit,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'no_found_rows'       => true,
            'ignore_sticky_posts' => true,
        ) );
    }

    return $q;
}


/* -----------------------------------------
 * 大麻品種紹介カテゴリでは投稿エディタを非表示にする
 * ----------------------------------------- */
function hide_editor_for_strain_category() {
    global $post;
    if ( ! isset($post) ) return;

    $target_slug = 'cannabis-strain';

    $categories = get_the_category($post->ID);
    if ( $categories ) {
        foreach ( $categories as $cat ) {
            if ( $cat->slug === $target_slug ) {
                remove_post_type_support('post', 'editor');
                break;
            }
        }
    }
}
add_action('admin_head', 'hide_editor_for_strain_category');


/* -----------------------------------------
 * ホームの一覧から「大麻品種紹介」カテゴリだけ除外する
 * ----------------------------------------- */
function gbj_exclude_strain_category_from_home( $query ) {

    if ( is_admin() || ! $query->is_main_query() ) return;

    if ( $query->is_home() ) {

        $slug = 'cannabis-strain';
        $cat  = get_category_by_slug( $slug );

        if ( $cat ) {
            $query->set( 'category__not_in', array( $cat->term_id ) );
        }
    }
}
add_action( 'pre_get_posts', 'gbj_exclude_strain_category_from_home' );


