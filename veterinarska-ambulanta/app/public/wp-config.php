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
define('AUTH_KEY',         'mWYgfTLeaGt80aafw+7hP2FT+Sv3gRzdqvwXuIjuqG+srTadq5FXWSLmy1L311f6eRkZNCMuRrH9WiCaZtuI4Q==');
define('SECURE_AUTH_KEY',  'wo9QZM5pY5rogI+fNfgrDtrH4iXuP5s6YVhy3y0viAjblFxxEjVIY0Ut44exxZ4MJgPPF55y+e9W8dntCNL0fg==');
define('LOGGED_IN_KEY',    '8TpWeAk0rFsYrBkIQuVw2g7h19vtXHElr8XHvTUpYlAPTxWGbemDrtDde6a1NwuINq0VDpthVtMeUbz/lF4r9g==');
define('NONCE_KEY',        'zfxLu0a5BEp5y+L0XPPDZsRHuFma+oTNBNWNj3xXfeSmRCefQIgeC91cnmxgdvfV2iij8e03YK+jX4cNyK0SsQ==');
define('AUTH_SALT',        'dX2YrOTr4qMXnyVULzg17x66pZB5IZdlyjNKHhgHnfyObFdHLdN2BUcenK2v7kNVZ+2g5ank+gJdxL3S2UavIg==');
define('SECURE_AUTH_SALT', 'spnTCB9o8ccOBgf9cN/bVhNi+6GnbkulQX5flIMXitm2QJaBFc7BHQe3NkWEvdR+ZFUEKjv8yMgd95mVJC1bNQ==');
define('LOGGED_IN_SALT',   'R44zW6rbBFLOyoBNB0c+9LYxdHGdJxOhh4FsE2xx1TNWWmjwRM3hmO14LgZLvsWh+210RWdJ3kSEowCcmKVCIQ==');
define('NONCE_SALT',       '94Oom3heoKqVOMcseu5tm4W1rZs/cZZInubNl05/GKzVRKw7VUN+8vaKLnjFZBN2R0YQPOmkHcsSt7BgD8yE7w==');

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
