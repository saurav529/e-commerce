<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'Jq_-r|3SRfPS:~}Fs_?#kw$w7 T7XW vnFsq#G{(u) <g6CWz+D!2+;YUcfGW;]=' );
define( 'SECURE_AUTH_KEY',  '&@U.DRJ/6b;wj,JS$tNJTQ)u2BMDImW`pO9<Mi+|c@~>CV0ivnK47-RC`9I|9,gA' );
define( 'LOGGED_IN_KEY',    'CeVQ(d8DAw|/VNMp w1R{}]}*L^ZM}zAM/G0^mO$nvN3PF;_8fKSpAC{mW~1(/:S' );
define( 'NONCE_KEY',        '+U5<h|K{dvT;A(1H<B 7U6n>kVu6NljR{>UJ5,GP0QnzZfTcdAEq^YAv-S6[]b,;' );
define( 'AUTH_SALT',        '}Q>O.A7sO6#9 pT}S/MW{0DcnoY<h]cQU`_B9y+<WBCnTb|d~;V.`9M^xvT51&e-' );
define( 'SECURE_AUTH_SALT', ']_OFtnvZ[+97D+ZL,W)b)QjPF7UQ|V<6KFO?H kEw6Qm.c )J}^9t)}d=X//h=D>' );
define( 'LOGGED_IN_SALT',   'j:Sk+m`_)jo .ZJW,T7.7XXr}LMAsrtG*3D5BGfcC-*=eN,D:R?ZGp&`l8ZhdPV8' );
define( 'NONCE_SALT',       '5vc^3Q;3#ok wolqBd|+hE}1PxSLUE]E5[grK>yF@hZ<0&NVAoY`@oEYYEzO}vLk' );

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
