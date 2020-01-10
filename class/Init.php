<?php
namespace DEMO_PLUGIN;
if ( ! defined( 'ABSPATH' ) ) exit;

class Init {

	/**
	 * The constructor
	 */
	public function __construct() {

		/* ファイルの読み込み */
		add_action( 'wp_enqueue_scripts', [ $this, '__wp_enqueue_scripts' ], 20 );
		add_action( 'enqueue_block_editor_assets', [ $this, '__enqueue_block_editor_assets' ], 20 );

	}


	/**
	 * フロント側でのファイル読み込み
	 */
	public function __wp_enqueue_scripts() {

			/* スクリプト */
			wp_enqueue_script(
				DEMO_PLUGIN_SLUG.'-script',
				DEMO_PLUGIN_URL. '/assets/js/script.js',
				['jquery'],
				DEMO_PLUGIN_VERSION,
				true
			);

			/* フロント & エディター共通のスタイル */
			wp_enqueue_style(
				DEMO_PLUGIN_SLUG.'-common-style',
				DEMO_PLUGIN_URL. '/assets/css/common.css',
				[],
				DEMO_PLUGIN_VERSION
			);

			/* フロント用のスタイル */
			wp_enqueue_style(
				DEMO_PLUGIN_SLUG.'-front-style',
				DEMO_PLUGIN_URL. '/assets/css/front.css',
				[],
				DEMO_PLUGIN_VERSION
			);

	}


	/**
	 * ブロックエディター側でのファイルの読み込み
	 */
	public function __enqueue_block_editor_assets() {

		/* フロント & エディター共通のスタイル */
		wp_enqueue_style(
			DEMO_PLUGIN_SLUG.'-common-style',
			DEMO_PLUGIN_URL. '/assets/css/common.css',
			[],
			DEMO_PLUGIN_VERSION
		);

		/* フロント用のスタイル */
		wp_enqueue_style(
			DEMO_PLUGIN_SLUG.'-editor-style',
			DEMO_PLUGIN_URL. '/assets/css/editor.css',
			[],
			DEMO_PLUGIN_VERSION
		);

	}

}
