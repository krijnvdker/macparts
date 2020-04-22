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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_macparts' );

/** MySQL database username */
define( 'DB_USER', 'krijnlocal' ); // THUIS
// define( 'DB_USER', 'krijn' ); // WERK

/** MySQL database password */
define( 'DB_PASSWORD', 'krijn1234' ); // THUIS
// define( 'DB_PASSWORD', 'localhosttest' ); // WERK

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tX}`>c9|m4%lu3RwsTY=!E2$:ncBv[yw{0-0UYA>vUMVh4]^Z+w%9|HoFVh$4204' );
define( 'SECURE_AUTH_KEY',  'G,qbr<x20|351Gr=xw#{N3vqp%1x{|0^vIi`L?@~bkPIp$~jC1JS9a>P;19Zn>q ' );
define( 'LOGGED_IN_KEY',    'uou<Juy|3$7GH@,CC&#YG;i:O:(^qwd?<c55%Kf2mGz|=TUx:7HUk?W+-(APq3}S' );
define( 'NONCE_KEY',        ':B72|%F&jwK~,+Pl%=O;jt9U@&-A^UihXFG|LmNIhi]?,);roLek?ns9le}AZtek' );
define( 'AUTH_SALT',        ';`8wvLm>3QK`(`G&E7re>P+DaxcFt.T(uzya)Es&e98}gad^9FRA5n:cy-r|H@3V' );
define( 'SECURE_AUTH_SALT', 'Px%ogw] [jQBWZGA[j~.8grv,ZtQ1b4EqJ}?n(uDX5yG]lvv7w1LvE]FW*7ly+^k' );
define( 'LOGGED_IN_SALT',   'MV#ag82-WwvL CE~MsXf7i2#{` |:Fo1S?dH.]E0gD;05`HF=[;bFhj*]/2:{;Y:' );
define( 'NONCE_SALT',       '/}^~`.=NA& 8.A/8MkWf|63TL~#C&0^WeoEyufkw^eq?FZ0WZkza#!e~!l$tTFYx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
