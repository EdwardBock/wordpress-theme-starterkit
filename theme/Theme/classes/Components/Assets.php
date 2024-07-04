<?php

namespace WordPressThemeStarterkit\Components;

use WordPressThemeStarterkit\Theme;

class Assets {

	public function __construct(
		private Theme $theme
	) {
	}

	public function registerStyle(string $handle, string $pathToFile, array $dependencies = [], string $media = 'all'): bool {
		$filePath = $this->theme->path . $pathToFile;
		$fileUrl = $this->theme->url . $pathToFile;
		if (!file_exists($filePath)) {
			error_log("Style file does not exist: $filePath");

			return false;
		}

		return wp_register_style($handle, $fileUrl, $dependencies, filemtime($filePath), $media);

	}

	public function registerScript(string $handle, string $pathToFile, array $dependencies = [], bool $footer = true): bool {
		$filePath = $this->theme->path . $pathToFile;
		if (!file_exists($filePath)) {
			error_log("Script file does not exist: $filePath");

			return false;
		}
		$assetsFilePath = "";
		if ($this->endsWithJS($filePath)) {
			$assetsFilePath = str_replace(".js", ".asset.php", $filePath);
		}
		if (!empty($assetsFilePath) && file_exists($assetsFilePath)) {
			$info = include $assetsFilePath;
		} else {
			$info["dependencies"] = [];
			$info["version"] = filemtime($filePath);
		}

		return wp_register_script(
			$handle,
			$this->theme->url . $pathToFile,
			array_merge($info["dependencies"], $dependencies),
			$info["version"],
			$footer
		);

	}

	private function endsWithJS($haystack): bool {
		$length = strlen(".js");
		if (!$length) {
			return true;
		}

		return substr($haystack, -$length) === ".js";
	}
}