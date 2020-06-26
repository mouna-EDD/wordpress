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
define( 'DB_NAME', 'myshop' );

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
define( 'AUTH_KEY',         'IsT  T@4sqK?+f-%+h-.lfeh-.r/_JGYEBgTFA6Vk>|?X0m2w7n:lfvPH[^+nDa}' );
define( 'SECURE_AUTH_KEY',  'tcAjTgA</lUF{!5gGsQJtY7SY(BE:`G&T@+Wj7Zv`%^h+J<T]cr964c{k~U)gtgu' );
define( 'LOGGED_IN_KEY',    '^yz<cF?Cux/*+4Roo({E!37=$-(1T#{KR*|2|yT5n9?Gx@D+r&}W&Vq^%2&&X!pO' );
define( 'NONCE_KEY',        'a[e(o6s[S_ajKp3$@?ZkCL)ZfdppBGTSf%Ah@B`3ch|AY.Kao8x;hi;l&6umP%90' );
define( 'AUTH_SALT',        '`WA.z? T|_<t9Bt.D-< wJTvXvRr/kW[xs:X`]JARYk!=&o/HVHQvA~k:{V~p^;j' );
define( 'SECURE_AUTH_SALT', 'DfmF9}rb1wR$n/9V/Bmia17j r5*)XT17Uv>*g:X nd}O:XP(:5qnY/eV}fVM83O' );
define( 'LOGGED_IN_SALT',   '!%0#J)5q,1tzF/lE1~wGhzaEZswK], IaaG[v~kEMT>jT_=w[6%VW XMT/!#}zja' );
define( 'NONCE_SALT',       'Xq~_&j}F2Rp j8f)sR7xItPQ]&M;QSBsJ?=#yrH%Nbq9v_P^8N}2CGzM>Q2[;l=(' );

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
