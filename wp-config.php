<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings ** //
define( 'DB_NAME', '<mysql_database>' );
define( 'DB_USER', '<mysql_user>' );
define( 'DB_PASSWORD', '<mysql_password>' );
define( 'DB_HOST', '<mysql_host>' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Other WordPress settings
define( 'WP_DEBUG', false );
define( 'WP_POST_REVISIONS', 3 );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'FS_METHOD', 'direct' );

// Table prefix
$table_prefix = 'wp_';

// Authentication unique keys and salts
define( 'AUTH_KEY',         'your-unique-key' );
define( 'SECURE_AUTH_KEY',  'your-unique-key' );
define( 'LOGGED_IN_KEY',    'your-unique-key' );
define( 'NONCE_KEY',        'your-unique-key' );
define( 'AUTH_SALT',        'your-unique-key' );
define( 'SECURE_AUTH_SALT', 'your-unique-key' );
define( 'LOGGED_IN_SALT',   'your-unique-key' );
define( 'NONCE_SALT',       'your-unique-key' );

// Custom WordPress directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// Load additional settings if available
if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) {
    include( __DIR__ . '/wp-config-local.php' );
}

// Absolute path to the WordPress directory
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

// Sets up WordPress vars and included files
require_once( ABSPATH . 'wp-settings.php' );
