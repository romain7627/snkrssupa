<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>
	<?php do_action( 'wp_body_open' ); ?>
    <header id="l-header">
        <div class="middle-bar">
            <div class="l-constrain">
                <div class="logo">
                    <a href="<?= get_home_url() ?>">
                        <?php
                        $custom_logo_id = get_theme_mod("custom_logo");
                        $image = wp_get_attachment_image_src($custom_logo_id , "full");
                        if($image) : ?>
                        <img src="<?= $image[0] ?>" alt="Logo du site">
                        <?php else :  ?>
                        <span>
                            <?= get_bloginfo( 'name' ); ?>
                        </span>
                        <?php endif;  ?>
                    </a>
                </div>
                <div class="widget-menu" aria-expanded="false">
                    <?php wp_nav_menu([
                        "menu"                 => "primary",
                        "container"            => false,
                        "container_class"      => false,
                        "container_id"         => false,
                        "container_aria_label" => false,
                        "menu_class"           => 'primary-menu',
                        "menu_id"              => false,
                        "items_wrap"           => '<ul>%3$s</ul>',
                        "item_spacing"         => 'discard',
                        "theme_location"       => "primary"
                    ]) ?>
                    <div class="mobile-toggle">
                        <button id="toggle-menu">
                            <i class="ri-menu-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page">
