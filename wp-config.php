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
define( 'DB_NAME', 'wp_001_140623' );

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
define( 'AUTH_KEY',         '9RHV0#YSYn%W$4ST<8ZzCl,J!$s0a+?,pg:XD,Z_$V;yX^/~MR1vd_~$eXbJh0`d' );
define( 'SECURE_AUTH_KEY',  'PA.2YpeHf>^vo@wI&sHKt3JL_W^|QAl L0yA)JHo!3@4KVA]!!eK<}g7zVf[`&Ph' );
define( 'LOGGED_IN_KEY',    'X8 z~@~(0PfzhOh{) I<o@)CCVq2$gkGDi[K|KRY=r_b]ChxV)z>$1%b-|rQBkj,' );
define( 'NONCE_KEY',        'w`9x$>>@-&J;L!qe_1~_4:PepmG{@.B5YYjq,G|cDqd/2@jNh%;=0Zh./})KR2M;' );
define( 'AUTH_SALT',        'hh|`%`jW_BAhl+TrH,rN%AZqo?Z4R3h:a2K+OYxHS_p&$kI)^E130cl,S2JlTlZ/' );
define( 'SECURE_AUTH_SALT', 'Bxd;+U0rTu%<3@?[(_tO%3@[Pek;C.af+*?0[f2gSymAnlF*;9i/xd(=S-~RNfLV' );
define( 'LOGGED_IN_SALT',   't@AKf!y?t^6tzGrJLb~? Ma_>]II/`vFo[7X8>7@]&07?dNp:bG_sf+0:k+n&qQ9' );
define( 'NONCE_SALT',       'R*3}>Me,|GNa[[knE<~l=i[b=SB@=P{*z Yv=Z]$ M@a-SU;kG0|gjXE!zU Y[Q<' );

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
