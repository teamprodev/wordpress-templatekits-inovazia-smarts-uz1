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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_h8th0lyxnYq_RQo/6hsocH}[!9Wcpl8:+ISm3of`Nm_no86P:0mW,~v._x*{gG*' );
define( 'SECURE_AUTH_KEY',  'p,[jG|ehG8aB]TVonW86m|6LXIYa!<=sNp(f,gRwzF%m*T=5P%@p]8v6erL|VI)5' );
define( 'LOGGED_IN_KEY',    'yHSpjEsDHNc74E>K5&By2+gCDSud3?fCDUp>dI2L.M_`i;4~WEq~9b_(RXs$9DU?' );
define( 'NONCE_KEY',        'DKhk6&<E+yjK|5-*Ksw.tCl#p_}gq^Z<)?F)wh|J JJw)E;4HZ$B]h>p.u,CtoE-' );
define( 'AUTH_SALT',        'H$$lO3q}4rPk;,n*V~@[:(}h(yj33Yi.jrCeT]_*jOj50n9jgovaQ9KNFG5%~Ez[' );
define( 'SECURE_AUTH_SALT', 'qbkYJJw$S8d+.SSE!n>?794m=138j:n$9vZkZpJ1x ~BjtKUTfW3V^5Ud?<O!h=i' );
define( 'LOGGED_IN_SALT',   '*Hs $*(CdsIZO:Ju#@ .6Yco~T1S[ 70!rLDTEL[8iYZ~$&BNl=[!xxg0r8ws#a>' );
define( 'NONCE_SALT',       'iqX:xwk^R{TtLwEptBfjl88Ca:3=OP(wSL*.!svRv:%4zloK2MUA|N{YF.8c%E(7' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
