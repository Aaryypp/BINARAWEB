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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ZI{&*2EYY bk@ ^f(lG],W>xrFMA;uyunKi5#`9u4RyJ?8]y;RL0Zo3sYfOY%^q<' );
define( 'SECURE_AUTH_KEY',  '{Qcx[q(00DURRZ x&@tN&TJSQoLDIWy R pm oVK*r}rC.ebx_w2ykO7kRVe U+i' );
define( 'LOGGED_IN_KEY',    'Uc4pA~x|@A|<g^vAMhvB^=|T9]t51ZjCpK yZ*<Sr@UJ|Ur0M**81w[X$:,,YWM)' );
define( 'NONCE_KEY',        'k3t=Fu U3mO( qdKFF3ti^j<h:{&3QHHCYGqzW}@J;JFD3-s9W:D1`a5CK*(D8l_' );
define( 'AUTH_SALT',        'UiPhYqvV_1~!TrbqjOLIj;nJ$8/qHpbV@p8_JH6U+wF=2-4P*;4g-gBVw:G3:xe+' );
define( 'SECURE_AUTH_SALT', 'Fsjv4G&ImiwwCk?0pv(S8>8SeJ,x47uqlj#pBmqO1-D3k4/r=^H-xk+cR3d}Vay$' );
define( 'LOGGED_IN_SALT',   'q/qNWYjZMAg^69IbZa[1@3Dk>Xpq^<S&43k().y?o)9eS1af#W!I.a4aWBkaXSR)' );
define( 'NONCE_SALT',       ',Pob,Li84H>KbOL#brHy*!txXL9ER2EeX >KHYYt}:jZQ V>Cd1A{,QC^_ZB0cZ9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
