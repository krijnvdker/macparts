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
define( 'DB_USER', 'krijn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'localhosttest' );

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
define( 'AUTH_KEY',         'kP5M@o#wJ22R(JYhU(d_1CmWQ 01nnY#pl#peD;fnfT$Ra<f^;hMQ|%ADTEz2[MK' );
define( 'SECURE_AUTH_KEY',  '`>FURC;]~:P79Zg5kHqBq 3A%7^JWim%tqZ7V|wHkeHF[iwb-#?^>YNfV@O wJ$e' );
define( 'LOGGED_IN_KEY',    ' 1KOeq3wDDC,H%[1YH3L>^n-.ftsC21qcDi:Ph>&J`=Np(,._r$Iq$WkzQl%d wH' );
define( 'NONCE_KEY',        'X]`R1pH0rp%)`8X-u{Ov0M-=--$yhl5!W/h1L2orYc=m-yt-I_(1X&R!$?O>m{>S' );
define( 'AUTH_SALT',        '3%xem(IX{>*0w/ca0d1w25T?Nf_3jk)|]75+h|Z9P0#^)rKVOB!:wF9pr-jU&&U0' );
define( 'SECURE_AUTH_SALT', '~/7zdm=*:PQ~rOJRt|tVw8QZ}>wtDl|hpKs?Wt5S*?~N(sGd[)XRN >:9z6C3uBZ' );
define( 'LOGGED_IN_SALT',   'vPT+VI[F>HYLB]Y<PsQ;hJx[:fF.{FGGm,C3<{zK;Tyz]0R3Ynp>Bu<9A_{3Tt{`' );
define( 'NONCE_SALT',       'h9W_u<@4X5Jz D0Am-Ctm0k0ScwG1gRtD*BxmwCoK2&K#P2J4n3XhUNsm@8riDku' );

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
