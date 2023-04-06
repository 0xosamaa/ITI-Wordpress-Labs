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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '-nb__S9SVlD&]XfEsIuu>+B5~r{sU@[D9}$Tv)HZV{6`iMIN#oA&am6Mk 2&6E t' );
define( 'SECURE_AUTH_KEY',  'I1qtH^$l_<#B,p0btGw1w#;6{sSFPMvZWzR^]A>2k.o_NTZ>k(7IS.d{O={?+B$|' );
define( 'LOGGED_IN_KEY',    '1*o]$xLu~/Y/GbuV&~WcW0X 0 0D#nh=9&-h>s&vvZ3 YOVKo6yT10jb5fam5Hmr' );
define( 'NONCE_KEY',        'bD$pzp5K%.x1Cn:]+u@@E.=Ds;v?Hp9wY+Vti;3hFwW^|6bR85&l8J{IzZASrK_i' );
define( 'AUTH_SALT',        '0vl~X|~aRF@2}u6eyWo-oG!p:0)bYAxLUG.H{XOIo1DL.tY}W<92j5JaL-f;JRIR' );
define( 'SECURE_AUTH_SALT', 'H^821asPMcgd^2hM*Y?)Djp.8<qR1Vr3_JbCa09h2C[I7MYNLT;Oxy|Uq)Vb% bZ' );
define( 'LOGGED_IN_SALT',   'y3&6suGI5y@A Ol+:2YQ};ZOp.`0D&T5~8DyV45#5oLYXQV~]2l^1 q*%4R?%7//' );
define( 'NONCE_SALT',       'tC2?<=E]&BIWWjJHgs~:&)c*!dOW^s[r7B8p~Qll`-|Og]@UzBr?Io9?_(EJ<4Jw' );

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
