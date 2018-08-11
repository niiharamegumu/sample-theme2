<?php
/**
*テーマ機能追加
*
*@version 1.0.0
*@since   1.0.0
*@author  N.megumu
*
*/
function theme_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'primary2' => 'Primary Menu2'
		)
	);
}
add_action( 'after_setup_theme', 'theme_setup' );
/**
*スタイルシートの追加
*
*@version 1.0.0
*@since   1.0.0
*@author  N.megumu
*
*/
function theme_styles() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
