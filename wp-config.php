<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'id669856_wp_f47ec889efb049a3040868a3c4eb6387');

/** MySQL database username */
define('DB_USER', 'id669856_wp_f47ec889efb049a3040868a3c4eb6387');

/** MySQL database password */
define('DB_PASSWORD', 'df43f7bd307b6ff3e38f9e25ed0beb43b472e98b');

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
define('AUTH_KEY',         '^O!pzCIDmZOxrIyikXCBjBm#W4qeS3Gu0y9Dh57t');
define('SECURE_AUTH_KEY',  'h5*y0O7!WpzTd@yDL^VZa&K0O6ieM&ybdO04IYK*');
define('LOGGED_IN_KEY',    'ew4iHVYY0A!1r7RpINtY8QN@^rO@gMllr^uh0kKR');
define('NONCE_KEY',        'V6kdIJsNV@Dtl&GRYFvKX6iKd3e4$bny8x13rZvc');
define('AUTH_SALT',        'ocw0Ajk9M56*M^%LaQ2$Z&MkIw%mLNpnM#$$WXe&');
define('SECURE_AUTH_SALT', 'k@qfiTdi55She&rPIGmMX2h*KWn*0sq@V6&JsAbE');
define('LOGGED_IN_SALT',   'hXGlwflsJxn&CuqSO4vyS#N7a80tj2PriG35J%ET');
define('NONCE_SALT',       'MJ3ZoZymgZ!Fo2spUA8ce8tmvXQptybor5N6hqQo');

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
