<?php


//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'pITmggCxBd1aZJq89jBZGTqDUy1cwqB9Hg6kLWktAmH0P9nHmAp9I1SdsJkwABRW');
//END Really Simple Security key

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'aljazeera1' );
define( 'DB_NAME', 'aja_db' );
/** Database username */
//define( 'DB_USER', 'aja' );
define( 'DB_USER', 'aja_db_user' );
/** Database password */
//define( 'DB_PASSWORD', 'Manila123!@#' );
define( 'DB_PASSWORD', '9x*LDvyIcHV!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>)sq|6Wdtlc),MZZuE ?>%OJ3rFGEHeqtqjwi$OtP._wV]N3awi-ErY:ZA T,Kn,' );
define( 'SECURE_AUTH_KEY',  '.[.{C.bukg{|Ao%>tI?9{Zqc0p] 9z{m7Lfd8$|pR|uyG[R^QHW-H(`-HtSHc~Z7' );
define( 'LOGGED_IN_KEY',    'u9Nk(0h]rHbr?!XI<?p%k$n/X%0X?muF!Xnvs<XL0@q;)aUfS;ohnU<;yRspGh]i' );
define( 'NONCE_KEY',        '^!5YLSOU~ZGC !`T5{}O?<xJhj+P*z;!UlvJ8Ur@[Kd*+&#4&ABO0O9NV6-yXvVF' );
define( 'AUTH_SALT',        'a=LKcG<4>vl`+ud@PQ+5bjP]F)/Bar#/e;Rd6V^@3h+Qub>s}mn^j7V1=2}N?9xl' );
define( 'SECURE_AUTH_SALT', '`5h!)sql#p:jtz+:Nx33zF!Zb7&_()r eYf(g1zIRwAkqRb=fK>zLa+$$sdWe< *' );
define( 'LOGGED_IN_SALT',   '@Qj833;OBp?}8Yo4n!3v*e.OZB49X!MA[z2Ml4X:B;pJvImf$uaPJsWF=] djRTy' );
define( 'NONCE_SALT',       '%IDvts-*(IEB[WJI3,~/Mq/4mT>T%5fLo- (exzGh$:L|Egy4Z$u!)Tz^vEED67/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
// define('WP_HOME', 'http://localhost:8080/wordpress/schools/aljazeera/');
// define('WP_SITEURL', 'http://localhost:8080/wordpress/schools/aljazeera/');
/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M');
define( 'CONCATENATE_SCRIPTS', false ); 
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
