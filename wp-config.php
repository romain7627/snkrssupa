<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'snkrssupa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4rm2C>Dhb|Dr&*[m1h*f<*<s)hH4/nBtI]kQt)nBpI&}gJArRnaE$vd2p-V|$2Jf' );
define( 'SECURE_AUTH_KEY',  'p72|YGyeo-<w!ZWo!EoUzbvteJzDltyJV9yT1=SxD |a(V1+IpZ3At@ Ra8EWAsV' );
define( 'LOGGED_IN_KEY',    'B,%3QKCled%XOpMP+s<u0w$WJ$ !PQV&idJ/#mefVudE+kv!&{I4IF4fhNYWMzLY' );
define( 'NONCE_KEY',        'NA_^wn!!Rv~K_4-pLN5W82Fmwvxy>affCR17xo;yW>G{W2F&^4Kmif3&O8%$9wS1' );
define( 'AUTH_SALT',        ';]:5Z5`*m[96+q]]E%r[0}F@y]I:]C($ZE+?Q:r]}qL^N7)oNI9?FAVbM2Ae>RV0' );
define( 'SECURE_AUTH_SALT', 'Etros,+EW?/pym14lB&`qeWELvcdo4zkTkqC<_!+w#h{Z9s0Y lHjO},yqD}Z8Xx' );
define( 'LOGGED_IN_SALT',   'T*C?$`+VT:xVkr]wgwE&Onlb%P|9pZ3bDF 8c:?HN?;qYC>r57ySdLl^-`t$k{2c' );
define( 'NONCE_SALT',       ';jHhM)^;uSl6DOTx#21W!rS?Hin32H6+vW9@`).E_)]d23O0jy%AH3}*:c=Z7>?m' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'snkrs_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
