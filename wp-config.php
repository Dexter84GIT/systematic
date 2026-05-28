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
define('DB_NAME', 'tmtrru_s3');

/** MySQL database username */
define('DB_USER', 'tmtrru_u3');

/** MySQL database password */
define('DB_PASSWORD', 'x_ZRsP5_9L');

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
define('AUTH_KEY',         'OutfvF^qaCYAhxEfCm9FVRrCimhuX%bIFQ!!y6IT5DtaKFydrEuj4&%lC2V#^V^1');
define('SECURE_AUTH_KEY',  '1lqFtgL4LIRkbJhhYtOF8&uQc8%lqW2sb6!Vlb%twaSg(1ccMAEqNW#B9CeadyWz');
define('LOGGED_IN_KEY',    'n%0JB5Nqfh!PR9FeTuhWUc5gunO@*Amhh4CcTtW(cJ^U6tLe#SrvxqCQH%BcvKkT');
define('NONCE_KEY',        '9yP(NNivElQuM&5zdHw*BxVhqbi2Nb3#sTpbkKE7!biBwT@IGm&xH#@6B^jaor^r');
define('AUTH_SALT',        '7WyvE!2)rZnhfjwoqfBp!Xsw0N7a&6%nE1a23VX%Adlr83jQ7ZSHQG6QSENJie!2');
define('SECURE_AUTH_SALT', 'f^S%IpR%frUY!yFt#ubc1YP(G6IELI3R)q4EyrL6c8b36SgqS2yHrWX^WhjchQiP');
define('LOGGED_IN_SALT',   '4G2dxz*gciS#ANdIU&Oz&Yk0vbfpddiBoTm@dkZpY^NhI@JuPryHeHk2JB1YnU6d');
define('NONCE_SALT',       '2IMS(%H)hZYc6GH3Bhfx%AMpo5sl9*!(!@YwQ(4N*KOw3IornM1mH69Cq^AP#D)3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cms_wp_';

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
