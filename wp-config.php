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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rssampang' );

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
define( 'AUTH_KEY',         '{G8u;MnD4q~6k<kx_cmVF(-HFC2[#C(kvZd#/_ar |6&__6rsj.},9Pm^vMJL87h' );
define( 'SECURE_AUTH_KEY',  '73PnJ>~f$F t*1@Yc9X]fLw(e#zetbL{:r1%.DChAN:8wZef2^r8Z[]88<sH|}?w' );
define( 'LOGGED_IN_KEY',    'iBZAMLqO1#R1sC.T4W]%1{Hj&/?%;[KZCSk]twm2%Zd^fRUW=.:@c$:Y)H5Ip]})' );
define( 'NONCE_KEY',        'EFK#gf^75SO@ 7y69PkUJg&`48#!n{6(]O=7nb?jw%DbYRF`Hp1#vgWm`JXQ:y7f' );
define( 'AUTH_SALT',        '@2@P$BY2}o:a&=RkyZa+~&ESnU4ztakFZ-s&ks]!70ysk@nAXp GFV(StPZt]c.c' );
define( 'SECURE_AUTH_SALT', 'c;=$;R@m<5b }SsHE!`z{Ad7;>LYsZWB 2{jeJ~p^L7=4M{[.keg1pV>,s`k3%sO' );
define( 'LOGGED_IN_SALT',   'iKC*DAG-<2M&o5fy-b?;)Lw$arZ~7O =TFhCQz)]kcAS._(!fG+A:UI8<kQjtc_&' );
define( 'NONCE_SALT',       'i/xqL)<R=Xz Gr1wJ*IU> fRI7x6#O#%b(_=?dp|;amLufze+;IhX18U2X! =k`=' );

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
