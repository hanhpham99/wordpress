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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '8AD2<XKH=@/d.O-Zi6|$y=3b/fSu^~<an!2{]L.^MITES)6e>8CJg~#/c4|}k~yK' );
define( 'SECURE_AUTH_KEY',  'JV^]Be9M3#lA&72_MR)<w*Vq0SgJ#vg^%iF,qOyz: U<bM4NH@!C.hMz&?qa?S+F' );
define( 'LOGGED_IN_KEY',    'hbWAEG`LAi&4PjSAJ]2fvXXC$gY(OcS8__Sey}k,5g)JUD68=}gnbii-1/yeO;4[' );
define( 'NONCE_KEY',        '+dRraZAq73~6,@>Zw~52T/j?GKx:3}P$OQ7!m)`38Fxk#O[,LY_Qa^qwNQN**?)w' );
define( 'AUTH_SALT',        'K~n@JoqJxN!k1LB<iBS36$U3?ONQrHmwuN,<Bo$g(Ne0(_zRr*9Gj,JXKe:!|&+9' );
define( 'SECURE_AUTH_SALT', 'K[KI$4LqzWls4ufNn3LhH]vdx},H#>p`ePfT-0(X=+@ljgT5D#hfi}CD9x;D`I(j' );
define( 'LOGGED_IN_SALT',   'cKprNdS85-u=_)c(g!x?RlM1m/A!F#Zs+9/qK=A>u9Tif<[EZ#c+*oQki*QC?m97' );
define( 'NONCE_SALT',       '5d:0Q3W-C#0ERSL&x?Z<,?[ad_a*(T*al!=^f$BH1],r?Iui86@$xKc^TblA<A=N' );

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
