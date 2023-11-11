<?php 

namespace WPStarterTheme\App;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * WPStarterTheme
 * 
 * A class to help with theme development
 * @package WPStarterTheme
 * @since 1.0.0
 */
class WPStarterTheme {

    public $config;

    public function __construct()
    {
        $this->config = require get_stylesheet_directory() . "/config.php";

        // Remove dynamic styles
        $this->actionAfterSetup(function () {
            remove_action("wp_enqueue_scripts", "generate_enqueue_dynamic_css", 50);
        });
    }

    /**
     * Add an action to the after_setup_theme hook
     */
    private function actionAfterSetup($function)
    {
        add_action( 'after_setup_theme', function() use ($function) {
            $function();
        });
    }

    /**
     * Add an action to the wp_enqueue_scripts hook
     */
    private function actionEnqueueScripts($function, $priority = false)
    {
        if($priority) {
            add_action( 'wp_enqueue_scripts', function() use ($function) {
                $function();
            }, $priority);
        } else {
            add_action( 'wp_enqueue_scripts', function() use ($function) {
                $function();
            });
        }
    }

    /**
     * Add nav menus
     */
    public function addNavMenus($locations = array())
    {
        $this->actionAfterSetup(function() use ($locations) {
            register_nav_menus($locations);
        });

        return $this;
    }

    /**
     * Add scripts
     */
    public function addScript($handle, $src = "", $deps = array(), $ver = false, $in_footer = false) 
    {
        $this->actionEnqueueScripts(function () use ($handle, $src, $deps, $ver, $in_footer) {
            wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
        });

        return $this;
    }

    /**
     * Add styles
     */
    public function addStyle($handle, $src = "", $deps = array(), $ver = false, $media = "all") 
    {
        $this->actionEnqueueScripts(function () use ($handle, $src, $deps, $ver, $media) {
            wp_enqueue_style($handle, $src, $deps, $ver, $media);
        });

        return $this;
    }

    /**
     * Remove scripts
     */
    public function removeScript($handle)
    {
        $this->actionEnqueueScripts(function () use ($handle) {
            wp_dequeue_script($handle);
            wp_deregister_script($handle);
        }, 50);

        return $this;
    }

    /**
     * Remove styles
     */
    public function removeStyle($handle)
    {
        $this->actionEnqueueScripts(function () use ($handle) {
            wp_dequeue_style($handle);
            wp_deregister_style($handle);
        }, 50);

        return $this;
    }

    /**
     * Remove jquery migrate
     */
    public function removeJqueryMigrate()
    {
        add_filter( 'wp_default_scripts', function( $scripts ) {
            if ( ! empty( $scripts->registered['jquery'] ) ) {
                $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
            }
        });

        return $this;
    }

}
