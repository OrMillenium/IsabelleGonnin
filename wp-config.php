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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'isabellegonnin' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KV^hrO_s<7BD2e]v,_E4!,%|&dk,faC6!:fb{S34It%UW`hF-W1a13|*XFNw:>:L' );
define( 'SECURE_AUTH_KEY',  '1I-R:6?F)2nT@x;)362G9#Gmn<=WpSm(x_ML2k-442A(+5P[3s-6#p=Moe5gDIH6' );
define( 'LOGGED_IN_KEY',    'ge3PxL.RO~,-Z8c={<2nHlz72Lq|FWCY3}6nM6M$-,4@-l((TjA=BF|~wefrZu6N' );
define( 'NONCE_KEY',        '&O77i?o^7$*W:]zj#Jc~/9bpIe42uz<+.d!QNG.P>8G+=Iag)&<<^:F<m/Y,3|*s' );
define( 'AUTH_SALT',        'X>k>3ttx[ok8=)W1wu!}CrsbrOL91%L$7-,DOw2T-O_)yGK+,hWCR4CT@P;B(qNP' );
define( 'SECURE_AUTH_SALT', 'sjpzB/t}FZFL!d%9uJ>0c6GBnY=S`Kf&;Mrh:Mi}}YYoBm;&aa3E67:CnF=<- -J' );
define( 'LOGGED_IN_SALT',   '/ET2<F$r@Tg#C.2,rb=GZ[pUv<%36W17jH0-fV4_i9eD#BRq+Pc5v2c_En+99^)z' );
define( 'NONCE_SALT',       'y+)Y( iSLN3G _zWTL4y*`wiT+t:Yspz5dq)51fB#amYo6MG@MKAa(8U/jnv^bA>' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
