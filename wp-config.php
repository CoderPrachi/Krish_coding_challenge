<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l8X/V<(=TV%|O3kdYs3[@B72O7Nxo^:?G4[~O[whU]QVt.uzoh{*a,QZ`!7CIE!P' );
define( 'SECURE_AUTH_KEY',  'D!taFN+gy2mPNALX|_)/>x$e2;^x3{gA?&*1=kfO,`a0I#YThPKE}B)^+|kpLgHK' );
define( 'LOGGED_IN_KEY',    '0D5!K)~@O-x/M(g,r,n}5zTT:md2:F_THYN+2`8}Rc[t]rxaGB7$9z0uZ@@(%Qle' );
define( 'NONCE_KEY',        'Y.;>i0#A$n1%`*9[pgLqRmN8g1J.w1zCIQD5YX.pIEZ7Sb/fqe8`Nyl mzdC%E^e' );
define( 'AUTH_SALT',        '0pnH]8>FMV.Zi/vVHf(pxu7#bopxCHGxt}5AW9S_ rn#53:)rz7`8T:C5>$k(>@(' );
define( 'SECURE_AUTH_SALT', '/{F1J]tmxHa5?K(dc#.pM]?TJ}L>2I;GBkCbs-.(0Nut.0g[W@Gq3*eGV;G&r-iM' );
define( 'LOGGED_IN_SALT',   '~]hQRcUy=*qHD+B_Dqm){j C=U8<is09lEjqI<l4p$h2=wE8=t]17O#-^Sw]:rJV' );
define( 'NONCE_SALT',       'Wx8;!^ReIosItzgFr}2]%`<.TZP7h!l:*`1he62eIaT,Q=[b}KT}&D2Cv6dxr(=H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
