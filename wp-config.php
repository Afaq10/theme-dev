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
define( 'DB_NAME', 'course-db' );

/** Database username */
define( 'DB_USER', 'afaq' );

/** Database password */
define( 'DB_PASSWORD', 'Secure@#$123' );

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
define( 'AUTH_KEY',         '1-c8j.dM/`a@w>VI460)Ov+FxI?!-#/5))P++WRRn@kjlfFDQ1!gjGfGZ0H(Xt-(' );
define( 'SECURE_AUTH_KEY',  'BC=PEFwTHHu@/WsI@0`Y-|]z2t93GW?R{|&ljFkCq$65h]iNa9$MepRc@Q9DAuj)' );
define( 'LOGGED_IN_KEY',    'D aqAVb>UGpx@~lXLeY9q)>yaPa?`:%JZ181JJ(!ox@{9tjs~8Ig+>YY,JEqb?%9' );
define( 'NONCE_KEY',        'hN(/`akW]K_P|$E%H,)(wj*pVCi~-d;su!gY|g!]^+2Pp!S%w&|Er60.{|wiDojn' );
define( 'AUTH_SALT',        '5?#M>[0}uXA+wT yzpF{M:bI%]eaTwW)e{EoCwORe4xg7{LE|?KFj%m rIU<`(MF' );
define( 'SECURE_AUTH_SALT', ',!.l!EKJvdA(=b6Dy5UjMR/cWW7ONU+YRx`;kKEQ-WM>%7x.39ht-d)=eT%pt1v&' );
define( 'LOGGED_IN_SALT',   'IpKai=ioccSYm1ys%z3>Uu!^+<p$(&vwE17^:g&Y5E]eulox]@mRlieNToz%#?rX' );
define( 'NONCE_SALT',       'u)oaT4RYNuC8F^yp`L{ha[,  DBy.0`>wV|,Rz/@?FXV+z+)2tD}[g:?t](sD23;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'theme_';

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
