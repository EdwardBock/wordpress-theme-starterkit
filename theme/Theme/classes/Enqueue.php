<?php

namespace WordPressThemeStarterkit;

use WordPressThemeStarterkit\Components\Component;

class Enqueue extends Component {
	public function onCreate(): void {
		parent::onCreate();

		add_action('wp_enqueue_scripts', [$this, 'enqueue']);
	}

	public function enqueue(): void {
		$this->theme->assets->registerScript(
			Theme::SCRIPT,
			"dist/theme.ts.js",
		);
		wp_enqueue_script(Theme::SCRIPT);

		$this->theme->assets->registerStyle(
			Theme::STYLE,
			"dist/theme.ts.css"
		);
		wp_enqueue_style(Theme::STYLE);
	}
}