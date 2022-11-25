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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myschool' );

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
define( 'AUTH_KEY',         'BDj^jh7,qUwfYSXI7?T8gs<T@w+6cT^R63`8-P;|1D$_&jb.cnF!:)rjqC~2pTJH' );
define( 'SECURE_AUTH_KEY',  'I|)cJFnwd_;N@/nWLK=RYBS6C3FV@WLG3u-q#F^~iYizx?M$Nc[*;k2[-7s!7?)P' );
define( 'LOGGED_IN_KEY',    'ORmen`$20|A(]0mROdoN;ux82Ux%d?Po()[l.5DSC22SSo,[cWF]V~|*e6wFm_;5' );
define( 'NONCE_KEY',        '$|./HwdU.R3<F@}t_xW,8C7K F(xS-3C)NEGyAHWCN_:^j<sa;_N+HkvvI]Cv|Hg' );
define( 'AUTH_SALT',        'U;K6:A5cT%`AlXH2`tNA&eo4<N:ilWk%#`-Z[jE=g+&)+lEg/dE>eB<u61XE[Dbu' );
define( 'SECURE_AUTH_SALT', 'Z]T*6V1V0HnQTGI4Ozd,8.L_u6KZup .!r_|7OTQA*b,A$8;{wzTMupye<&jf+=E' );
define( 'LOGGED_IN_SALT',   'jD,<qLA[DtH-F7{qK4j4[Q=NaZ&tB]2#q6^&e>UZfg6ZCK$J7(6V4)=1Bly542[Q' );
define( 'NONCE_SALT',       'A,r=$v5&Mv9A(B&I^$0S/:ugp|u@ZSqa{s_GVrvx=zO(Ar>.:0NmHn`,rd]HTR:X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sc_';

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
