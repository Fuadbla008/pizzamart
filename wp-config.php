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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u_*Fn?dqQl:biM8CgNXpa^~)2nSqhyzB/qzMLWxvJ^2_J), |oI-}R$&efn*moGq' );
define( 'SECURE_AUTH_KEY',   'r^GD-1Mjd/vu&V X]&Vi=gVVsqLM$)}$O2Lv]k**v%!0V)Hbh&Cz>/dsYSZHn2YO' );
define( 'LOGGED_IN_KEY',     '=OMSA~.eWBJ+U&}kN&TKP&?1w9$O8EzAx%6O+cP4Ogj>:I&-amH,}9Q-]Hb)#RFf' );
define( 'NONCE_KEY',         '|lW#9p3wzgZ+;}FZ8`%bMMU-MMqmO~%AD`a5<pQY]t}b_abv~xT!A&Msw57V-li|' );
define( 'AUTH_SALT',         'K=VQY3r5z)`gCf!$iM3br/Guzat5$4IeH8up?`xOUo3)T7~A%dyI@YZUs,om<%~j' );
define( 'SECURE_AUTH_SALT',  'n.Vlk8zl+UDTym1Sv%xu]kL,YBQ+?)ey&q.Re%t4i,&M[#M7{.#.UWhy~qiGe4?D' );
define( 'LOGGED_IN_SALT',    '_W;xGYN%kAVBmxQ~7bm1WQfnXZZpXtR;a XY0>X;xm!a<Nr};`^.G|R$JTZwX?%n' );
define( 'NONCE_SALT',        'cMV8lgL0Xd#,;-[obIWu~-pSL8I7Bl1H:)|v+n~tDaNAK)L]6Uculg5]*`} 0fs<' );
define( 'WP_CACHE_KEY_SALT', 'Z%SQ{(#G{N|]|ou8<AfSBz<&&`-Ic:UPM%^S+~n+-5vW_T:0vX`o3ai_aNdvBRZ`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
