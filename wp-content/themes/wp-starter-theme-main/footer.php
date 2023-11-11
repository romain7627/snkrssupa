<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

    </div>
    <footer id="l-footer">
        <div class="top-bar">
            <div class="l-constrain">
                <div id="footer-section-company">
                    <div class="brand__logo">
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
                </div>
                <div class="footer-sections">
                    <div id="footer-section-1" class="widget-menu" aria-expanded="false">
                        <h3 class="footer-section__title">Snkrs supa</h3>
                        <?php wp_nav_menu([
                  "menu"                 => "footer1",
                  "container"            => false,
                  "container_class"      => false,
                  "container_id"         => false,
                  "container_aria_label" => false,
                  "menu_class"           => 'primary-menu',
                  "menu_id"              => false,
                  "items_wrap"           => '<ul>%3$s</ul>',
                  "item_spacing"         => 'discard',
                  "theme_location"       => "footer-menu"
                        ]) ?>
                    </div>
                    <div id="footer-section-1" class="widget-menu" aria-expanded="false">
                        <h3 class="footer-section__title">Liens utiles</h3>
                        <?php wp_nav_menu([
                  "menu"                 => "footer3",
                  "container"            => false,
                  "container_class"      => false,
                  "container_id"         => false,
                  "container_aria_label" => false,
                  "menu_class"           => 'primary-menu',
                  "menu_id"              => false,
                  "items_wrap"           => '<ul>%3$s</ul>',
                  "item_spacing"         => 'discard',
                  "theme_location"       => "footer-menu"
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="l-constrain">
                <p class="copyright">
                    &copy;<?= date("Y") ?> Tous droits réservés à <a href="<?= get_home_url() ?>"><?= get_bloginfo( 'name' ) ?></a> <span class="separator">•</span> Développement et hébergement par <a href="https://www.instagram.com/romain.trani/" target="_blank" rel="noopener">Romain Trani</a>.
                </p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
