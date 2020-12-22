<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'm3480_jpovirtuelles' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'm3480_josephmcd' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'MlhcTS3#71' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'http://jpo-virtuelles.joseph-mcdonough.com/' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'z~L#]KM](>3Np1y+{pCLts]E&31jtX$aaoY%bPjY/ECgBBkS@4^4I^3~n:.1Oqx9' );
define( 'SECURE_AUTH_KEY',  'JMGnal$3]QW^8hQCSt3)ILPgG-B]FA(Td5T-+TT(R7;,Oasy8VA;e]~:&9q#ODjm' );
define( 'LOGGED_IN_KEY',    '(CCbj=Gos(KMPI%S|Gokk@jpDl@:E</iR$nve!-P#z}CWZtIlX0s(Hx(~.6jIn?u' );
define( 'NONCE_KEY',        'G#5lKXnh<ze{v^rX.s[kxW}+MR`I;0Oqc=[gvWvxbRnAH!1/[ZuPBr#O/UTbdT58' );
define( 'AUTH_SALT',        '$D)Lsp#y1z-zhLKO+78Wolu%aw:_MJCIv-=oup$%?II?R/{&=HSt*$0yU|3C`PCE' );
define( 'SECURE_AUTH_SALT', ')nfT0Ndc)C+qC0%xTwigj*{#kXNFO<$L9K`sE!S4r-,HO!3XuOzu3VM?<9%d9fLb' );
define( 'LOGGED_IN_SALT',   ';fiuY$eCFH@ Ij@Piaq$4bGmL=JMw1ZB}1[zbL7L2%.JTA2CT{8(mTXQE).bbd6q' );
define( 'NONCE_SALT',       'dAE$P9bCdd*An1m)de{>1i:)baRb]|Kuf=]KoW(q({)=mgSzTg5gj]-e}s?>z6-6' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
