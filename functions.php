<?php 
// カスタムナビゲーションメニュ―追加
add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class="widget" >',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
     )
);


add_theme_support('post-thumbnails');

// カスタムヘッダー
add_theme_support( 'custom-header' );




$args = array(
    'label' => 'Works',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'rewrite' => true,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),

);
//利用する時はコメントアウト外して、第一引数にカスタム投稿タイプ名を設定すること。
register_post_type("works",$args);






/*
* phpファイルを読み込むショートコード
*/
function include_echo_php( $atts ){
    ob_start();
    get_template_part('template-parts/echo'); // template-parts/echo.phpを読みこみ
    return ob_get_clean();
  }
  add_shortcode( 'include_echo', 'include_echo_php' );


// 使用できていないやつ
// 子テーマの style.css をロード
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
function child_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'ns-common' ) );
}

?>










<?php
//テーマのセットアップ

// titleタグをhead内に生成する
add_theme_support( 'title-tag' );

// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );




//カスタム投稿でページネーションを使う問題を解決するにはpre_get_posts関数を使う
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() ) {
      return;
    }
    if ( $query->is_tax( 'Works' ) ) {//ここでタクソノミー名を設定
      $query->set( 'posts_per_page', '3' );//ここで表示件数を設定
    }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );



?>
