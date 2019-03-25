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
define('DB_NAME', 'gc_linkio');

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
define('AUTH_KEY',         't3cruib46yvwxa4b2jniimwyqxgwrytj2foyygjhk8p91s57gyihstkbej7qp2x0');
define('SECURE_AUTH_KEY',  'oks1bqarpxfnubknju8q93bxbaerih5ztchrawh0iuw2y3q4leyyhtwqrbaisvrh');
define('LOGGED_IN_KEY',    'rxyqjymoj6ifvq2aim6iryocylku5rnpuybwrbgqs9l3vjmsa9u6bcvgozzu5vxm');
define('NONCE_KEY',        'hnbfypf8dk23rdp3w311olotk8jmjoaew7wyi8hxtypzsjfqxy6hwfuyzgarqns2');
define('AUTH_SALT',        'qft3hi7qtrkkeo9uvm3xmw1eaxpsjp19dfzzsjwfkdqlbaeseqcxtnc2syy718of');
define('SECURE_AUTH_SALT', 'rjzfsjfmxzdu7xnxypkmaaakltmbzbxs7cmk8cngmhr0qj5oazzeoewosvf9fb5v');
define('LOGGED_IN_SALT',   'vb1j8l2bpez4iw2vblieodmvkme4xcmbb48diserp8c0zkygj2ixrvi1a91usn0t');
define('NONCE_SALT',       '74bdrulbbmjosyoyufrymac0u5l5dwvr7nrphomqgawnptsjjjst5gd1nwn7kell');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6f_';

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
define( 'WP_MEMORY_LIMIT', '512M' );
ini_set('memory_limit', '1024M');
define('WP_POST_REVISIONS', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
