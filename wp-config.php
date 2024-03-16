<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.6188609199458330');
define('WP_SITEURL','https://diy-pwa.com/scope:0.6188609199458330');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','+uh8<(@.NCgg@VzFGkV$JU$]>vuTz7wQTmB2z<lM');
define( 'SECURE_AUTH_KEY','LdZ5ouu?WQ5OH7bg2ZaF/9_Hnpn$)@Lcj^?W<g/%');
define( 'LOGGED_IN_KEY','ly[vlW3XV#k46dgpRb^9UBAAY7Wv>aosu3[XI@]]');
define( 'NONCE_KEY','jS9M3KNp/HeMsuV8hbyZPS#E,>?cj]11-@Wgf]2I');
define( 'AUTH_SALT','@+bEapv3_A+SlEBgl+KuW_5t9_!m*8BcQ=DCQRKS');
define( 'SECURE_AUTH_SALT','cB>Er9tVdGA&,tj2AlA0WY%NWg<9ZaROf$y#]C4s');
define( 'LOGGED_IN_SALT','mmSw^j0rU-w-1#vS.g#u-1dBYq&+u[lj<O4wvZck');
define( 'NONCE_SALT','R5BwyBX@8cVF4EYHvE3V_]&<yp?iBJg#o@lO@+(>');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
