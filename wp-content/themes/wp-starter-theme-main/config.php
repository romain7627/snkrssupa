<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

return [

    /*
    |--------------------------------------------------------------------------
    | Remove Default Styles
    |--------------------------------------------------------------------------
    |
    | This value determines if the default styles from generatepress should be removed.
    | Default : true
    |
    */
    'remove_default_styles' => true,

    /*
    |--------------------------------------------------------------------------
    | Remove Admin Bar
    |--------------------------------------------------------------------------
    |
    | This value determines if the admin bar should be removed for all users on frontend.
    | Default : false
    |
    */
    'remove_admin_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Redirect Admin User
    |--------------------------------------------------------------------------
    |
    | This value determines if the admin user should be redirected after login.
    | Default : false
    |
    */
    'redirect_admin_user' => false,

    /*
    |--------------------------------------------------------------------------
    | Redirect Admin User URL
    |--------------------------------------------------------------------------
    |
    | This value determines the URL where the admin user should be redirected after login.
    | This value is only used if redirect_admin_user is set to true.
    | Default : get_admin_url() . 'edit.php?post_type=page'
    |
    */
    'redirect_admin_user_url' => get_admin_url() . 'edit.php?post_type=page',

    /*
    |--------------------------------------------------------------------------
    | Navigation Menus
    |--------------------------------------------------------------------------
    |
    | This array determines the navigation menus that should be registered.
    |
    */
    'nav_menus' => [
        'header_menu'  => __( 'Header Menu', 'generatepress' ),
        'footer_menu'  => __( 'Footer Menu', 'generatepress' )
    ],

    /*
    |--------------------------------------------------------------------------
    | Stylesheets
    |--------------------------------------------------------------------------
    |
    | This array determines the stylesheets that should be registered.
    | Exemple : 'handle' => [ 'src' => 'path/to/file.css', 'deps' => array(), 'ver' => wp_get_theme()->get("Version") ]
    |
    */
    'stylesheets' => [
        'gpc-reset' => [
            'src' => get_stylesheet_directory_uri() . "/assets/css/reset.min.css",
            'deps' => array(),
            'ver' => wp_get_theme()->get("Version")
        ],
        'gpc-main' => [
            'src' => get_stylesheet_directory_uri() . "/assets/css/main.min.css",
            'deps' => array(),
            'ver' => wp_get_theme()->get("Version")
        ],
        'gpc-tailwind' => [
            'src' => get_stylesheet_directory_uri() . "/assets/css/tailwind/tailwind-output.min.css",
            'deps' => array(),
            'ver' => wp_get_theme()->get("Version")
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Javascripts
    |--------------------------------------------------------------------------
    |
    | This array determines the javascripts that should be registered.
    | Exemple : 'handle' => [ 'src' => 'path/to/file.js', 'deps' => array(), 'ver' => wp_get_theme()->get("Version"), 'in_footer' => true ]
    |
    */
    'javascripts' => [
        'gpc-header' => [
            'src' => get_stylesheet_directory_uri() . "/assets/js/header.js",
            'deps' => array(),
            'ver' => wp_get_theme()->get("Version"),
            'in_footer' => true
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Autorize SVG upload
    |--------------------------------------------------------------------------
    |
    | This value determines if the SVG files are autorized to be uploaded.
    | Default : true
    |
    */
    'autorize_svg_upload' => true,

    /*
    |--------------------------------------------------------------------------
    | Is WooCommerce
    |--------------------------------------------------------------------------
    |
    | This value determines if the website use WooCommerce plugin.
    | Default : false
    |
    */
    'is_woocommerce' => class_exists( 'woocommerce' ) ? true : false,

];
