<?php
/* Path to the WordPress codebase you'd like to test. Add a backslash in the end. */

define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );

define( 'DB_NAME', 'wordpress_test' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'WPLANG', '' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );
define( 'WP_TESTS_NETWORK_TITLE', 'Test Network' );
define( 'WP_TESTS_SUBDOMAIN_INSTALL', true );
$base = '/';

define( 'WP_MEMORY_LIMIT', '64M' );

/* Cron tries to make an HTTP request to the blog, which always fails, because tests are run in CLI mode only */
define( 'DISABLE_WP_CRON', true );

define( 'WP_ALLOW_MULTISITE', (bool) getenv( 'WP_MULTISITE' ) );

if ( WP_ALLOW_MULTISITE ) {
	define( 'WP_TESTS_BLOGS', 'first,second,third,fourth' );
}

if ( WP_ALLOW_MULTISITE && !defined('WP_INSTALLING') ) {
	define( 'SUBDOMAIN_INSTALL', WP_TESTS_SUBDOMAIN_INSTALL );
	define( 'MULTISITE', true );
	define( 'DOMAIN_CURRENT_SITE', WP_TESTS_DOMAIN );
	define( 'PATH_CURRENT_SITE', '/' );
	define( 'SITE_ID_CURRENT_SITE', 1);
	define( 'BLOG_ID_CURRENT_SITE', 1);
	//define( 'SUNRISE', TRUE );
}

$table_prefix  = 'wp_';
