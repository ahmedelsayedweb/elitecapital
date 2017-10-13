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
define('DB_NAME', 'elite');

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
define('AUTH_KEY',         ';W_%rD;%IXz?3C|2qZ.UEkn*$FK}VdSWeFfZ4d&b~u+3u3>UxCIAIM~pAAp*Y%yf');
define('SECURE_AUTH_KEY',  '}RmjoWmmZt&*nuM%Qk<8S3W/s3yP!67x~6&ZH+_P?u&BhZKe+*5P2#BXK`l`?!zn');
define('LOGGED_IN_KEY',    ':kDM5Zo;JY2fM$jrG!, +V/DK&UocpN*aer<5vFyj6&[/McOWVe_^Fj`Dhce59PV');
define('NONCE_KEY',        'RH<!.X.iQK}pU9nQBAS|=[c5[cm51:QAH9HuJq,$zP`=2v{@p%l~~I {`{KT$MF~');
define('AUTH_SALT',        'emUxJSq+nX%Ab]9zEN@Cdcd2:;tN;kvXGnL93N>k[i#soX`LKi@t627^R`t|kp$*');
define('SECURE_AUTH_SALT', 'ah^K$G]eY(IiU>cAE[<8(UNdR^;G0`B1#?VE=|Qnng1o$R2{GLnSw;ox!@oo9REN');
define('LOGGED_IN_SALT',   '-l/AvMK-^RL%o[e1Ljoo#n:}u1^w>Pa]Ql2-V>H^S[(BQy<Zfgw%]oP>jlB8X-O ');
define('NONCE_SALT',       'td2NB#R-;|= U+k Dfr2K?*AKtx@-2 NN}E=I~z2&=4a}$/U%cV$ 0m)C7@-XF`s');

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
