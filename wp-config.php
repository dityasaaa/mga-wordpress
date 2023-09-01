<?php
define( 'WP_CACHE', true );

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dity7623_wp752' );

/** Database username */
define( 'DB_USER', 'dity7623_wp752' );

/** Database password */
define( 'DB_PASSWORD', '(pa4[8Sm31' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'oacnowcnxdcuokar01druidvvri2fznsybau6hn4z8qbv5thq8xn334mqaa4nsej' );
define( 'SECURE_AUTH_KEY',  'on99nmyshfeddgvzea5a2v2pedtqo8uomrhfbgzb3agfrbz8hshl69jwncjbzsli' );
define( 'LOGGED_IN_KEY',    'vaqhrwxu9v7f5apjiyeih47yb18xphaog5ezo7mo722jxntrtzpceuwwdzgrdewq' );
define( 'NONCE_KEY',        'qt2elbg0y6l56o3rfg2nfnkmbzclouy0exvxbmbwmgh4zrc6uc1khgxzaegzgfit' );
define( 'AUTH_SALT',        'fv9cucdocr827zqbmz0ef2l0uk87yrgs6igcyupybz1v08qfwr90q5dyfiv3m9o5' );
define( 'SECURE_AUTH_SALT', '9bsizlxynbu1ieh99kish7zu3bcqjvv0z8oorybdqeooshwb7glns4v0wbgzkuu9' );
define( 'LOGGED_IN_SALT',   '0bwgzvcoqkxjbh7pcg8itmnbmyqrgwxtx24gt5tsdxntp1dhcqiys2zbbinviwax' );
define( 'NONCE_SALT',       'b0cffdjaslgea9aq3k1mtqbibdobvdrzh40jz5cvz6srrkkvotmwutqg3noa6bfy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
