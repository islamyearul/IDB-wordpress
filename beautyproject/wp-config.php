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
define( 'DB_NAME', 'wp_beautifashion' );

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
define( 'AUTH_KEY',         'r}tL.}l#aZT4(/cC PO+YDx+cs]OFEX1.wCm(O7Nm0-uR-L ]D<2i#*F]m<h;;MQ' );
define( 'SECURE_AUTH_KEY',  'TTr/P9CoKZRAjve@nOwlSdi?oHB]#%Timqp?VuoiD4IMDK2LD<iu`eM43:GGg~Zo' );
define( 'LOGGED_IN_KEY',    'C;bGpQzloQ47)j0VuNF#lk2^).pq3S]o%mq_r~s5]C-7QT|3>c7.$ vgK~}j)oov' );
define( 'NONCE_KEY',        'j![3mH,:R~b#vl}yZ WpH1jAx?iBt[f3]1ES@6$Go(_o[V<g}y!GrU_uKAK2g ;;' );
define( 'AUTH_SALT',        'ApdoigHjOMrq-8oA]$$*xJWaMqL(m~u5G&>KJVGQ~A&LM)qi|q;Te;[4ZM%=8Q-H' );
define( 'SECURE_AUTH_SALT', 't@c!-^wWnJy[Qf}nm&*+L~Kb^.Iy^v<fCZ{*.(x^tl|*?c|n&itUU)RPRW<Y0)6-' );
define( 'LOGGED_IN_SALT',   '>4udxq:>w8mwd7%?pYsH&13pmm)wbPjurJ7x-;LNwwn.wHL^}K u9$kl/@4-9.OR' );
define( 'NONCE_SALT',       'IFA7 V3%wFf=WYI{xQ7?vZp;kRxe( rhZ)@`kdWd^BP;oFK,/53X]@@9p?{IX4tl' );

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
