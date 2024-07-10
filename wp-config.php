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
define( 'DB_NAME', 'fuzzyloj_orin' );

/** MySQL database username */
define( 'DB_USER', 'fuzzyloj_orin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L5qqe6@P9uBtedhb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'O9#Ae@0B+7QTb5*8)[RO53c)UZhkr%Uedz/5[dvw;k8YR/S8oy6__I#/Co8Un-+/');
define('SECURE_AUTH_KEY', '003D;uqLwW&sEfz2(K+!5m@]RBh7iH+[9u|7&Ta6%(zS3P7g31[GgWqWWruLI!Ob');
define('LOGGED_IN_KEY', 'Yy-3k;v6X)|;t01eZo]4lbrYEm/M77!93cZ68)Qv(RjQanNu)j@1l1d&@53gil4)');
define('NONCE_KEY', '*5Yf3673!ZlRh!nG4D[+)-Djt8Aeo7fv!QpUBL88o|Z15E;mp826U8J*Qu3r/4_%');
define('AUTH_SALT', '~6dHb%M-Qblc/WVpEcCEJ[M230%+zos8rsk3j@bJA80JSb8[h%9LsKr(f9A6j|xk');
define('SECURE_AUTH_SALT', 'y|rF6&8lMvykE6HP)tN(K[1;5NInYe9U@0R4mt++05Jf|#X4V+_u%XEiO6%Y4s22');
define('LOGGED_IN_SALT', 'Y7pAMeIlG3i1wE76S9A[BO1PXI8v@fT*5vD6xTnO@tAIRE#l3RFa-TrzJmcD-f#3');
define('NONCE_SALT', '~mh:CAkkC](b@/5):;#;321Kr;2/T19:LuAz1nLut52Ay6c1@Q*IO5Z6J2PAPGc[');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'orin';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
