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
define('DB_NAME', 'prettycleanwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'qiy<60$*-aLl#eVk3W8dq/S.?%=t1Y>sPM4 =yoO]Mr?R(-4b&BYfXF,V[H.f9Da');
define('SECURE_AUTH_KEY',  'Ww KSvJiN]Mitvhp6/siz|MEBP:cHFuz+/n5/#g7(?52a1Y?YebVt0(CHB6cS]Sd');
define('LOGGED_IN_KEY',    '<6_(hp1YX05fBL )pSV2117;Dl?q?98;r4?p?j`ca}Is&^8$T>LHxc_&Mf1!elP4');
define('NONCE_KEY',        'Kcx=($C}*ccK&Jq+9z]nK//VeOf,<~,.Ze,p5UsNc)p9Ex.}d#sJ!!qpn+8N3`^.');
define('AUTH_SALT',        ':RM5cF |]a<7+E{^s?Fcm1FN }})9[Tzv=FR.c)7bPw(V$`%x<ic.l]_HAA4Iw=?');
define('SECURE_AUTH_SALT', '-yqN#9=2m:*|&Iru+NSm@WD{/.Lyo c<+_J[>q;UEiKt%oI>&hbr#!<~1Qv8FDD3');
define('LOGGED_IN_SALT',   'Uul!eu.T|C6&4wn1aV1+!oIq=MKz37oaR$*mPVh6{3}luL`PEtf*T@Yjb0I:)oqY');
define('NONCE_SALT',       'zo,+OQIi`I~e1;n-H5bpWm(D5q.N{w+mD#n(w{:#px;l>0i`5CxqzC|oSvWZ]i8,');

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
