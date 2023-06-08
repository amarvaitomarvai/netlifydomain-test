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
define( 'DB_NAME', 'netlifydomain-test' );

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
define( 'AUTH_KEY',         'S[Y+W gVuYFNBaSk k_Y.6&N6HT?dn5q_eNJMFbLy*UF/DiX>vbQc{^F46SxW5_A' );
define( 'SECURE_AUTH_KEY',  '9#g^irY{Bj95E^`*+o2s!_fUj(Ai<c*$sGv/@(.f2toDC^]~-2NO%QbZMl(9{l2y' );
define( 'LOGGED_IN_KEY',    'QGoybrV[2wDPx`6)^_]rIEW kQ(cG346F7J==oZz8Vc{H{a6#9C/oMxCo,[-rDPO' );
define( 'NONCE_KEY',        'TY+k!w^(~iq3T,~$=X[9;@((mifLH,Z3p+ Tp*I[|u!R7?hgX.:rwp,Z1|.HL4*g' );
define( 'AUTH_SALT',        'v>&LM[<Vdg}#B[a1)*;KChQ!~J.NmJYD@[/BE#tcPnU? $l/9k,JalN{h%s3lQ! ' );
define( 'SECURE_AUTH_SALT', 'S!]p-PkPU[~sxpG{WI>yDS+rba0?aQCW DDspQMR,d`kQvyN}IU+!`%1d:@%]Xro' );
define( 'LOGGED_IN_SALT',   'm`D`8lg`;fupl; yfnGgl>}uy/!{w&-M(%>T{/-4)vce9WSJ}#t]kj78kmdf1*_2' );
define( 'NONCE_SALT',       'X2rI:a8 nE6J-mQMA>>~Ev,N`:=tZrqN[s(lwp/T~/`EJ9mw%JUYACjyj,|,A(f4' );

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
