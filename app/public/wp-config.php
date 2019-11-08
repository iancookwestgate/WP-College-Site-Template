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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ph5fHlvBzp57eB0mLfKQE/UOFVQnR+Lm68KkZb8TTMbqbBNt5XjDyZ6vjoZpz/yInayH3zMIXVzqzycTyit1SA==');
define('SECURE_AUTH_KEY',  'iqvJbSEH9Yy8/rjwoUrjuGhnGIxyl68oQohsmBHCjd4ugqgc7uMhS3aW2XazrKWckmV6quAbgqfOI0jZ+k5YEA==');
define('LOGGED_IN_KEY',    'ZkwvzIXZoJrUtk2f5GlAqG0hvQzZFAaFODdzagXUIA0zenji5RYV/o3R9KYhIq3htEYHNrS79J1kbhwIkYLEVQ==');
define('NONCE_KEY',        'rRDhXJvBabOqGwkVlzmSu76qKif8oU9b63mtd3o3SOgFD99gcnH1cQvshNw23cgFo8xiT1szZI44PR7DbMM52w==');
define('AUTH_SALT',        'NZUTRZ72vb2kFL37lesKwB2/kO0dCtpGs41d2XHCb8S2xHHhSg8uiNc48amaMbTtmcy2r0pHcPlp89UIdbaIwQ==');
define('SECURE_AUTH_SALT', 'xYaviL+iBCmLKZoIYA1WKT7H438Wqkryl7jndjFt5OZvYOIbAoLu7npbtWQWmSb13Ejpl70D89GjBRPJzG+muQ==');
define('LOGGED_IN_SALT',   'n9ZnVHhjhsIdOtS1YhqZ7c7LmFd4nQrAUQmHa3y+JhbjZ7e8T1B8OzvjUMaMptN7se0RHGcry3PbctMs9oteqg==');
define('NONCE_SALT',       'dRfw6AOwEP8VtIVjKjrD6dmVBX7BSox5sKWQo8WrjrEGnlBk24Ev0yKWlIDShh6cgEXWwfk+QH1pInhZEOWm9w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
