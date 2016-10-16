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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'TooTopia');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']h8Xqr>,%h$vru(& t=1XC^|w[4$UDBc?YG;+#MNXx?Xv05|-xTk!;(Y4+s)ei=u');
define('SECURE_AUTH_KEY',  'kqMVP+,D|+/15{Dt1{1j[-VhY8>{!ebyn0*vS(t+Y.zpR9-Gk#N4%LxpJ@|*s)P:');
define('LOGGED_IN_KEY',    'nbyQ|DRh}2Q<lamzNRMLakMozT nL(JyH@+{P7oC&9;-uZqYu/+2-|{oxbe![*MF');
define('NONCE_KEY',        'h52ZL2Hg~)fIC5]#Qf1-e _?T,@g_{kKtDbe-ET}V*1<HGjjvk YI6n5-.OVZ?]v');
define('AUTH_SALT',        'RUwt#$!RMX.6;0RzdZGK(u).k3XjHEU5JPsy9%],/#<RQLMEdu8Ol7}O<X}~)5L|');
define('SECURE_AUTH_SALT', 'Q0K+sAYov>/j-5^,*K5C&<T:24tg>GQKv^mv]zd|9IYnm_c{@Il=Kgnd|R^EUkem');
define('LOGGED_IN_SALT',   'YTgz~r%+fMd6bi?-25n3ODyS{#li9x:!V(|S9hH/0@:ihzt+l8gontj6^QUzt[or');
define('NONCE_SALT',       'e?+t4x.T8^Y9W# ;@#j=aW$IaEgtk:f%{/~]1,Y5r!mXqwSR5+Nr%M4;N9;,W{y+');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(TooTopia.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
