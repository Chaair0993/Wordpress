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
define( 'AUTH_KEY',         '7rCzwb!J0e0}+?=]rf`xmo0G<d:4(Rwdp$a8l~4^$56+->Lpl|bvZkwH{b1P)/-X' );
define( 'SECURE_AUTH_KEY',  'c<)K9ac^FtHEkV$L:If_0_w0aFbT^m#6ipbZp{;.<=Fvx!i{xQ+9p_(E4iEuyX4u' );
define( 'LOGGED_IN_KEY',    'D;r1n7#n.*tN)t;>2{yC7,JEeiN{;+%QaDaJD{[gTg6(re+tU;5`q!LE;xi:RI6d' );
define( 'NONCE_KEY',        '!/;tYU;+SH+y<a-pnc?D*Q@^V[l1<kN{A{Z``O/7E8q]IPK0XcY,efoAdwQ`EXEH' );
define( 'AUTH_SALT',        '&IKN.H/kfPhauRFC/E([bpU{gOop{4a>Fu5b7c R.!p>cRJL?-s+n^`zA&_a-pI^' );
define( 'SECURE_AUTH_SALT', 'gpLB. >%?%uAD01%)}gUwEo!+*T-84LvWy$`~_#KqeM:1$yiR?zgg/1V/.7X^eC&' );
define( 'LOGGED_IN_SALT',   '*q^[vH81~O,>JAus(P?MKr(HvVKls!*}+U(` 20f$-Dh:^>x3NfgaVKqMzkk6d7&' );
define( 'NONCE_SALT',       '$GH(4VI9#q,d;_Cg:6YIR|E(_FNl9JUt_sv:2w#%1pMj|PjIpMStOT2B:AfL<uXR' );

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
