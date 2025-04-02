<?php
register_nav_menus(
	array(
		'primary-menu' => 'Top Menu',
	)
);

// Adding custom class to <li> element of menu.
add_filter(
	'nav_menu_css_class',
	function ( $classes, $item, $args, $depth ) {
		$classes[] = 'nav-item';
		return $classes;
	},
	10,
	4
);

// Adding custom class to <a> element of menu.
add_filter(
	'nav_menu_link_attributes',
	function ( $atts, $item, $args, $depth ) {
		$atts['class'] = 'nav-link';
		return $atts;
	},
	10,
	4
);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
