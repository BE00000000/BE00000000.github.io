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
define( 'AUTH_KEY',         '&--E_]MYq_Fde_A%ns0rixEy@y;^fN>=%O?E.OEH(cd[`~+!43J(e=CYh<(dSqy7' );
define( 'SECURE_AUTH_KEY',  'XcN4w>XxbM;B/}tGHHhTNr<D j|P@*@IL{!^FY{kMU#pJ_@VT&k[j&nG6NkFSPV7' );
define( 'LOGGED_IN_KEY',    'x77d,Ho.)@i~Y2DCsR>@n>4WaSU>R!<MIrTXKF[#5?W.IV.k`3z?uv`o!F DZ|,)' );
define( 'NONCE_KEY',        '>` (-Z;I5>b}cIz}Y7P5XIMN9f-V3tBtkh[$XMBSULG=fvL999e} *AvK~cVS}W>' );
define( 'AUTH_SALT',        'FuqpliDU?{<uUfd8~SJ)?K<7-<|y!Y/g9v_ZE%y$AgSS{D3-:M8ix)d$(() /97q' );
define( 'SECURE_AUTH_SALT', '|k? S3*YMziU@oj6u:U9%dsUEsz 31NQlgj.Uf}CE)BdPusI]jDvabBA.%bSztlx' );
define( 'LOGGED_IN_SALT',   '}-VnrguiSrV<+nqqhZC,h5ig-#f.v5(=Yx$oG__eL6szN>P(7at_fxaqBz/el$c-' );
define( 'NONCE_SALT',       'UfUIefHFE0+4{S/vR9q@Ln+Mi>_$(6H.OP^cB{Yu@(g60x$c80(dLb<$ORppX&M[' );

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
