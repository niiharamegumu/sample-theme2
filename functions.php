<?php

/**
*テーマ機能追加
*
*@version 1.0.0
*@since   1.0.0
*@author  y.aramaki
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
 *ウィジェット設定
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author N.megumu
*/
function theme_styles() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-common', get_template_directory_uri() . '/css/common.css' );
}
add_action( 'widgets_init', 'theme_widgets_init' );
/**
 *検索結果のキーワードマークアップ
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author N.megumu
 * @param string $str
 * @return string $str
 */
function theme_search_keyword( $str ){
	if ( is_search() ) {
		$query = trim( get_search_query() );
		$query = mb_convert_kana( $query, 'as', 'UTF-8' );

		if ( !empty( $query ) ){
			$str = str_replace( $query, '<mark>' . $query . '</mark>', $str );
		}
	}
	return $str;
}
add_action( 'get_the_excerpt', 'theme_search_keyword' );
add_action( 'the_title', 'theme_search_keyword' );
