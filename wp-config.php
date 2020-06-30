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
define( 'DB_NAME', 'wp_curso' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|{S2i:rHDZ<h1 S]2olN/*Ij5QFyB~uNKEkMX@d{:a!]6H9M?B<Jcp1Qaj!x;izN' );
define( 'SECURE_AUTH_KEY',  'JT>xOQMqxZ,*$GYO}6}7s;-N~Pu?aRD6Xy[o s9S%q^O&f:|Cc2:?SmGxy|VDl,$' );
define( 'LOGGED_IN_KEY',    'Zt59bpbC7y7p*B~y?h10F0Y)&zCx9}i*nP01dj]stk7v=K]mM|p)0@np{l,x6Utl' );
define( 'NONCE_KEY',        '-Ds-wqZ8J9cx]{t1P64wN8Pm,=Sul|lnokOCdT2<~=xRmloO]:)Q#03]BNkFTj@4' );
define( 'AUTH_SALT',        'InZcM|mtItocl=uZ:SpFZ*_C3]HIB$;pOae~<u[6B=2T*=M+gl&g%u:9 jd}v@5{' );
define( 'SECURE_AUTH_SALT', 'uD?C(2?J=g89SI3lm,XXxhU3M}$u9=!z{^Y*`An9pLT7{K(dj;E<C8=Jf/-9sM~v' );
define( 'LOGGED_IN_SALT',   'gFAULbJi4!p91aC4@d0V=x~MuC0817.odDoBZ }gy6M7ZBi46kJAZ!]r7K]^P<9#' );
define( 'NONCE_SALT',       'poHQyU{68nehmn)|y(RC( OBb6,tQ`f<<rBQFT%8t$zeyvkgK%Ue4M+S6c%CT:I8' );

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
