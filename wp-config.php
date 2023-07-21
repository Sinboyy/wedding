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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'Cezar' );

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
define( 'AUTH_KEY',         '1:9s`#jMEIDk 8O^h-iAB,nx?6WPoG.UhH2}8YeuEW?0~<5+J9x5@=@[rvW+C,`+' );
define( 'SECURE_AUTH_KEY',  'C*yy2_0Qo&z}x>_,W5qmq9zJd:Ea*06[;.UzH*x~d64x19BFeG_y94TyQz|%N]PS' );
define( 'LOGGED_IN_KEY',    'ImY@17&X@c6XRW(Xa4.Q/0krr)j?aW_B%u*96MyWA;m0~=GIb--Nx6Kv`|A8:,Ha' );
define( 'NONCE_KEY',        '7t5??.m.MuQQ> (I|r$3[:x?sb=T$ezvNsRIkL8c{1v>x]TRZ2fVWT MoL$Zs9a.' );
define( 'AUTH_SALT',        ' |DR4hR;8`7{=t6nH[d7.JLN/%UXg=RWauWUj64ufJa:4$%Y( q]3X3_e3Br:j1V' );
define( 'SECURE_AUTH_SALT', 'DtF;UYErCy+7aGv#49[R5jhQv?^Duu(e,4}.q0q8&]8[MuT]VKsB2f4!mdiNj6/9' );
define( 'LOGGED_IN_SALT',   '1(K/}F^w/g3h.V#loS~m nti Ve%]2Nz(!$0Rm;*=ROeKfhH;(Zrl)ZYmG&T7775' );
define( 'NONCE_SALT',       'gdYR1<<2pIDk?@q&Mkn0#=q`Lc2FTU#o<igG*@amgRO>b[tBKd*h2sUjl@;$/8h6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_utf8mb4';

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
