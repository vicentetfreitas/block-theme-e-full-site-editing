<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'FjXWdrae_I}Sg2.={/l`7dJm!b_z`d9,:)^P85.fY^mKk%7W$1+`0VTkQ1n[xxPH' );
define( 'SECURE_AUTH_KEY',   'z% $:h@jYC<2_G#kchQn,/D}QraA+{mQ|w]r?/s9MU9A4Ne:rH|$$aC:JriBCs4 ' );
define( 'LOGGED_IN_KEY',     'kIA~TRC-Pp6%hM.B/Mk*8]tyjr>Z&xaLF#di`px?~]qqP3 ?st[=aSsR8caFrbM%' );
define( 'NONCE_KEY',         'S* -;P2;f)6>THqtb%NK7|eKXnOO[?uTS].PN/vO`i.uMy.9MFb5)|}H5k|R-R3q' );
define( 'AUTH_SALT',         'as|l(B)6OHPK8i%MDDKlVOd-<+kEv301M_1j(a+Y8Azr.b{x5N!Z1o6>r-o=R!BW' );
define( 'SECURE_AUTH_SALT',  'P2aCckHKjptH>pf_c.Q6<E0fiTLq[F9[N!l1Q&ljo6vnra`^_#Rb=*`*A=r${]8a' );
define( 'LOGGED_IN_SALT',    '@`@l.D1mGVtDkqmSh%h7S4OJ%^iQ`0RCUmkorvq?(iQF/R=|gMEuj_|RPyHooyA1' );
define( 'NONCE_SALT',        'k{f&,bwundB,;Za`WnC)A^%x0K4]om>-Xrtn^sL>5*TW39EQkn%(OfNekS6+^yGP' );
define( 'WP_CACHE_KEY_SALT', 'eqg{NH3iOi8tn]E1-XL;>s=9s4v?8W0(%us8e?zJ:L~Vz6*j9%Zw(H;@yUAEAo(.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
