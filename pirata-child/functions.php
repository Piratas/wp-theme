<?php

## Inicialização
add_action(
	'wp_enqueue_scripts',
	'theme_enqueue_styles',
);
function theme_enqueue_styles() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('parent-style'),
	);
}

## Internacionalização
function my_child_theme_setup() {
	load_child_theme_textdomain(
		'my-child-theme',
		get_stylesheet_directory() . '/languages',
	);
}
add_action(
	'after_setup_theme',
	'my_child_theme_setup',
);

?>
