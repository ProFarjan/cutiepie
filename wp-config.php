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
define( 'DB_NAME', 'cutiepie' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '$Farjan9215$' );

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
define( 'AUTH_KEY',         'CukKZr>:b6^:wX6>driZ1D!)w>:xF$alv)zKDV?m~?;)aZC2hR&%R~PB%NRztj_l' );
define( 'SECURE_AUTH_KEY',  'A9deeGJ.1[ISMl37MjG1uE|mi70Yb/R|@;uq)p))oEkIsq9kx_SJp@@KGRe<^n6o' );
define( 'LOGGED_IN_KEY',    'i{Ouk1M)(3obR/1`C}2uO,K#2)5?)o5o;8k?93|/^@;t3&1Z?L#37@<#1QsIkw&K' );
define( 'NONCE_KEY',        'wyPe{ lHM+6ROD1d-VuE2=cuX?;D yk,VV/Q+N]mCn;Zm~;n7sj^L/g>c/|+qR>Y' );
define( 'AUTH_SALT',        'WF,L@3;U7Qw>rRk4Mty#Sf1+)Miz{77Ju4Z:k|5O!d]PgZxReMuqV~0MLU7l`zD:' );
define( 'SECURE_AUTH_SALT', 'osehQ6|q;BJapMbh`]J9Ncxp@/X@XLk2bs]ZS:e$@z90VW}V76a*R-{,EEZHvx)L' );
define( 'LOGGED_IN_SALT',   'l9zdJfAqjG-|&Q}2RTu7z~9XoiGXBY8Im.&)f=J[}7i7zI|An[?9o_aW(]a!/Z`H' );
define( 'NONCE_SALT',       '*p4R$_$ck_,bb%{KW81W$}:dZzee#`JMi;-NJzG<LYAuxP3R7W`V8%NdlY_%EKtu' );

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
