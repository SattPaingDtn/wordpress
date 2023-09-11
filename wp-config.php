<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'oAttOLwfDOKC68D8/sh8Bs5peeRssJIF+Kilrz9rPbhLFQP6rXqrrA6FZRpFKYUAzl/s3wQo+M226lHns/PaDg==');
define('SECURE_AUTH_KEY',  'KBp7bnEJdjGn5h/hhE4Ugf7aEjWgAPpUqTbTNdWCa0OEDXSXDKyM1JZZGfyraPrEDh62m3O7Em/mL8SJDILRzQ==');
define('LOGGED_IN_KEY',    'a3A2u6BOZ9r5nEgmhIhMezQkYQIlXhyojDJUxkJY2ANNt+uk0LVSMFvtj/setDITJOjrrVDvENBa0FhlG1+15A==');
define('NONCE_KEY',        '4vQha0QEBac4gDnW7+8addNhaS3x9VeORp8UcfXRWwf2qZHutF0kw/wHvNB7sn3u8lWKZnoQ0NYprRhz0h09gw==');
define('AUTH_SALT',        'iYxS72sX5o9Sa3UltPaZ0NT715MsO1oETYaCKxWkR9IBfG16Z9P0xxoPCFoa6AmEJPCbEIrSz01nn+AdDa3CdQ==');
define('SECURE_AUTH_SALT', 'nHuZMupN6hJ+Dl4syMF4jHRKhZ2aMhLJgVkkUGYmZCkt1gB31MK4pQrTd0uPwh7M2ibRnpwE8OkFNvf8CvGdIQ==');
define('LOGGED_IN_SALT',   'siGWGBmBgLHh0Sj+THJHoKoNzvXTPFppMcGGYgDOsYtfWbXrr+SfdmM4VhenFHQ/cEauEg1OhS5kdXwbJD1CEA==');
define('NONCE_SALT',       'IhMUND1a+QZ8QvxKUO4LSTba5Rf0zJB3XmlLCtyNC2LFOP/pq4kExkPHANMoX/8kvJVK/XOGOnbkesXRc5RLJg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
