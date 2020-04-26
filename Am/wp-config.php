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
define( 'DB_NAME', 'amdb' );

/** MySQL database username */
define( 'DB_USER', 'ephi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mgeLndmC@06' );

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
define( 'AUTH_KEY',         '|FTrDw8G>bYw%1J)Io.H3sQK;1?f7@.lMzmcxNU~>0j)SuZs+cdx~A/qwLdOzkDD' );
define( 'SECURE_AUTH_KEY',  '^`q@O=!aO n/~J^p4iKrCkOm6)*rchN>^82K9ufMN8/IGlMr&:XpyOsVGYCmyyw[' );
define( 'LOGGED_IN_KEY',    '`nV7dEZfP&/Fp(g&9M7Ypl5{b=FYEUtqZ/^X@Cx5V5$.q|u~cl/,9TXo`m%XU- w' );
define( 'NONCE_KEY',        'NdtR<tm8N1|X{C3*Hc$khA]MUg}3VsWu/@;FOiyo{:eZVb%rrF(@SROE}b*V;i@ ' );
define( 'AUTH_SALT',        '|$.} xQxCy{IXC>gm|OgGk^Q^9(YVtKQ:dm08xT?;,^?{FK}mTPx:$@!6=&wT`d ' );
define( 'SECURE_AUTH_SALT', '#.!a3Ji/L7R_{6[s._6iWdg>!E<nF_{ZY]rDXSW`=7tNfYDm~H%=V/2)Z^f_SI~l' );
define( 'LOGGED_IN_SALT',   'Qige%bLvQnsgK[p[,2{ZmvQea*AQBgj&P5$|EUfP)w#bs@UEGpuWLXG=#MqLz!UZ' );
define( 'NONCE_SALT',       'moSwWY|Tt[lu  _>RFq=fFl5-6m0$[.~5j:o1X@u)mc})3KPiqfiNYd=V6${8rX~' );

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
