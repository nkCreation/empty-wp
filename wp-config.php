<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'empty');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A05!h3ivjs j6?7k.jTWm+<U.R?)R&K|eV>gB}e[?45O}(I/2Fe37D^|Xdj0&%{/');
define('SECURE_AUTH_KEY',  'n^}4=5Wh3-rg<Otsyr2httNrBG0GN+}TT{AGX2^=/yFwUjN7hZJ/!Ca.bk|BJ-z]');
define('LOGGED_IN_KEY',    'Z-oH0Hq9bvpW`Nu`<0%pL*|HiY.[yELw1i2`{=jlw}8Puq]!c%~FNpuG|9q<^M$2');
define('NONCE_KEY',        'pePtc<%CB$p|6[t||JfQr#|KH>L9AZzFXd^da)y{n[s/j!=bB ~2wjZpA^HLF|1D');
define('AUTH_SALT',        '7SEH0*#{:ryjg2ElL-DE$^mf<!={2rC)+&x~1gN[/*9+0PI[6Uda_5792%0c~-pb');
define('SECURE_AUTH_SALT', 'vs7b>XV+rSD=|37]M=+1awvjH(T0IB#jT*z2ZJgl>?GkNg+k4M#V&>;0.00z?TVd');
define('LOGGED_IN_SALT',   'oNP=9+RdSj2-M,dB;<-vMZ9tV8Azx-exq4#j6;pcl xX4!*7x>rThO9LMS2rM/y]');
define('NONCE_SALT',       'd`9B3#lg&y_(bSP;)EuNea#(D[D<E@dvZo==%.[tLy~<$dB@TJ g|K^gM-tTdvj,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'empty_wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

define('WP_ENV', 'development');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');