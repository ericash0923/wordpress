<?php

function wpt_theme_style() {

	wp_enqueue_style( 'foundation_css', get_template_diredtory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'normalize_css', get_template_diredtory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'normalize_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
	wp_enqueue_style( 'main_css', get_template_diredtory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_style', 'wpt_theme_style' );

function wpt_theme_js() {

	wp_enqueue_script( 'modernizer_js', get_template_diredtory_uri() . '/js/modernizer.js', '', '', false );
	wp_enqueue_script( 'foundation_js', get_template_diredtory_uri() . '/js/foundation.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_diredtory_uri() . '/js/app.js', array('jquery', 'foundation.js'), '', true );
}

add_action( 'wp_enqueue_script', 'wpt_theme_js');


?>