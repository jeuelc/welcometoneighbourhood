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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_welcomeneighbour');

/** MySQL database username */
define('DB_USER', 'ops');

/** MySQL database password */
define('DB_PASSWORD', '9Vz7tW5B$54*23y^2Sy');

/** MySQL hostname */
define('DB_HOST', 'db.dev-stg.adapptify.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9aYAre7}adhE](^yzb8dq!/enibhB-T,n.gp.d{1 M ~?SuQ@~J/uknVQ(w~3X8#');
define('SECURE_AUTH_KEY',  'MBc>`kmo5#Kb$?NZA/XoA:m)BBI2Ac#hb2CKDW>B0qo(w;(bTMlc.B)&?0;lJaFS');
define('LOGGED_IN_KEY',    ':oJFN+TE`R6;yDgzTXN8$91ooTmwi[ )5DtLNL[h?;:uX|!il$g2CJ3&FN3?m=A&');
define('NONCE_KEY',        '<D0VAKMPl7t5pkn^x=NM@Nz4[ggIhyT*}kX[^5O*&R/QC;NyfQ%7R|A.e7h9qk3d');
define('AUTH_SALT',        '@1ahUt7Jh wZ$B+iw1$rWYPK:%?I6Kiw]z*@fo)gw3$|3GHp`Sie]>QcA%$gZ60D');
define('SECURE_AUTH_SALT', 'n.7ZIi;[zw6e=o+.Idgr/Z^8 ,jJ95kbNC(7q}9o`_(M;z/m-y!{bE9jwo5m^M_$');
define('LOGGED_IN_SALT',   '4U1[FcF^>(6 & !|Df6N-{0LUjs8s!RTV[fPGWw02`fC-3LUY^l&0z6MP[t s*IR');
define('NONCE_SALT',       '#9NMEh3^S!ZFf|.[V.bAY95K?f]=PVt!/vfq@J$-nKg~fw6iL-Qpy,[`$s?[;Y ~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
