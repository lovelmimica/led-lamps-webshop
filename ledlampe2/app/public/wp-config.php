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
define('AUTH_KEY',         'U4bTeltMKOiKRMlgFA37OjqZa2FLzGImK3jsm33qjfY28ToSAGy4aTNmyjZDTHiyKYM8r2IyOtQsRi7h5XcR3w==');
define('SECURE_AUTH_KEY',  'uRR8CDqo4KzTusOuSw1FKlNwzQ8Hw+kyRWVqYkH4P5EotARLV6mnBN9T2KpPwMd/QsHPzfzSDOc4e6UPbynQ6A==');
define('LOGGED_IN_KEY',    'Wx1CKO++IfviCNUAKuZbKFVk3WM8nNHgukYEiRIIcse6GYlXCxQvoZrSANLgppJIwbg9gUZXe+S055qLop1szw==');
define('NONCE_KEY',        '75wLxRRkCVQbHZAmpcIOTesg3wrZcSrd8Tq8RD1jm6Ly5+Bwgaq8Xiry89Sa7YuuSReLSoCoa7yh4YYXSb1eAA==');
define('AUTH_SALT',        '6lQ4E/UQNoYx1BBLvyUwUdS4D2aPmyHxeKVCXkTFMCYdP5J+kPcUqQN4X+OY5kP/AeO1ZU1ufwOhos52gv1wcA==');
define('SECURE_AUTH_SALT', 'VWFuOPieYxIMvN3jHeopDttcCs2SBHWxVhkCcARXOCplrl0xHv6Ijx9z+bYBQkP7KmtIyDiAEdVXqdmsQxCBEA==');
define('LOGGED_IN_SALT',   '/0XUmRO0nrC3rC963wIPgXDOzfUmd4AGaj5Z9sdMfWL7gpq87nttKWijbNIwSMBhhKE+ZG9JK7cRumyobKZDeA==');
define('NONCE_SALT',       'bjYZYKMdmG0L6nktL9vpG7y2IwPo5/RP1r8LnfPCWpdbvLtU4Ij9MlG9+11QtFoIca29BwomN39gC+y5lfYGsA==');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
