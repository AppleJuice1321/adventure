<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adventure_db' );

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
define( 'AUTH_KEY',         '.bj?LMv&=0 fi*tGxQ[/GX/`jD,8E#:^-7?|75w.n$pL9blf3kKFbm>}B)A4ldHu' );
define( 'SECURE_AUTH_KEY',  '&5mInmq>d{QwLXb,F=1PTzl!NB!%HlqfnmWU536A7=<[IV?E3j=>] twD`hV8A.@' );
define( 'LOGGED_IN_KEY',    'H+nFd;*F{J,$Xo@,9O4,Grh}_upN;:0&nSP;Sc1(9Z8%mA9t}^@c[0OZ/cbaHNi~' );
define( 'NONCE_KEY',        'Hg9^qr=)8(?zl>:uoQI>q{`k1iX[BEPZyUX-[rCZ<a0rkRE97}!5oN*P>?B,W`)%' );
define( 'AUTH_SALT',        'M1]J7o!Y&S1r20ROUSd&W{`uh<7I SJqb5QMnk$:q`K(-#eNf7>AUKf Xb3DvT50' );
define( 'SECURE_AUTH_SALT', '#1x8]HQAef+9b:l$d$PY~Mkw%F>uR/*=UMZ}pI:-b7^}YGwXsVS-XvED]Qn}#1q`' );
define( 'LOGGED_IN_SALT',   'Il)<5N{@Dl@Z%. !~Mvw-rq}-$%>CWPtTgFEd%Y9h`i4n)yD~gg%|vjej%KU9d0?' );
define( 'NONCE_SALT',       'Ppr($E]%[O%BuQ0%6`>I|_G5s`KSqgj!>?.Z_u)2Zm4!76C.cta@HO9#}r1t}%oM' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
