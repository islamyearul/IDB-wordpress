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
define( 'DB_NAME', 'wp_motorshop' );

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
define( 'AUTH_KEY',         'I6L`2|5v-^+7eW1zUSoo->LQQBg/zwq3%!o74S)<kF,7Tg_EDS5KQfF:x,^`U_yt' );
define( 'SECURE_AUTH_KEY',  'Ld:r2NrT=ce~u_E.>HcY ,f|NP.!fKv@S8E IWGF,+QFuk,-74$T)OWg@S=b$@oX' );
define( 'LOGGED_IN_KEY',    'LLS!3U7*Qhngp8.c,o?9m*a&_%G.Mtu[fFTi$hgmE[A]H6~TF+#O.p4a)Mv;Wf(t' );
define( 'NONCE_KEY',        ';J7VJK<k4>wQJx_UjgdJ2JasK/vP?0TpPth$GXhX$xP^0`IU[ENve<>Qmyc/PT8{' );
define( 'AUTH_SALT',        '~N;_u?<}?_5#e%ck kEDLH3h0kX,4JO2u[7~ABvLlWv}ZxO&%{nGgQ#}1zx~iN(c' );
define( 'SECURE_AUTH_SALT', 'Cby4L6Z1)wT%z9vCrFad~gk!Yit0Otie93T3q,y{hV,Q-=G!zl}B&U|b1.5l0X|R' );
define( 'LOGGED_IN_SALT',   'k`LL2%99=A]g,pa-3xqb+WL={i72y5s8ULi2ZnI@PM7%WDL?@-:q6rjA&TUDI(z3' );
define( 'NONCE_SALT',       ';HI7Nd^ ^hi^k],Y5!/5e%J;YHtB5,!@T- c4+Sk?g&QGzR_YvrdcTSrJ%4O`22+' );

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
