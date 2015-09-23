<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'foundry6_awblog');

/** MySQL database username */
define('DB_USER', 'foundry6_awblog');

/** MySQL database password */
define('DB_PASSWORD', 'feaTher2*%');

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
define('AUTH_KEY',         'ENy1JEJqju|t_m&5)&n>x0HeMU:f+)Y[:XaXn~Y;|E6>(pOTGspA;&[c4]D1z<.Y');
define('SECURE_AUTH_KEY',  '-w 1f=1G4q;OI|1B(iy8%({M.*$A2p J-7c:j-).qLid1tWp|fiPJ=Gm-`t13S(b');
define('LOGGED_IN_KEY',    '$Z@GMzQ*{+-+JF]G}3.8UjU6b$G)-ptQ5NxyBPVP7~-J! |gl]@YZ.uUtL=niJq|');
define('NONCE_KEY',        'M&f0x1_r&<>/oe`kRWbJ.GBWICTns8ot3:+C}8(J43:K^N-:Cme9ISlZ.FJy--.f');
define('AUTH_SALT',        'm-x -V,%0%?/T|(g8Qj*1msOU^p>a->ze-t6%e9_`By $spn9#RW%_AQv1U(O.`-');
define('SECURE_AUTH_SALT', 'Z1-](Yq%FO2Y]I;fV5J9,O*GGD~vqjE^zp4AL~vg-/MaEit.6c-|/b2lq)BR|*#f');
define('LOGGED_IN_SALT',   'oc+=Rh?v=zuP^GoNW5{A)h6mt! PcTO_%NT!PFU.!dy2C|r8H+$`8wdrculD(l-Q');
define('NONCE_SALT',       'a#bW[x3>uGU6P8n_- B<-ya_[AR.:$>?(w-FnH[s?HEi|IjykVJq]TM{?UJ4&f2y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpaw_';

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
