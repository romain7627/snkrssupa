<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . "/vendor/autoload.php";

use WPStarterTheme\App\WPStarterTheme;

$theme = new WPStarterTheme();
$config = $theme->config;

/**
 * Register nav menus
 */
$theme->addNavMenus($config["nav_menus"]);

/**
 * Remove default styles and scripts
 */
if ($config["remove_default_styles"]) {
    $theme->removeStyle("generate-style");
    $theme->removeStyle("generate-style-grid");
    $theme->removeStyle("generate-mobile-style");
    $theme->removeStyle("generate-widget-areas");
    $theme->removeStyle("generate-rtl");
    $theme->removeStyle("generate-child");
    $theme->removeJqueryMigrate();
}

/**
 * Register stylesheets
 */
foreach ($config["stylesheets"] as $handle => $stylesheet) {
    $theme->addStyle($handle, $stylesheet["src"], $stylesheet["deps"], $stylesheet["ver"]);
}

/**
 * Register javascripts
 */
foreach ($config["javascripts"] as $handle => $javascript) {
    $theme->addScript($handle, $javascript["src"], $javascript["deps"], $javascript["ver"], $javascript["in_footer"]);
}

/**
 * Autorize svg upload
 */
if($config["autorize_svg_upload"]) {
    function gpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }

    add_filter('upload_mimes', 'gpc_mime_types');
}

/**
 * Remove admin bar on front end
 */
if($config["remove_admin_bar"]) {
    function gpc_hide_admin_bar_for_all() {
        show_admin_bar( false );
    }

    add_action( 'after_setup_theme', 'gpc_hide_admin_bar_for_all' );
}

/**
 * Redirect admin user to a custom url
 */
if($config["redirect_admin_user"]) {
    function gpc_login_admin_redirect( $redirect_to, $request, $user ) {
        
        //is there a user to check?
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                $redirect_to = $GLOBALS["config"]["redirect_admin_user_url"];
            }
        }
        
        return $redirect_to;
    }

    add_filter( 'login_redirect', 'gpc_login_admin_redirect', 10, 3 );
}

/**
 * Is woocommerce?
 */
if($config["is_woocommerce"]) {
    // echo "is woocommerce";
}
