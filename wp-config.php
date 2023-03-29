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
define( 'DB_NAME', 'wordpress_lab01' );

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
define( 'AUTH_KEY',         '*Zjf@_Ezl0jhdl[j}QO-/=>)ZK-E9cHqm}}Dx+-|=/@]4<=Q7wRAo!g`D+KmX!Ql' );
define( 'SECURE_AUTH_KEY',  'Fsp}bdNW1-9m9s*^9j~K.eq=d?gmCW=!iZz*/N(4tlv3Bt|I9}VPdPl3**I|@u_v' );
define( 'LOGGED_IN_KEY',    'Q1^_{Rc]*hS&E Un{0q<eo=AYF.Nwq;,k=70fHx.bcaNT@6skM1SM*{;k]EXCL`^' );
define( 'NONCE_KEY',        'd4Q=<19G@TAM7Wl`09qCTt0TKYFj{?YDf?>?K)5r>9M3WU*i|W2fL~cDWH4{q)?q' );
define( 'AUTH_SALT',        '>x;zmN9~6lzllMYsOdU&:{rRKSY50]WGYi9Z0<SqYq~=lE0}.0]m:iD39MUtvywj' );
define( 'SECURE_AUTH_SALT', '3tUgTd6nzt FPJ/vZ5GN/m4%3p~56Dx[e%hIb#.1589pB`h$Hi|I4q>kel#7,[Nx' );
define( 'LOGGED_IN_SALT',   '_U5F6:I!aI}!RWte?bJ=crTGKDJwd*B<|*Z|g06T44rPLonF#yEn8)3G+{[sTRzK' );
define( 'NONCE_SALT',       'fmIt-eSWht8wYeoq$bI^&Bb.WSXt_IiXHxehw(GSl$@axlM~8Q1KwBWU?wgGb>[w' );

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
