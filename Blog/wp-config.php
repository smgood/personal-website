<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'sean');

/** MySQL database password */
define('DB_PASSWORD', 'CEGtL5JNwpXwg5Fy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'PYJUenSvT46OMIvKyEb7zoCiTGx43HZcXxYGqCJexxfZDtv5eYvpwiLrnykBZdOS');
define('SECURE_AUTH_KEY',  'gwRiKQV4SSxiW4FSTdm1Xc5J0RXVq9W2uLklKnvD7qDmz6wZyV2nOVpiwYwF8rJY');
define('LOGGED_IN_KEY',    '4eZvkrIf6uZ8g28ybnefZ1UspYDuLzK3CeI3jJ4ya4iyP24GzP5wNsVLdocDP3qR');
define('NONCE_KEY',        'esZ1J8bxCooeyUBkSGAVfc0B921mhgSzgcX97WCL1Z5ggCYWqLtq7XsDcl291Iwm');
define('AUTH_SALT',        '9dxdBcJHwtCpofixDOogF3Pxq1jLCA6KVjmXs0GLvLbS9L0TgGtYCbjPGWcfsNgN');
define('SECURE_AUTH_SALT', 'WeKpKbYHsU7EYObWSNCAh7KW4cth1bW8SR2780WJtqNYmG30pWHwip1NbdSdux23');
define('LOGGED_IN_SALT',   'ziP4Fv1pc9LE3hSyoiChJFdFj3XCAUjek3JYXbEVnw1J47pg32i9LwPe9s9H5Kv4');
define('NONCE_SALT',       'dAhgDErHxCiSAroqsJfUMp6SgmOogsKzxkmVu6pOm6hSK3qKBQKD599ywssF4d00');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
