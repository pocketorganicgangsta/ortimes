<?php
$post = $wp_query->post;

// ★ tag: cbd が付いている投稿は最優先で専用テンプレ
if ( has_tag('cbd', $post) ) {
    include( get_template_directory() . '/single-cbd.php' );

// cannabis-strain
} elseif ( in_category('cannabis-strain') ) {
    include( get_template_directory() . '/strain-single.php' );

// ganja-mylife
} elseif ( in_category('ganja-mylife') ) {
    include( get_template_directory() . '/single-life.php' );

// cannabis-clinic
} elseif ( in_category('cannabis-clinic') ) {
    include( get_template_directory() . '/single-cannabis-clinic.php' );

// default
} else {
    include( get_template_directory() . '/single-default.php' );
}
?>
