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
define( 'DB_NAME', 'be-db' );

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
define( 'AUTH_KEY',         'FSx{FiW>V=:<+tD-u@iGdZ.U{UnWr(@KfBEz%jF^c.<!GhY6y4IjG-adl]i8qUa;' );
define( 'SECURE_AUTH_KEY',  'q(OZNo}CCfo4C_KH4]g)Ua5m>wX?XXel(-@LyZM5yw95kfxeM?^,b;09h: osCH1' );
define( 'LOGGED_IN_KEY',    '<rz1>IG4U 6985@.s-UGB#0ryQ<g{{cg/]G,3GLywdv@`ez9L{gGo*!2@O;+8F>6' );
define( 'NONCE_KEY',        'lP@1`T[J$I,lv;#nDa,+IWb9^rtNUSEsqT3xJYT^]g77odZRF-]d>3{*ud#@^j,0' );
define( 'AUTH_SALT',        'nm ot6]xiG*m(v8-E#%17jSlNjeTTm`([Y-S3aY)g|+|`rJgYAIiqhT}pLs@aemQ' );
define( 'SECURE_AUTH_SALT', 'f>@.#3ewUJw<)>0~w7|Lj$D:|MT@Q7V2mz6es6E1reyM<e&7vp/Qe?4-wzqOo{wN' );
define( 'LOGGED_IN_SALT',   'tp R6?^S5a~n7hm/y`GC,&mtu5Gm/8m;#65B|NE;TI_hq<B5)LWX3bG{d:Rb+4E+' );
define( 'NONCE_SALT',       'cjg~9X55xj{$inVHAH7;{r}Px3].kc|xr.jpVw%[D}{+GK7+axp)%gPEM,qa)2Rv' );

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
