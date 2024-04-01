<?php
/*
Plugin Name: オレインデザイン事業サイト unitone 用カスタマイズプラグイン
Version: 1.0
Author: Koji Kuno
*/
/**
 * WordPress テーマ unitone が有効化されていない場合はカスタマイズが適応されないようにする
 */
$theme =  wp_get_theme( get_template() );
if ( 'unitone' !== $theme->template ) {
	return;
}

/**
 * Directory rul of this plugin
 *
 */
define( 'MY_UNITONE_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 */
define( 'MY_UNITONE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Display message in console if this plugin is activated
 */
add_action(
	'wp_footer',
	function () {
		if ( is_user_logged_in() ) :
			?>
			<script>console.log( 'My unitone plugin is active.')</script>
			<?php
		endif;
	}
);