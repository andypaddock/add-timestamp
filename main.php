<?php
	
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
	
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), filemtime( get_stylesheet_directory() . '/js/scripts.js' ) );
	
?>
