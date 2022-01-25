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
define( 'DB_NAME', 'Copynoville_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<tIkKA50Ixl6x#dd<>@(9AUfnr]D)EdI#a.q_HLDY:VbQ$6;t L;baIN{XRazJ W' );
define( 'SECURE_AUTH_KEY',  'B24[ /u3]^;d@)t#~3yzv{.7.u Fb^<3W*lJTPoS:}Ez08i0DIK_Jya?<pJ>q5VR' );
define( 'LOGGED_IN_KEY',    'A:0}IU_R9jyNEjbl/0<%bt2|ZEirkE4cu2Ge5j62L6vkO>%bNxn*K~My_jNh /a;' );
define( 'NONCE_KEY',        ';![Y1Vzb^k?je6cOlz~fZ&BJV|@@HfSv Gl0h)R5?5.EPx>n>SyN}64@gksJSR95' );
define( 'AUTH_SALT',        'eBV*!}1nCizW8: 0[64bcv~Y1THCj8#|?Fnr)vX1R(kYb.D,k1_ViM$}&e3yiswV' );
define( 'SECURE_AUTH_SALT', 'YLT3<^9|C$*gAUIj:<[ Q3Xz5QFJl(])u]*&!-<d}`W{(fU`{=&UY%(eOM^Ks*F:' );
define( 'LOGGED_IN_SALT',   'J%5mR/vA?SRHGRL}bWX>:$:7~BL&V#(s-rgGgWqD=iQa(-EdB,oT~U?KlNzxD&_B' );
define( 'NONCE_SALT',       'gFU]z(`JFL^b`7nsIzJ9!*u{[N8bb8U.bWsl]R;5_YoinaGqT`d{}F?0SuhbVrLZ' );

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
