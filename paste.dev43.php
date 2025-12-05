<?php
// Baris ini menunjukkan status WP_CACHE sudah diatur menjadi 'false'
// yang menandakan SiteGround/Speed Optimizer telah menonaktifkan caching.
// Anda dapat mempertahankannya atau mengubahnya kembali menjadi 'true' jika diperlukan,
// tetapi 'false' sesuai dengan tujuan menonaktifkan caching.
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbpbzgzb9efulv' );

/** Database username */
define( 'DB_USER', 'udzqlphcpf4gf' );

/** Database password */
define( 'DB_PASSWORD', 'lmnkq9genlvm' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'n<f)*8GWo`&WU~!C+yk0!gRP:>N=73hXhm]hu%,60UHGj?FGx42e}/x!FA,#@^mR' );
define( 'SECURE_AUTH_KEY', 't?Z0NA.O$;`<*ZKVNF0!XYod//Gt(E.o1e;}wPOi?3dbT3u}WS5N+ek#nww,wl*G' );
define( 'LOGGED_IN_KEY', 'jl!|&imcBM cj!*f7ic4z`6{LKg;r7!N$+t&g!/}^eocZ0sXJ2`I7k:6`g/}C4xJ' );
define( 'NONCE_KEY', 'BSZ&6Ptg`$X-p$}rD,v;%V92RIPW{CIf35ewgVgT6@m0`DtW0E72d+1UV3yG^;O-' );
define( 'AUTH_SALT', '^Z.< ;x=L=cBn<#y45i8)E)FOMmv:(%p0p(>-iCuag;9<TV5MT)>8oWf+.#8gBZn' );
define( 'SECURE_AUTH_SALT', '9xCX3(.5-/d_<k(UTDje67zN}tZuh)E:iq:In@WomChn`qxb](Z+9PssX7&s)]/8' );
define( 'LOGGED_IN_SALT', 'y:8_qJiYglr[+f>]?[>sqkDgZ|*Xs*Vp[l6ay[S?n;w15.21LsYkUB=v%|Rev[rW' );
define( 'NONCE_SALT', ';a]=;#jVs2 jMj0}NYm(pd:$8PNpC.PhQV)HG.GN.R=,80//_uKg+*QN3E~OsM+9' );
define( 'WP_CACHE_KEY_SALT', 'nXw7MZ[O J`!;YR6;,qAmm3v^^seFjqsj%msns{:T`-NDO4UdAYkpkjhu6$$/=o+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vhu_';


/* Add any custom values between this line and the "stop editing" line. */

// --- Penambahan untuk Menonaktifkan Fungsi Caching (Plugin Tetap Aktif) ---

/** * MENONAKTIFKAN CACHING DINAMIS OLEH SITEGROUND OPTIMIZER (SG Optimizer) 
 * Baris ini memaksa sistem caching SG Optimizer untuk di-bypass.
 * Plugin akan tetap aktif, namun caching tidak akan berfungsi.
 */
define( 'SG_CACHE_BYPASS', true ); 

// -------------------------------------------------------------------------


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
