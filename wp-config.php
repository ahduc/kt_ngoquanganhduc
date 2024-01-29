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
define( 'DB_NAME', 'giahuy' );

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
define( 'AUTH_KEY',         '|A!YhQv-=;[G]b-m#4,Q/?^!8Q-T7G3|JL_G{:btwgk2?=~9&F}y;Xrc^H@Zkby9' );
define( 'SECURE_AUTH_KEY',  '1F4Z*0%8^|y}L%t_ag3oupsh8:zw{+9i/lf:({s=252@d-Am#Y{?tP,Ty2Y:Eg9r' );
define( 'LOGGED_IN_KEY',    '1G}];05sq)AN6YV&+3Dw.c-e$o2GLopuNys5q.PPh8r9ny7cv-%6+jY2qe`EfAfG' );
define( 'NONCE_KEY',        '2]Y;S/[v0qqMyK=a6U;U6RSFbN{o$B]u,|7Flots=bHs@M4Ob&]UW]_x*pvO!?X.' );
define( 'AUTH_SALT',        '*&TchA1{TZxbQP?1pvVYlU.5:ep7<{ezY&M,*#~-B;x`T+10(qv.uF6:_9K=@Eza' );
define( 'SECURE_AUTH_SALT', 'B+[fre:Mk~&{^LZ$|IaTof%kv63p,EZ*UPd+-nwGW:Gl,V4*;Ba.!8#8J=,kV{9l' );
define( 'LOGGED_IN_SALT',   '/^Q5Q-CI%~9CW 2E2USEE,4)~-!h2a<J9:`#mi_e@GgR?w*^<$I Eb)58g(5u.R9' );
define( 'NONCE_SALT',       ' #{>>*8bQiVF^$Yr61(>FM79dQh~N2N(c;+]tlp||M8^-V|8Z31`=c$B#cnwTjXI' );

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
