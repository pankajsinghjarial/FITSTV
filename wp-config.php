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
define('DB_NAME', 'fitstv');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l;TW6Pe!BSw>f_`RFLF*.v_TkAAO7|]oz[f&?@kylW3BomO2JpCQiqAWC_xuiC58');
define('SECURE_AUTH_KEY',  '3&2Aif9f65Wi9S|/*q~46Uv+H2ww,Qk4wjJpo{kDDet[N-MnRyj|_43<AIU%kfZ1');
define('LOGGED_IN_KEY',    'T9-?.k#QJ-MJ3=a7P5I[|-OJOA7lrJ;ab(Sp0Wf84Za:%v#6YF22RS&O!~?Ksg>q');
define('NONCE_KEY',        '%h=7y=sX`3]$d[}W|C4YsobpzpBJY&H?&B}S+{-Z0ix{;M/2hIf~a(@nM 1SD(_S');
define('AUTH_SALT',        'tj%KIk5zKcp 9)G&-m|aRs80liw,UfH(|RLhX{V-=vdb*t?m:>S%oH=x9qxY,MNV');
define('SECURE_AUTH_SALT', '3iOH=5bqkr8~.&SEvuGTlsX9o~S~%OcHgCKno{=l5o6Qfp|; 0-C.Zd>]_.NnbvW');
define('LOGGED_IN_SALT',   'f-:rGs5@%}ih`uT~v2#$[Yz|a3]oGBj?:p?g+X|XgmO|mX-_c[}qCo+;8yFpy~M=');
define('NONCE_SALT',       'R$y>Hjv?6QS4Y0|gB)<ctG[-D uPFsO:KhO&YLfWp7+,QT)lJsKT~i$qfz9?z^[e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fits_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
