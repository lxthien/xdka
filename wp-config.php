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
define('DB_NAME', 'xaydungkimanh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'q,>_gs_jvW3h3H7SH9c=%2YT36,|g`Y[}]YB{DbZ!6YX5,t|oD[:]r@;Ik)bwc]!');
define('SECURE_AUTH_KEY',  'rKTbn!!_Z5?$SpQMftV<v:<q(BT+E>#gDZ=KT##RlNgwrJF9MBd.SiLJ3RdGl6t ');
define('LOGGED_IN_KEY',    'X(^BU((0?pHPI-4]*lz$eEv~A[=)CIok5S;?r+#{uc*[l R^jq&*i=QWf#W5Mcv[');
define('NONCE_KEY',        '!{/([Ow.V2B/Nu8k_-WSI_FGn+*K7]<|-49 <c0p0^k5Nkj7dtl&lkt18@Iy~Re}');
define('AUTH_SALT',        '9zlgTK(7PP]Pmz.~r GizJ)e#QLo#|#PHE%3//}yzM40sOmEw$):=@Oz Z:m^V6w');
define('SECURE_AUTH_SALT', 'g>PQ0=-FiLLjZ[9Q0C_{4|XIC69$s+6<JDPHy>Pfxo; |>F]AOF:KB}1t9>fi+el');
define('LOGGED_IN_SALT',   '|ox2]dAN#%0i.q[xhAAz@ OrE{K*$qs{~V2FJ?VbE,)f,;tWG09rg`It4)Ejqd%,');
define('NONCE_SALT',       '[~(9R-+AHGQ=C7)&f<9$s($uIPl+gzL.r/bP,X(.nZXN_JMW{ne%F!}*#z2JF%]U');

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
