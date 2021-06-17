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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'AU3w4VRqnFRwuS/SZ4CwAI7K89HkZ+8aRmAr+ucOvzPYzg6dMaVhQU4RbhVGYs/YGZn26b8yPv794FN3mPNZdA==');
define('SECURE_AUTH_KEY',  'W0T7c6Z/Bs3UBSWB7nXarDXUjIhA00fTW0cgexYR6cdFKNLaK9eXRQLYtExBlCXNZvC3hpqR9+Y5cIyPbuoJNw==');
define('LOGGED_IN_KEY',    '6EHen3q6MXxFkfpx7Qape1QJszw7aWufgi69ej5FOsc8i5197BisGk/Mw8mkQW+b8hsJjZKUhSBo8CpFKHmcpA==');
define('NONCE_KEY',        'Y05n8UzbP6qLZnIECruNbhh0rv6irCnX9CUYZWqK7qTDkkCLZ7sMkqGLfHqT91Sknzp04vXl3MTIOqZEVfveYg==');
define('AUTH_SALT',        'X8peluOkx3LtTMQIcAQu4ivtQ3DpljAXO3f3cjht7wzvetLovedjp+xEaagdmSnWD0CrqjbtkDE32itO4bozFw==');
define('SECURE_AUTH_SALT', 's50bfpPg8nusU+xltgWJ+CKn2vH2tbzZByJXcdeVX+biuvIrPcDuOY7wlwiSTaQ5J+fYo5dNQ4aiOgDTTMVfvQ==');
define('LOGGED_IN_SALT',   'AwBUU49m5TJ9RDCgDWFk0DPpJenxIYtKp7m3kAQHOchkd2JMrAx7ntOWIC5+ekyT+P4cH4nECwVBQbH6XCEhJg==');
define('NONCE_SALT',       'OgGQWNwzq0ozqPM8PgsXQa2NkkMh3Kh4VngMTxDGuZM6wmA/XwjAmN25QMor1B3YqlOyHeAyb2rnM2qycxKEHA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
