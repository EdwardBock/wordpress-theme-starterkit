<?php

namespace WordPressThemeStarterkit;

class Menus {
	public function __construct() {
		add_action('init', [$this, 'register']);
	}

	public static function register(): void {
		register_nav_menu(Theme::MENU_LOCATION_MAIN, __('Main Menu', Theme::DOMAIN));
		register_nav_menu(Theme::MENU_LOCATION_FOOTER, __('Footer Menu', Theme::DOMAIN));
	}
}