<?php

namespace WordPressThemeStarterkit;

class Gutenberg {
	public function __construct() {
		add_filter( 'allowed_block_types_all', [$this, 'allowed_block_types_all'], 90 );
	}

	public function allowed_block_types_all( array|bool $allowed_blocks ): array|bool {
		return array_unique(
			array_merge(
				is_array($allowed_blocks) ? $allowed_blocks : [],
				[
					'core/image',
					'core/paragraph',
					'core/heading',
					'core/separator',
					'core/quote',
					'core/list',
					'core/list-item',
				]
			)
		);
	}
}