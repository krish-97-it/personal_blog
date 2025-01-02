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
define( 'DB_NAME', 'kn_personal_blog_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'papai2297' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ')N^a@?rP*4Ub<>9vskPu[pDn!9fpHVr4&?Zg[)ahkdk:[3>eY%J(ay)haav;]!K$' );
define( 'SECURE_AUTH_KEY',  'n<8mrB/ D{WQN(Ya^<;luM3m6Ku-(vh9EG1HMu<|0y8~s@U~T.2(4}KaeR4Bc/~]' );
define( 'LOGGED_IN_KEY',    '8<SC*t1TCs};uiirWOU{GN`9O>yisPW<N* 8&lLZxOoeQx2A8n7fO`c}G/O{.YoF' );
define( 'NONCE_KEY',        '5HpbMqD0$<|}zKGt,G<fEaJZAsX>p=zM&M5cATB~AreJDJ#!~IQjR!.pPXZC;k;M' );
define( 'AUTH_SALT',        '$mb6gHIQpuhEw,z7pAoqqPWRM$l+C^9}WP%7U-gM4^J~a.$=:X;l@Agr/hHyH ,Q' );
define( 'SECURE_AUTH_SALT', '/Q~B!Choqr.~7OEynYcW+Cmf[Do>j{Od&z~:py6?`JV,1[`]OGZkClXNZs3@wAU;' );
define( 'LOGGED_IN_SALT',   'qjM2]?ts]|vO a;jw{]UQw:Lu=c?b|ch18+DY[GhVj[*xZ:Sp+n~cio)>f38Q1T2' );
define( 'NONCE_SALT',       'ztv@P(;:a>x#txFva](C5;_M4$WE|5Hn}-Mfn>5aaK7fi1 D|JwPdGUK7&QH  MV' );

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
