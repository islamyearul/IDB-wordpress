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
define( 'DB_NAME', 'wp_hasinhaydar' );

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
define( 'AUTH_KEY',         'BT-@sV|]w-4;t0qkh5>0P TgeYC(:g|!V@i9*S9fw1X@ YsvVAMC}&l UN-5#[;~' );
define( 'SECURE_AUTH_KEY',  '?B3+ES;7B)4%{M{6dW >oap[n73WRjr#fiQ?zL/FzRjSwBL2))ueNbnEkK@z$_]W' );
define( 'LOGGED_IN_KEY',    'E}OM=i[&o!Vgplx:xkfZK3Kmbx>>0JW/@CrlZu;L=k/Pr`8_<X_cQ+E7bD^xD7T)' );
define( 'NONCE_KEY',        'QkoM45$K-Q^~,KV~Om?EKh=[]UNC4!3H`nN{z?x{6(z @-f<_lGSEE_#O:<(q{&_' );
define( 'AUTH_SALT',        't$A`gP`W!WYv^S/ft_VQOif$Chf73$2WO2Hsr(MPF527#*rwefg<q<hCXjY>yT##' );
define( 'SECURE_AUTH_SALT', '$O+8*K+M9Dzbatvcr-KMezueW-J[j@Pdj8s(?~2YAJ7LD|sl?s$VjXv<~%rjs!I)' );
define( 'LOGGED_IN_SALT',   './o]}NGhsV+|BqeO7Li$U72S/Nd`x6~Ewg++MqRT*E?qKmFf,#4~*[hNhGpz&$<m' );
define( 'NONCE_SALT',       '7GV97ak7u>rKwborT?$h~tC+7kLv{Q@BpAiH[%o$1Zj~KJ3;l?7eqMOqiV=d/4G^' );

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
