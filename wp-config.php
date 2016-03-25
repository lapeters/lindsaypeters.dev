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
define('DB_NAME', 'lindsaypDBorgxm');

/** MySQL database username */
define('DB_USER', 'lindsaypDBorgxm');

/** MySQL database password */
define('DB_PASSWORD', 'TZORF6O4wl');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ';TDA6miPiPL+xuqX6.{<yIEA6.jQMPM$yfqX{<y$nM73$cMQM3yjfQM$z^nB7,,^');
define('SECURE_AUTH_KEY',  '8:hSZG-whdO:~_sGC[]-aKO9tpaWS#x~l95##tH2L5liSPA*qtea.uIE;2.XTTAuq');
define('LOGGED_IN_KEY',    '~wh1!:-O958[pZWGDtpwdZ:-+xL1;1;h66#aLHE]qbeaH<xuqb{+;*PIEA6.XTXTE');
define('NONCE_KEY',        'Uznvc0}}zNJ474oURR8sovc0}@-kK484!VRO84lVoZ[-wwdC:1!~S8K5lOhS_tppW');
define('AUTH_SALT',        'zY}>0@RBC8|kVZVC!ookV|w[zK40:~dOVC8oZlSO~-_oC9|#_SD9D9taWWD_txhd1');
define('SECURE_AUTH_SALT', 'VowsC8[|_SC9C8pZVSO_pwtZ:[]xtH;H1heKLH+iplW#x.tDA].ue2*<xXEEA<bXf');
define('LOGGED_IN_SALT',   'q6<XIEC[dZcNJzkwd1:@!@R885!VSVGCsdpW[#w-lK51:-OKO95lWhO_tptdD;]#');
define('NONCE_SALT',       ']PPAuaiT2.*qmA<;{eLIIufiTP*q$n73^<.XEAB>bYbMI$jvf0^$,rFBB>cNJQ7@');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
