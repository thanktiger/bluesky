<?php 
function wl_register_nav() {
	/**
	 * 注册导航
	 */
	register_nav_menu(
		array(
			'primary' => __('主导航', 'wl'),		//主导航
			'secendary' => __('副导航', 'wl')	//副导航
		)
	);
}
add_action('init', 'wl_register_nav');


function wl_setup() {
	/**
	 * 特色图像
	 */
	add_theme_support( 'post-thumbnails' );
	/**
	 * 文章格式
	 */
	add_theme_support( 'post-formats', array( 'aside','image','video','quote','link','gallery','status','audio','chat' ) );
	/**
	 * 自定义页头
	 */
	add_theme_support( 'custom-header' );
	/**
	 * 自定义背景
	 */
	add_theme_support( 'custom-backgroud' );
	/**
	 * 文档标题
	 */
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wl_setup' );
