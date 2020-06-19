<?php
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'before_widget' => '<div class="sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

add_theme_support('post-thumbnails');
?>