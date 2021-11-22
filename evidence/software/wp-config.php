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
define( 'DB_NAME', 'wp_software' );

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
define( 'AUTH_KEY',         '`mf`nA^$1Ocpf}=w5/-r?Lp|Hq?(G9=U6AW:DUK>VW-[?qj7,A;+J^hWa|_$2ba ' );
define( 'SECURE_AUTH_KEY',  'SrtWaAUC fLvww~9Cr4<sb#@nDiXmZD,{)8Mf/sU^]Y2D6r2.=CJG6%~*_cdq}cV' );
define( 'LOGGED_IN_KEY',    '(J@K&J[UEd_@V6xIW)SCjYa@K!2<*;#s;e]2Q01~DY84<~{c Up+yn$k[oo$vp/b' );
define( 'NONCE_KEY',        'fg_h/Pg,)9`GsS7T/ -mHq]aI~<n2j}i/xjJ=kQI/nQeR#<eCMP8eR@l<P.h=`86' );
define( 'AUTH_SALT',        'B)%16VZg=&1xAD yp&)- b+M<?s[[n7{e9K@1<$U9>Z`.fA8luZ`:EyQ:z.mK{>9' );
define( 'SECURE_AUTH_SALT', 'uaj;_A~H2%34laglDCS`z9E<52-R%9~mhrxBHkDN5e7wbBRXgION[ RpX.svSwG5' );
define( 'LOGGED_IN_SALT',   'X4EmII<Cu#J:#5eQ?Zi;u%uVBvxFZBLp5huZ_0~GEgWz`u/x?[HegY]0me7`Apc^' );
define( 'NONCE_SALT',       '<Q6Nu+|]S0.QiE-]9.rm-q}j-sjS@g)}`!qD)ab-8.lL Hj13F:_w}gB?Vi<_xO>' );

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
