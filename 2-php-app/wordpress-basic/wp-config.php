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
define( 'DB_NAME', 'wp_basic' );

/** Database username */
define( 'DB_USER', 'hhz' );

/** Database password */
define( 'DB_PASSWORD', 'asdffdsa' );

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
define( 'AUTH_KEY',         'Detaa^k7ex3n_s_25aLs}D&(s0Vmy0Q1HtW8g@SQ9=DqFtA]UGKHd2>POb}i[t%x' );
define( 'SECURE_AUTH_KEY',  'dyh@=y,plM Fm3#up?}T+f,0Y$n]0w`hFkew_[AE~q9Bs^k=R_fF%YTsQn&$/&a4' );
define( 'LOGGED_IN_KEY',    '2uQUVP>)b06Eh?{2?3A3d>r9ZKvomx=IC-4Ccna}D=~jkbf1$&|o#j#b$WSYw!Vg' );
define( 'NONCE_KEY',        '6&8wl%RsJXm+R[G,?U>)Z#GgV$o8)Y+@`x!AYd=wvIB<SXs!mr+[Rp/7 )&i:3NK' );
define( 'AUTH_SALT',        '=.fp7oE6W>VbtT:Z-?WhYrs]Bf8,s5P@MCB-KJ]gKk=_#`X&& T MVeNHBDXU?xE' );
define( 'SECURE_AUTH_SALT', '^dkPgTg?uVZ.`V;|v23al&>x1P^KwAyaBO)zQQy$9T079vL4I|UsuCC59O?M~+JQ' );
define( 'LOGGED_IN_SALT',   '3p-vY6G0GV_ooI<9I%+[jae<6%nYfpNZ&m>ij_*kn<zmp~K:m)!y}vz{UhE,{B;]' );
define( 'NONCE_SALT',       'jtPJ8]G7nc)A3&3iRtHq!J@wVvLI}ZC-jx]FEea<GR~wVN6n0M7r]j[<|^&5}pxU' );

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
