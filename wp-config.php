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
define( 'DB_NAME', 'interior_design' );

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
define( 'AUTH_KEY',         'YkM4Y:YP{7p8XRFF7}phs1*PV4Gt$rr}0mFF4Op/1@f!gL_d;@l!`J`~NdH^4tnv' );
define( 'SECURE_AUTH_KEY',  '_ayir,qo2ziOFCIdsp bRkn/9S?vu#Eq:f]thB-otl3E333vop:y7au>4f~EUgm|' );
define( 'LOGGED_IN_KEY',    'T5j2`O[&Ht+)bi>j4qJigS~~?%MuwS9/I`_YTtgCHh ,@/z3~kkdM6$h(?SPeg#A' );
define( 'NONCE_KEY',        'al2%7f~[9M_sI2f^Y5|@nPU/,YJ*P #IekE)#=i}6b??<>4%,p+22cGrv(EE@EPB' );
define( 'AUTH_SALT',        '[)?9rWPoks.u+C1ezlfM}ay9)ua|S2x}D^alxwt*%|OmwCh<veuqOZQhva9#4[T!' );
define( 'SECURE_AUTH_SALT', '22Pk|qT4W/9CJSF@T:pzt)#n7-`FT%{#bfuE|nkqL5VIMP]v;JD4XZtfy<[ySa@m' );
define( 'LOGGED_IN_SALT',   'R*z$@4,+d_gQmKl7VQ!S1K p!L9C9(|:=L3ph&Nrla;D`h+(3,5;Q@L{-KCR@bt|' );
define( 'NONCE_SALT',       'PzW1ZwkI{ywh~>hMHatqCc|{xh/`@ZP@}SJXzFhkWcD%IP0o//o6`!pm A0&2K[8' );

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
