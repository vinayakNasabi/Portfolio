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
define( 'DB_NAME', 'wordpres' );

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
define( 'AUTH_KEY',         ' {cOa!KOk&w[ 7958WeU/Xt_3-it;c:rP9}L2ii){yCG_TyUKh%fs5kJ[r0|UX2~' );
define( 'SECURE_AUTH_KEY',  '/vY)G3O#9{^W+ObiqIBfVg[3tvIx8p tmi~9]}FO3Dg_SWkOY7o~1=m6?p:@JF*o' );
define( 'LOGGED_IN_KEY',    '6*Qyv]Ocbd]c^_71:Xq]eAI~g+X2QYy(Ako/LB|=oIT>/|gwq&MwwZ3WVi;8z.>n' );
define( 'NONCE_KEY',        'z439rzc@eWs^<K!J(|87TZNS!^V^9 $d#Mp)CvKq,l84}&0tcx8(H;0=1;i;;awM' );
define( 'AUTH_SALT',        '&<AyZxkg*j!)CCjUyJt=u YRq-sZ+5)d9VSnP)Q,z6[a[:iq(j(1HmH0G8rpahDA' );
define( 'SECURE_AUTH_SALT', '4T@<!*t[azqS7|f#c_7N0Hy2j{N-D h@M(EZd4&s~a(cR6i=rW}S:t*X>BkD]W#?' );
define( 'LOGGED_IN_SALT',   'Msje*0~q~g(E9YVsn.?oLxP?;x)c~a*vvW0tc=&D)bp|@ G6P/i>)-YT*iRzl%5!' );
define( 'NONCE_SALT',       '4jDi|s0%Xd1`zV!]&U>I6FLm-;2IEmszlI>IDsf{@kx1*ia^i0EDuRFXI;X``MM&' );

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
