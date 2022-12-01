<?php
namespace Takasuohana_Theme;

/**
 * テーマの全般設定
 */
trait Base_Settings {
	/**
	 * セクション構成
	 */
	protected static $sections = [
		'hero'         => 'hero',
		'welcome'      => 'page',
		'feature'      => 'page',
		'story'        => 'page',
		'cafe'         => 'page',
		'access'       => 'access',
		'contact'      => 'contact'
	];

	/**
	 * カスタマイザーの設定名
	 */
	protected static $db_name = 'takasuohana_theme_settings';

	/**
	 * デフォルト設定
	 */
	protected static $data = [
		// スタイル設定
		'style' => [
			// 配色
			'primary_light_color'  => '#f0a8a8',
			'primary_color'        => '#e05252',
			'primary_dark_color'   => '#82171',
			'secondary_color'      => '#bcd45e',
			'lightest_color'       => '#ffffff',
			'lighter_color'        => '#d9d9d9',
			'light_color'          => '#b3b3b3',
			'dark_color'           => '#808080',
			'darker_color'         => '#4d4d4d',
			'darkest_color'        => '#262626',

			// コンテナと文字サイズ
			'container_base'       => '21rem',
			'root_font_size'       => '16px',
			'h1_font_size'         => '2rem',
			'h2_font_size'         => '1.5rem',
			'h3_font_size'         => '1.33rem',
			'h4_font_size'         => '1.17rem',

			//  フォント設定
			'use_noto_sans_jp_300'   => false,
			'use_noto_sans_jp_400'   => false,
			'use_noto_sans_jp_500'   => false,
			'use_noto_sans_jp_700'   => false,
			'use_noto_serif_jp_300'  => false,
			'use_noto_serif_jp_400'  => false,
			'use_noto_serif_jp_500'  => false,
			'use_noto_serif_jp_700'  => false,
			'font_family_base'     => 'sans-serif',
			'font_weight_base'     => '400',
			'heading_font_family'  => 'sans-serif',
			'heading_font_weight'  => '400',
		],

		// Header
		'header'   => [
			'header_disable'       => false,
			'site_brand_height'    => 48,      // 単位: px
			'site_brand_filter'    => 'invert(1) grayscale(1) brightness(2)'
		],

		// 各セクション設定
		// Hero
		'hero'     => [
			'order'                => 0,       // セクション並び順 ('Hero'は必ず先頭)
			'relational_id'        => 10,      // 固定ページとの紐付け (0を指定すると非表示)
			'cover_1'              => TAKASUOHANA_DEFAULT_IMAGE,
			'cover_2'              => false,   // 空の状態を取り得る
			'cover_3'              => false,
			'cover_4'              => false,
			'cover_height'         => 75,     // 単位: vh
			'cover_filter'         => 'none',
			'preloader_background' => 'dark',  // preloader背景
			'preloader_image'      => false,   // preloader画像
		],
		// Welcome
		'welcome'    => [
			'order'                => 10,
			'relational_id'        => 20,          // 固定ページとの紐付け (0を指定すると非表示)
		],
		// Feature
		'feature'  => [
			'order'                => 20,
			'relational_id'        => 30,
		],
		// Story
		'story'  => [
			'order'                => 30,
			'relational_id'        => 40,
		],
		// Cafe
		'cafe'  => [
			'order'                => 40,
			'relational_id'        => 50,
		],
		// Access
		'access'   => [
			'order'                => 50,
			'relational_id'        => 60,          // 固定ページとの紐付け (0を指定すると非表示)
			'map_url'              => 'https://www.google.com/maps/embed'
		],
		// Contact
		'contact'  => [
			'order'                => 60,
			'relational_id'        => 70,          // 固定ページとの紐付け (0を指定すると非表示)
			'contact_form'         => ''           // Contact form 7 のショートコード
		],

		// Footer
		'footer'   => [
			'copyright'            => 'Auberge Fujii Fermier'
		],

		// SNS設定 (各usernameを設定するとナビに表示される)
		'social'   => [
			'facebook'             => 'takasuohana',
			'instagram'            => 'takasuohanamuchang'
		]
	];
}
