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
define( 'DB_NAME', 'demowebsite' );

/** Database username */
define( 'DB_USER', 'demowebsite' );

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
define( 'AUTH_KEY',         '^)YpRv?{y]AfOtszqo;2T]}9zPrp^2&b8s?VS5aq)/uyzfVR}`.e<!-y3,]0+NmC' );
define( 'SECURE_AUTH_KEY',  '=.#N<$?RbV6::YUmwMiA7*|hj)K/WDx:?v]W]OD&i?4&eRAoL!G8zf`61@}y+4DF' );
define( 'LOGGED_IN_KEY',    '#`i0:a4@Vxgd@wWN*EzaK2kRY(]t&n7)T(r4q4*}xyx]Pik(m{R6#|OsK@8hdMdo' );
define( 'NONCE_KEY',        'SQ=y)Zl<!b,CSE+!Z!FH0Bs*Z;<<gH|A]3^09u>Z[d*dHECfqtO)D+djT78Lx]J8' );
define( 'AUTH_SALT',        'Z-Y^AQNP3FZ5>[fZQ8{7eHbtB%8A%sllyL]v{VnuoP{nQ#`|/HH:u@LHs&+F*x?q' );
define( 'SECURE_AUTH_SALT', 'lWXu6T>O&U& /T)Q UZYje-Ig|jID8DY+xf?>lprEK<4J:.2^IHQQ-XjRIv.2`]M' );
define( 'LOGGED_IN_SALT',   'p%Mfprd$xOc)Y^PRd)OD ?KX`w?Qhf0(TUD7Ezrka1OG*a#[=c,W>m4H+D4U`Wh2' );
define( 'NONCE_SALT',       'jQ0t?yR`Gq==3Pqv}+&bN, ;5es$b9muy-]1gK!.@o+^rB.qTeY@TEKR7x>lFWT%' );

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
