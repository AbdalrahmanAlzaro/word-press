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
define( 'DB_NAME', 'emm' );

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
define( 'AUTH_KEY',         '%]rfk#+l}}7LsYy>lz.i3,z=juvwl%n=[/PSNP{L)0Ap[@Re8n^`&h#2;].Y,*aK' );
define( 'SECURE_AUTH_KEY',  'Db]0|BW34QRzMx}9>OOC]mXW=|X},Y(P.zlO=upWI=[lc5i@gL*{hPTTm1e4Gu1c' );
define( 'LOGGED_IN_KEY',    'WnrJU+6+[v-v4lpbUd<8*h)_;~ *tAfR`LE}W/m?Rt*9cka+$Z`aQ93z*5v59voW' );
define( 'NONCE_KEY',        'xPbzV)yrQ1j*6eHk71$k5g0cHBQ;KJ]R[aQy2PRr10|0>E@x;1oNO=EW/teF_ynH' );
define( 'AUTH_SALT',        '8A/ZmvcQfC|GKGxy7PRD[8)()`0Nqd&pU55I[NTLI9Ski}!Ql}=!z9_EZ+$4&?28' );
define( 'SECURE_AUTH_SALT', '%P4&+3BM5C#u}[*K>^ukGt}:}1,5u+nR~$F0mL/8jz8(Vf^wJkOg* SalOd`,8]G' );
define( 'LOGGED_IN_SALT',   '1YRt}KcW#/P,Kq^A[$k.xH0{E<i)tJCM44tkYiJcCb3|bP92)k!gq}AF@().Nf<P' );
define( 'NONCE_SALT',       'EI+(@:z%,:*=/k73NV_ZWpH>[N0f0]HuVi+VVLXaFQ1sGuDS/p38!uC{Bm,e3(oC' );

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
