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
define( 'AUTH_KEY',         'DGHVp_#:f@mE6iBL@Qlvi6e,a`,{eLO|fWw#:&@U?[f[ENM~_w5P/DF~IML?snhd' );
define( 'SECURE_AUTH_KEY',  'e)42e[8k,VMZ6,aWAg4J5.~V}#!ffwgi=>`ID=5sJk#-!nG<6mgavzDPG;B/d6O5' );
define( 'LOGGED_IN_KEY',    '0RNOTO4WUfzU9PP{ajY-O(~3gTtM,Xk@`g_vR}TP=!4cII3;m1$yAJ409SW,<(fB' );
define( 'NONCE_KEY',        '`uBGNU7zi`r@X!)e+.:W)o+{Z?XIuji8r;eGaEp+k#ypmN6pkxm.,@!yNB?mLP3D' );
define( 'AUTH_SALT',        'QAT3j48{liaW>e`<QVG]er;,hs8|)oV#Iom:Aq{A@^9%TCLl]!v]eh=)%5?ak;hk' );
define( 'SECURE_AUTH_SALT', 'chaP[;kPH,40KuIa(YtUickIDIidyq:Cxl=9[al<m1<hN!rv?J.]o%xsz^lEK0o=' );
define( 'LOGGED_IN_SALT',   'jwO3l=A5GkJK1uvleN cwun0>fO_9|&&cOIFS[);*u~3)P(?rqWqAzVx.{LzLa]T' );
define( 'NONCE_SALT',       'OXpJYi&FxR(FuqQ[q[wIsb$bH8C@xq75VZxJ!E3lb]6Yy7;]kZ%a]l;8({k:.5F2' );

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
