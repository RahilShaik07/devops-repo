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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'RandomP@ssw0rd' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ANk%^ZU=0lF}Fz*slb$G5yTD@=?|`kPiTH&czg>~Iv[MhZF+rm~8FW>,e}{YwFkC');
define('SECURE_AUTH_KEY',  'x R^OL9mHc)jrEMKi;c4a=-IW~&Dq`Ip!pu:#RA(mY{OJ5~!IM?baIrDz@;1&Rxi');
define('LOGGED_IN_KEY',    '&x_`mV8I?+Dec t31Ss?Q5KX#!.c[P|;wR8OJ/MC_?Crs|#r%?8]N V $iU|c/4Z');
define('NONCE_KEY',        '`>oG5Wvt91>s#*8.3oF5 bJ=lo@+:-bp}~xRFw|<xjKnM.k5s3Q^z%nz?|>~A;^C');
define('AUTH_SALT',        'm3-=&L>>8wt)jY7tjn-[`JWGFX@%1P5oCh6-I4c!C9pJT$3]Y-6y+TAq+R /Rd[q');
define('SECURE_AUTH_SALT', '4sx|~vX%x!o#qMo iE_sTyb9FCMvm:j5E:>0K< DCgS *^0|<a<Khgd:D8LnI_?Y');
define('LOGGED_IN_SALT',   'v2D~^`WT*w3O:9tSj#u$DK0D5x~4tQ&h/K Q6vYPZ_rT[FvOT$~rOiXKe=oJpCJ+');
define('NONCE_SALT',       '^SiLcvpY3V>)-{_x`:EF+S<w3<C8r!o2DVE7$5vE|8M7iIz*2cpu+9+CGX{Qbu~o');
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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
