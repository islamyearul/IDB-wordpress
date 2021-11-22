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
define( 'DB_NAME', 'wp_book' );

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
define( 'AUTH_KEY',         '+}JWT{3y^g5gjbB7:yuBN0b4F+=>kgbI*@l.$S#{K,NqWIin][t gZPq)wD)VmcW' );
define( 'SECURE_AUTH_KEY',  'd4+.FGSGl2?~_F&Wm<PEW/:C0BV@KOjJzR`aVsUC.(B*xh11N7uu!Yv-|$Dskk6m' );
define( 'LOGGED_IN_KEY',    '_WS{0(WkA}M/x]jA1|09Y(t0S8|5!#[F=z3aYKA@2<15200Eo$dIikr2e%,8rRjB' );
define( 'NONCE_KEY',        '4%PEvO{9**{<dZ_y6+<l)>;LXkxHt@F4@UD8)Nw!_ylW_SEY>X!5=WhQ,?jSYX)k' );
define( 'AUTH_SALT',        'tmG47)vCv](kT%=!|v z64TI_|m3=8?.YYJa$alt.ST i+QL+gj3^T@W`nK;aF1f' );
define( 'SECURE_AUTH_SALT', '<JXq4$<.Oe>`t!C0&R/VCOaCx+.hfl=!ORL8eI9AE>yA5H})lJ/S2<QAiF9K:STi' );
define( 'LOGGED_IN_SALT',   'hIrVA0SssJb>wu4Nwl=i.7xg65[%|kC[?P3W-ku1[mtC!vEEHGm4~g8&6}g7H]}3' );
define( 'NONCE_SALT',       '*VWNq#<mweCP-(A| XOA?i:04WAvr@NT,:SG)=h01GXx?4I+/<^tb#(bY.P)p%<5' );

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
