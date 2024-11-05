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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Theme1' );

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
define( 'AUTH_KEY',         'Ce~`k3!<(TL{FO,mEea~DUS3ed~Jhhf.csZR={q&v8Zu!|Y?n*m6aD+lSzKrg]eJ' );
define( 'SECURE_AUTH_KEY',  '};1*oyV91I*vYTt.B7Qi%$!2zehKzvi(O.s1j=iiD<%Z3%E.J#F_%Pd^)QK?VX49' );
define( 'LOGGED_IN_KEY',    'Dz`=)06-b5glS1>LH{GEW4)n0Vvh*VK0yF&OUK$s,qOXovHE0,<#aC7XLEMaIVI1' );
define( 'NONCE_KEY',        '%597*EcswqCNhm+$A{<3CI#VEs<kV5,x:C:y/4Ixq%;s_b8^I/Wy>LPH~AH:LyP2' );
define( 'AUTH_SALT',        'j<{5{H8?yT3`E0Q4yA-_[#%CK>*pZ`DZ}Uyswq0ne(@,krel^~nm#O5jaN5|{k+!' );
define( 'SECURE_AUTH_SALT', 'y:.{HmIMgVGHt7pp2Mt~9K8DK.!4GWFn  o}Wel:D_GSqNff(U](y,=`v1#,Eron' );
define( 'LOGGED_IN_SALT',   'RtddsXCSrvRSK|4sZ2<xDB`aIO:I.VzF@Y`+y^:cA`:%jb**x[q3UxxZ4ry-s56L' );
define( 'NONCE_SALT',       'JRlL!>.7^8ljn,1XH6|-u#FX6*dzmV!&5*gk^!>2%Ky@}{d2.h#Mb#~9a#oX6Mj-' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
