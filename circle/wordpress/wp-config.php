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
define('DB_NAME', 'circle_blog');

/** MySQL database username */
define('DB_USER', 'hoodrich');

/** MySQL database password */
define('DB_PASSWORD', 'LADodgers#1');

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
define('AUTH_KEY',         'ID {]%&#}:XdI|<B8:/`MT4<|dU{8j(Np0(+!u$3QO1LMDC-<Dt|~28O~%+Pz-vM');
define('SECURE_AUTH_KEY',  'h[J5Gt0+ksSRz|^f(+KmQjWb`/ZyW#8[=wGi5,B|KvZzl:j1vb=H=Ntle$dTA#6P');
define('LOGGED_IN_KEY',    'c)fL|&B$&<<,}+YorD-wawWnO -O7%B.}Tg};vOD{=0DDCA@Z+g716m,2qT|`M}n');
define('NONCE_KEY',        'ac|/ns0v^&h17pK7$1=|ksL:-hGK:<jEz:.e/[//~E=DeZ , QXv)q+m0w+iI&R]');
define('AUTH_SALT',        'nTk[Hrck;{^;dxk0-J@-PX?^t%PAq]O]TXqQ{K @lMba[^|4%j=+:4)*V|1y+0_:');
define('SECURE_AUTH_SALT', 'ElB>L^rmH`d*zDp#|93lL,5}zq|y&=]Ew.ns#5hyv.~!/B|8%zhG3nf.+ILs!a7%');
define('LOGGED_IN_SALT',   'Ie/suZT@fyK+VpVm;;58[<aL[`ByOr|@*qN^#F6??Frr2u!;SD;_6p?=<sX$KN^R');
define('NONCE_SALT',       '+Qt[4miVh|vs[&C+|SGd68ZRRq;_cL!ChNUGfR[t XJ[kl..K[OXD|(O3<-*+D8r');

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
