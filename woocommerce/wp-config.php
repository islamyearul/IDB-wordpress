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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '${8m=@ uWn`~=9Kx|G&66U{{E+tV%SSW3E)2`>.m}mx#Rk7Fzs~HV.62??rB$hb?' );
define( 'SECURE_AUTH_KEY',  'wt:{r9H)jD*zC;c>3<RPX<Xw0Y;E0IP0>}U9ib3c}{R&O>bO]8D*s)-JhXFU!*Zu' );
define( 'LOGGED_IN_KEY',    '#z;|D-e6#tzGHQhx~Pvu9>`2[/b<SrHKciJ9Gv:!wSU5vr.*.W2BaWZW-sV< )s{' );
define( 'NONCE_KEY',        '[zD27<t0ghJ :[#$zf[K6>K;aHdYXmHg/% Q1Mna}<r-d.2pzn7XJkBC0WU3{yQ&' );
define( 'AUTH_SALT',        '7B6Ir%(?tXOgo}E%chv]9_azG%xCq}Z0s+kI$7!iudxae(X2zQ$rg`V46F;=*>^[' );
define( 'SECURE_AUTH_SALT', 'c8k#v5S oI?T&F4c{FV}aje)I5&?Y#Nt3iB&_H@NC;f?jX]y^ewi|_<T<T${I<>v' );
define( 'LOGGED_IN_SALT',   ' cU[e%@[w%U1J8>*Pfb:dVLI#7sG>6O!.mB[gWTo,Dh*Gty4R~.il1e}*4Q#Ue~v' );
define( 'NONCE_SALT',       'm!JfV1~-9wK[1(9b)KV7oPMrs]}VdY8%QcU{/.ZWojbufKI:34R0V^6CU?[=tQv_' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
