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
define( 'DB_NAME', 'dit_practice_hcorporate' );

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
define( 'AUTH_KEY',         '!H$]hqO_SDXW[.%EE@RfyT]=YY2L&JCA|>kSWi,9hY#Xdk,K@8_9cLr^Fr7t}(.q' );
define( 'SECURE_AUTH_KEY',  '4kgNAi0kDY/LZpB#{*Sj0<+g/CiM%P~O/C_r{E|Bq:/QwPMs-873+]VjabL(]K#d' );
define( 'LOGGED_IN_KEY',    'Y{}r@0q}WxlBQKbelO+tjR![3ZA}^?Du${=hP3J,7fk!K} b94i@Ep]#|4?m:zPQ' );
define( 'NONCE_KEY',        '-i(=?ORc4X4<U0[Ga,A0Sb 7,ov|VaXnTl&J0oS_H)mCdgNmfEFzb0Tu1.uGX2C!' );
define( 'AUTH_SALT',        ':MT&H<C*T{}<3`AL0CRd=1yd/ErO&<xMiQzXbJ0RCPf>FLMoXIa6~0(Bhf]v~}vO' );
define( 'SECURE_AUTH_SALT', 'U4m}JEC610InKv,PPr|;:$RrbL<N]IyIg31{{Aw_os37*qs[:9*1/IcXaXg+jU[r' );
define( 'LOGGED_IN_SALT',   'J4%qiPxxd?slm7MYn9,bT6B7{TB57x&Of|aGWG5:4H+T|]`^z[jwyLqiwq:|$#3h' );
define( 'NONCE_SALT',       ',|3Q:]rX!|0hzk&*~&^w/X?DvA=@x5~`;.$fJc0J=Hy}jh8kX=nD$E^6T20UG!6&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w88p_';

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


define('ALLOW_UNFILTERED_UPLOADS', true);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';