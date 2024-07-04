<?php

namespace WordPressThemeStarterkit;

use WordPressThemeStarterkit\Components\Assets;

require_once __DIR__."/vendor/autoload.php";

class Theme {

	const DOMAIN = "starterkit";

	const SCRIPT = "starterkit_js";
	const STYLE = "starterkit_css";

	const MENU_LOCATION_MAIN = "main";
	const MENU_LOCATION_FOOTER = "footer";

	public string $path;
	public string $url;
	public Assets $assets;

	private function __construct() {
		$this->path = trailingslashit( get_template_directory() );
		$this->url  = trailingslashit( get_template_directory_uri() );

		$this->assets = new Assets($this);

		new Enqueue($this);
		new Menus();
		new Gutenberg();
	}

	private static ?Theme $instance = null;

	public static function instance(): Theme {
		if ( static::$instance == null ) {
			static::$instance = new self();
		}

		return static::$instance;
	}
}

Theme::instance();