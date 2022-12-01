<?php

/**
 * 定数定義
 */

// 子テーマのパス, URI
if (!defined('TAKASUOHANA_CHILD_DIR')) {
	define('TAKASUOHANA_CHILD_DIR', get_stylesheet_directory());
}
if (!defined('TAKASUOHANA_CHILD_URI')) {
	define('TAKASUOHANA_CHILD_URI', get_stylesheet_directory_uri());
}

// テーマディレクトリからデフォルト画像までのパス
$file = '/img_default.jpg';

if (!is_child_theme()) {
  // 子テーマを持たない場合
  if (!defined('TAKASUOHANA_DEFAULT_IMAGE')) {
    define('TAKASUOHANA_DEFAULT_IMAGE', TAKASUOHANA_THEME_URI . $file);
  }
} else {
  // 子テーマを持つ場合
  if (file_exists(TAKASUOHANA_CHILD_DIR . $file)) {
    // 画像ファイルがあれば
    if (!defined('TAKASUOHANA_DEFAULT_IMAGE')) {
      define('TAKASUOHANA_DEFAULT_IMAGE', TAKASUOHANA_CHILD_URI . $file);
    }
  } else {
    if (!defined('TAKASUOHANA_DEFAULT_IMAGE')) {
      define('TAKASUOHANA_DEFAULT_IMAGE', TAKASUOHANA_THEME_URI . $file);
    }
  }
}
