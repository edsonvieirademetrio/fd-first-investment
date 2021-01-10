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
define('AUTH_KEY',         'wukV1aUIIzrFIZSjAT29TFAw6vPzwf3BHrI9HP/3xkJ7NlGi6NNEUEDuQO5AwdYY+QmEMEufSmwfgYsGV8sykg==');
define('SECURE_AUTH_KEY',  'lCXjtZ4Y1pOoz4+uw9N4oRDKnjQng0yvSXGwEwxiLfl+FhvsohpJxYuxzoZvgnoijfNsWi0Q0XJlD4Wzgj0GbA==');
define('LOGGED_IN_KEY',    'JO0AY4frDDG4Wj2kbTdRRxY/MtJuFnGv2qj6v+fTQO4OJPe0g3or+D+521dilMo8nJQor14YgnI/PdKOqH13/g==');
define('NONCE_KEY',        'EA86DqERgYMrX8zPNzarKpDpAo2k+c/TlYrFdfKgFlB7yDClwPAmdZJi0MakScwYQzvyCET4Zc+HwlAyFO7/Vg==');
define('AUTH_SALT',        'Vu7lym6tjwwqrA7GCgz+n+qRrBhcW0bJnLmrVjP1/loSEO59gu34g1dhGKyBZebF++YBB/vyERXofMUKzazsEw==');
define('SECURE_AUTH_SALT', '7pEmHBxVw7YqXBBoky0sRU110sd0KAbdVtDrW4tnpfJX3mwEPBx0YJ34zlc0LZXY1cVeAM6CIPNRb+2BSCE3pQ==');
define('LOGGED_IN_SALT',   'U+E2+4aoT4CXGjOVly2+XcmRhvNRP7NY+dqvLjjuJ2veE+hPhvoR20OWGhskF+Qn7yznVyAavkuHzRBGotUa3Q==');
define('NONCE_SALT',       'Fld6EAgm5cMG6caLon+eYLOywfR9osQGCCDwzWF7nnsp8hq63DJ9IhXv0SYYY31KjjucqcesqXICySRRnSmO6Q==');

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
