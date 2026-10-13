<?php

function dreaming_arcadia_enqueue_styles() {
	wp_enqueue_style(
		'dreaming-arcadia-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

add_action(
	'wp_enqueue_scripts',
	'dreaming_arcadia_enqueue_styles'
);

function dreaming_arcadia_setup() {
	add_theme_support( 'title-tag' );
}

add_action(
	'after_setup_theme',
	'dreaming_arcadia_setup'
);