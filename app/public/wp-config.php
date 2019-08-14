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
define('AUTH_KEY',         'pxXA/M0L4In9igvJOjELZRU6viU82nETZgJZtI8dBYdLTF+YOdzxnTvUfhO3arVNuGU4VWz0nkIXrCEl8xwY5w==');
define('SECURE_AUTH_KEY',  'wgwj/1rCwPyjH1719eaz2Z0CHq6VYJd5O0VTcsC54RItoPFvGQQE8W7e+Be8y20XLx1oQYe5ymOOUsOup6gnHg==');
define('LOGGED_IN_KEY',    'iNoq5L7j/oQ7vhJPrzRejQ4ALob1T8AJ9+3iuUghVcZFKfKtM1BvrbZ3w1mSRNAjZ3h4O1sgMlNIhZ+aBRfFOQ==');
define('NONCE_KEY',        'HBMJn+uRyxV7suZpGSzfYoF2d9oSOck1CRxRihAgt4JWgzD++6o2jTg283m0jYzVRBrUlmE/IQgjsEnmKySDMQ==');
define('AUTH_SALT',        'cwnbGLX53yDbc4HuqGRHSJkCpTddDCWwKcnlFunCYtnoWh0OD1UwxcVt+Y8oODm4561vnNhYa75gl/3CySKhdw==');
define('SECURE_AUTH_SALT', 'eTUPB3nZhWSFUJgPNWdnn49nzUK8gvMa+yVtGPrc5ZgwpWN2wzTLZPDuCB6a81Z1hSUJeDdXMKceOJokVdw1+Q==');
define('LOGGED_IN_SALT',   'I2ICvyVf9ZQf5ZlqTa9xbucQW6kv6KqRzVC1uixNlGxcEHYObfIqa2oJesexqMOjoHTzkue52zWXN5pX/BnhLA==');
define('NONCE_SALT',       'qkpK6l7z8qBR6lO32D5UcyhPVhi0A9YeXegwcVxAjtm+s2ZfErD/yzjwq4seVDWaoZXy00+nqy7hKYmB0WiUYg==');

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
