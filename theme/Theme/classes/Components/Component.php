<?php


namespace WordPressThemeStarterkit\Components;

use WordPressThemeStarterkit\Theme;

abstract class Component {

	public function __construct(
		public Theme $theme
	) {
		$this->onCreate();
	}

	/**
	 * overwrite this method in component implementations
	 */
	public function onCreate(): void {
		// init your hooks and stuff
	}
}