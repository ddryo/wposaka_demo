<?php
/**
 * Plugin Name: DEMO PLUGIN
 * Plugin URI: https://github.com/ddryo/
 * Description: デモサイト用プラグイン
 * Version: 1.0.0
 * Author: 了
 * Author URI: https://twitter.com/ddryo_loos
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ponhiro-blocks
 */

if ( !defined( 'ABSPATH' ) ) exit;


/**
 * 定数宣言
 */

define( 'DEMO_PLUGIN_SLUG', 'demo-plugin' );
define( 'DEMO_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'DEMO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DEMO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

// バージョン情報
// define( 'DEMO_PLUGIN_VERSION', '1.0.0' ); //本番
define( 'DEMO_PLUGIN_VERSION', date('Ymdgis') ); //開発用


/**
 * CLASSファイルのオートローダー
 */
spl_autoload_register( function( $classname) {
	// 名前空間 'DEMO_PLUGIN' のクラス以外はオートロードしない
	if ( strpos( $classname, 'DEMO_PLUGIN' ) === false ) return;

	$classname = str_replace('DEMO_PLUGIN\\', '', $classname); //ベンダー名は外す
	$classname = str_replace('\\', '/', $classname);
	$file = DEMO_PLUGIN_PATH . '/class/'. $classname . '.php';
	if ( file_exists( $file ) ) {
		require_once $file;
	}
});


/**
 * Init !
 */
new \DEMO_PLUGIN\Init();
