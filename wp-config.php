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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'charity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jx^a(43v:/ZZ^cz.` NBW|</-|$<s||aEr4+j{Pva2D;d`{-s@/5~<~fL+P9u;Sf');
define('SECURE_AUTH_KEY',  '&!C+eSqi4rC<CvL%1uo|d89J ;s#oJ[-jj(oGrL*>-{~oFN7M>ZGtYV)0|/PlRgR');
define('LOGGED_IN_KEY',    '(q21PVbsVOh-YZ(56T-ioeW/7=%,i~ A:x7p2b(dige+p`s!Di{U* /)?D.lE89Q');
define('NONCE_KEY',        '{O#67*fn)REc+$KeALRBd[G_F+cr%D|XqKP8P@3`u~l@zDu&,.)&/0BD?u;QIus2');
define('AUTH_SALT',        '&s.Weio<sq6Og,i/TlwIXeH;LC6N+<5H=L}mPYat-2q[uB#LZ5},?^?;_N#kdN@6');
define('SECURE_AUTH_SALT', 'j|qAvXpf-hnxv3Q$?=_:ma[wk{AMI$&36hQU|xnTe~-2$)w98lzG]<].G8UWQr;N');
define('LOGGED_IN_SALT',   'CT3&fZ1bw|::Lk,D~dPuO|qb-8e!;4|!U+9bwIa(7%f8Z]-+k&o-hKlzvy}`YR+{');
define('NONCE_SALT',       '{8hc#]i=C01Q.D`[=+Act,CS-Eu*JJ$jr:*UGr]^OH5&y>#/i227pjUUg`!6fznp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
