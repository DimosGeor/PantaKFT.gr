<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', '***' );

/** Database username */
define( 'DB_USER', '****' );

/** Database password */
define( 'DB_PASSWORD', '***' );

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
define( 'AUTH_KEY',         'gfqugljg2datzbgcu6abi3rx9fpdi48xuaisb9l29nbqo9gkmneecoa19oymivls' );
define( 'SECURE_AUTH_KEY',  'semmmn2cxum0nyz2moipn1wer1nftknzstojys8gvnwbnyk9gxpjusdnaiungrok' );
define( 'LOGGED_IN_KEY',    'eu7mtqr1laxuoizvb5ljg0fv7yl4dxkladqwa9qynl0yr3ocdofpnhhi3riftmzj' );
define( 'NONCE_KEY',        '8spde0k1sikj3ucs6wbyig9zlsxhinlbc9xzfhtyxkrimfpfspzfuhpvkmubg9ze' );
define( 'AUTH_SALT',        'jkshu4iuzxql5fpsmk1dw2dfdzrgwhrlevlwjcacjn9qhic5jpdwpto17iadaqvk' );
define( 'SECURE_AUTH_SALT', 'aywisezqcdkwucnfkiqglotfmwzmxhkngarauuabtfjlfu3ps0b5je5fdjz59zrw' );
define( 'LOGGED_IN_SALT',   'eswrx5fy4nxthphw0pcvhsrwfb2mykqk5kflfg4m8ywzvgi5muowvhivbp8d5jq8' );
define( 'NONCE_SALT',       'hejuq8emv7pnw25p7a3zgdq7uxh41vjlwankwajm33unl3vt3gtzhboytwcrwhk7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnx_';

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
