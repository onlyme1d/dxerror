<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd19542_proj6');

/** MySQL database username */
define('DB_USER', 'a19542_proj6');

/** MySQL database password */
define('DB_PASSWORD', 'fEtAm8tP');

/** MySQL hostname */
define('DB_HOST', 'wm50.wedos.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RhLl!IUAxt4y?UXv(IACtn:c/RyAcfMn;lPa@mT{aAaE6z<p`[TFZ=PSauu(:1%i');
define('SECURE_AUTH_KEY',  ']&Q1nBAO(/L{%6pC4,9apsn1CPy94`c;^EA6c6p-AOCZquexTOa!Rgxb;Kgp|@eL');
define('LOGGED_IN_KEY',    'F+Bl2xgXS3_)1|/wQiy5Jr`wdQ=%rtfoX1=T**Y|,5UcOh{H]HYcPF*|3^G36g,7');
define('NONCE_KEY',        'CzmpRoC1_~#hEgWY;bVT4q6Hb!wt>8&|M#Wk{uH4~>fe>z!9P!ETQuEpTrEM@l,D');
define('AUTH_SALT',        'XKTI+j8;5uorw`A[VvU!:OUP$Ki[+,oRJ*$v,S$vHD$<spHGQUg={T{Zpbn<:Ght');
define('SECURE_AUTH_SALT', 'Lh}=|C-6W50ILRivO| o:u}$8b`5e9;#_E;gdBusb0:{B.;5+Cf/#um|Wr-%6Ro[');
define('LOGGED_IN_SALT',   'u5-[B;JW7[*_-k<PO#0NO=.HkGK7v#Sdn^1+>B6tyZ/YEQx6S`&]ea2s3-eV<3&N');
define('NONCE_SALT',       'WW0-RH/|<x2)]*xWh5Y{]yz-yrJE^b46u^|+a~H)Y!aT^LVqMI|.=v|:O+le|I4V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'cs_CZ');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false ); 
//define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', false );
@ini_set( 'display_errors', 0 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
