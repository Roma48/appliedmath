<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u587724855_geek');

/** MySQL database username */
define('DB_USER', 'u587724855_root');

/** MySQL database password */
define('DB_PASSWORD', 'geekhub');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         '3=wwID2]T{;n<Xc!+IF5-ATr+k#$jt1|3HcDEh((+,:BT#VDSWsRTL,_=Dt^hn5&');
define('SECURE_AUTH_KEY',  'W@R#=?@dN_>B<l:1wy%w+2krqcg[95dv:eK26~v8ud[G{jn6PU+P+4g1n95xlE0>');
define('LOGGED_IN_KEY',    'vodA2!/A)/B7jDi#<>Zpl@}*UsT(S0p_<&>i(&{LD#MjbWX[uH&G+0&o<TjT[8eH');
define('NONCE_KEY',        'F!L+r7_$?-d18t,~t/JGg47IlPPUQjh/]]&>1roClO!=b@]<nqPhAnE}B6zkNo>E');
define('AUTH_SALT',        'r)q1G=t;*Gyg9XRo?cqrQ?>/`yFD! (]+qtSXL.g]C+`DXi?F//q-sYmh$avBG5-');
define('SECURE_AUTH_SALT', 'mhbstg`h$$<tJ8]wP;%fTAz2JC9^-@SRz^V?,.+[rNRrV)noM!qayfuFbhHkgTxo');
define('LOGGED_IN_SALT',   'ML5scwpLo`]Y>h}CRRz%%=00U>JF$<oL-0Vdp1Ka$!rl[*LlCJj>Cm#s`ag6?+U:');
define('NONCE_SALT',       '`M^Iu%`@_h!PWfh&HW!E}GJl#Mi2RnX>=p:T?@uf48E3yxD{9:`SBN[@z8N)ycsw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

