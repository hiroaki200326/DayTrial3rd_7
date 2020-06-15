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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K$.3L`@(g1#!7m7(`iBs_JF*,z%eOS)28w;5kar60c`*kgrh/^P$Sb]qoK]d!|G}' );
define( 'SECURE_AUTH_KEY',  '/;>:#q)9du#-99BUw#G-q1aEzq6!P| 0`][j)R6V|0uL~jm50jr6y9+7gypAtUD7' );
define( 'LOGGED_IN_KEY',    'CqqW9FTAzcx%EG8vwOCZ!~+4SDdy`4}~V]`!;x+)pM~e}m!h-!uB6e&-!;$|pv00' );
define( 'NONCE_KEY',        ')Vhv6YevK_bTsA%=iu!whPXqgrSG6PL69pHL::-;#k`yuy>0cldNK0M/dCYW@l;&' );
define( 'AUTH_SALT',        'B9D;,XnqmXAS%& ,P1]8=hZc#I~TBtCY<3uJK1o|9)Z#LxjnmE> !&Q+-n&t;4j8' );
define( 'SECURE_AUTH_SALT', 'jijbe#?S._P_bJ4Zue0jXpQktnB7K:!mD5hmU+Nrh<ZBJR-l*J^~EMBlbfdAu;rd' );
define( 'LOGGED_IN_SALT',   'g5?IoHyIuh,q%nDy[K:{]ab]F(,1Fjz-$Z@pUcs|XoQke8xWwU@^yE<>#`G~ay`Q' );
define( 'NONCE_SALT',       'T]&SWv,|&MlQX.|bVI4B.xQ8[pu*N:{X.<5>!Ma~.9f3[#(iSdI9kd+%:Oih[`qQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
