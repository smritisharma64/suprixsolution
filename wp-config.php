<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u237162235_PCiAr' );

/** Database username */
define( 'DB_USER', 'u237162235_xZXaD' );

/** Database password */
define( 'DB_PASSWORD', 'H1otlbCsir' );

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
define( 'AUTH_KEY',          'vSmlyBPq17[0]HYIylDQ1T2mu!dM9./1:d>}E=5-sz|IP6F7Hjr~BW6dQhULS_dN' );
define( 'SECURE_AUTH_KEY',   '&y1ft1hvdIx{kIw9B#*}.Q?<eI}H6XIi=m6qsj<!~ZXD92ffjTc3DSWT5[em5pT6' );
define( 'LOGGED_IN_KEY',     '5JMkVc.nM4?S.T}Q1$wN9mG3C1y147m=8[_,/XM!N,%l9] 5uE=0<3[vQr&gc=uw' );
define( 'NONCE_KEY',         '`U/ZE=zbcqcRL+Tz<*+:*<!C%*jCW3?j1b$`nauvZ+)ot6av!J6u6IWbgZ|,RFz.' );
define( 'AUTH_SALT',         'e|jsa8I~MM0+^~n<;Rfx,@D*ss33@}g[xX)9% 3H>t6Cw2%qT-, cQ[SB0J}>i{L' );
define( 'SECURE_AUTH_SALT',  'sGtKCXE4*SNBS%b[_#VM[X<&gOtI.k&z=lgT2B(Za:YLmK(Ya(i`]TN)Rp{XQ=&M' );
define( 'LOGGED_IN_SALT',    '[2[ht7Fb|L/{@=of?dSxU]qni`ZbJJ[<c(t[h!B?2EVxU;UtNfxbD{SF8PeN>6&.' );
define( 'NONCE_SALT',        '%EaWtt.?i!o8)]*_,k+U`%b+vK)N=|*,$NgkRGwOH>g||>fE8a@:3GfM9%PWING^' );
define( 'WP_CACHE_KEY_SALT', 'Wj(0Sx!{PG5qfs:7_m/WKD`z3-J`{d;TRJ3sd1P7`=spSD26;UP.28/s]u`(<OzO' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
