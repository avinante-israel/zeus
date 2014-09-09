<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_zeus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'oo.A@U.nE|t[^ n+k$yn(LDcE*w$>~tqo#/gw|!ZQ^1U/K){Ru}$T(2m><pRqHsL');
define('SECURE_AUTH_KEY',  '=(30H3t>lx^ymv$Kjh6MJg#~PZ0hAl}-Bx-m>^iA+6n8_Tw&M+a.Q]-3qyE@j|K#');
define('LOGGED_IN_KEY',    'jVsyV+`YoZa+@3~H)QCl*o<#}/:j.`u:+ZM8@}KHqIDP1PHv/iHqgG4U &aYY}.$');
define('NONCE_KEY',        'BH68@%oHQ6g4_`hdv~?Fi]DS>yJuAH@~@hLWFCq+)Z-nm>s-kwgwA+wh9DWK%4-$');
define('AUTH_SALT',        '+&6?IU),DK-(xv8/Upe;Pn^|s,r8+]F$7Lql2!1pvLl|$g0?|(~bL#5ZM+|ly_>v');
define('SECURE_AUTH_SALT', '414+GG(P?@Lk^08P8XsPxJf(i-@;2y|I.ddW3~YsSVW|5E`[Z3Ibka7Qp<8gzs*(');
define('LOGGED_IN_SALT',   '#1G%&+,x^dlqQZ</VTD^2$J6h[#wKA7/3`M?czjF-SWdkl6.x:}q^% ^9!|Qz>Az');
define('NONCE_SALT',       'Xt~|.7hkL@p;=^T5vIqhIn^:}* xXBH we[R+gE1C=CIe(e_ZObi+PFly5 T-V{8');

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
