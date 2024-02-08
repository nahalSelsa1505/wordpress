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
define( 'DB_NAME', 'guidetlemcen' );

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
define( 'AUTH_KEY',         '3=6*D2SFv5SvNMY-4,|w%6X[L}?2H3^h%,+>Gp)&31q|o&IA4T0@OF*e{1Ut(FQC' );
define( 'SECURE_AUTH_KEY',  'OkRQ{3u7()%1[icIi65e:$-H1vQ9Jnvg*EGnVBl16Q)k}Wd=1YsWtnB5m}mazHJV' );
define( 'LOGGED_IN_KEY',    'vYZ=;ou?0q{TWm:QF<;Y7>gQqMInGoBs CX^trn?yY6J<CZ<JGX]iP(_#xNEQR``' );
define( 'NONCE_KEY',        'H9ut,{.7_Fa6?_Qft`x?cE1tgM4|5p9[^3MOrI<+n)g-g7=6d=rH9CJ1=(##Gla)' );
define( 'AUTH_SALT',        '/DNfm?gCN)_jK+H{s6<y$`|v/y:l!@A+[S,>KNZ J@f$5&n-R>F7(I0O8rcirN[S' );
define( 'SECURE_AUTH_SALT', 'H={G)x s&O^{zjn!UvAAMI4p9c>IuF;T;wi8yG[;2qN[(!EXHs|O8<.i!v&_c0rQ' );
define( 'LOGGED_IN_SALT',   '+CPyi:L_.y~Mgf.q6/N@Ub9E_?UOExpr8;pOYLC`W*vdD*#zV6d#6d@j+E0BR*BE' );
define( 'NONCE_SALT',       '!@PyFO%Ze8BT%hi/-PO$,#!t%{)dh5j{;Z%=Zj+OZs9i@q8z>UJ`#oOUO$?~kvCd' );

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
