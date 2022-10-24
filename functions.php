<?php
/**
 * Lightning Child theme functions
 *
 * @package lightning
 */
// WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

// ************************************************
// CSS読み込み
// ************************************************
function add_custom_css() {
	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'reset_css', get_stylesheet_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri() . '/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'add_custom_css' );