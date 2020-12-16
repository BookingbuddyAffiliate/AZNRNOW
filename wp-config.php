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
define( 'DB_NAME', 'aznrn_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Smarter1' );

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
define( 'AUTH_KEY',         '6?5b2=.y1`*%%SC%j/kMcX-&Q?0l{3N5&vBV$YkW@8uelOmsvp_Cz/`~[@@6G yU' );
define( 'SECURE_AUTH_KEY',  'VEG7c*YN0E0<:1yrYDTf 9,KGwSvy/2k8MDx?tV<>TL&&)m~wukL&2r1}QHz]tv*' );
define( 'LOGGED_IN_KEY',    '6MQF;:_19:p9v-X8}7n!esmXK+T+x(f/Uj+E]v{n]:kWaA,6gcpe7EJOL5:SDZ)E' );
define( 'NONCE_KEY',        'U8u9W|Ys,c3rRdl4R?OC[d81DJ.W WivD!=dH!6{d?w_2Z&qZ8PdZp0^;2Q!N8i0' );
define( 'AUTH_SALT',        'o6NUYV`U0@ZUZnG(B0tL(mXq}Ydw^0)lPAIaU{+-z7vtXGO:%Tpm,O{&I(]=q01w' );
define( 'SECURE_AUTH_SALT', '7gmjJKj*#(jkRr6>cz;F<BXD4^L`4h!360GwT1uNS@zN%}#Oh A{E2YH+nfGd9yA' );
define( 'LOGGED_IN_SALT',   'bXieP{dx2Z=ga`=T(:i)1QCx*@?7OU{7ANW(c&k%o;-7}pzj845&qN6ds(fA@<;&' );
define( 'NONCE_SALT',       'P|uD2sLyk4gh^6t4)y5ZsXA*=L:SC[h81uY&Mkhy4}G`+]gw0N! J0yS[P0x?#@s' );

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
