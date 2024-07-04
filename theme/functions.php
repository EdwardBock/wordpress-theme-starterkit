<?php

require_once __DIR__."/Theme/Theme.php";

if (!function_exists('starterkit_setup')) :

	function starterkit_setup() {

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'caption',
		]);

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('wp-block-styles');

	}
endif;
add_action('after_setup_theme', 'starterkit_setup');

