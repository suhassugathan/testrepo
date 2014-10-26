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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'db-user');

/** MySQL database password */
define('DB_PASSWORD', 'CdJsBHeMMO0zrPg');

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
define('AUTH_KEY',         ':[-L%1dbb%rH$u{rjjq@4#:eT`9uzi3nG|AGUbsw0viW=gMa}sn=?G|09k!3>/*3');
define('SECURE_AUTH_KEY',  'n|Qa<7l>[;ui2/-D&#(-qOlxAhRxf8ND:Ei%a|x*u[i{Z$m~p_+D.>yY%zORWA;:');
define('LOGGED_IN_KEY',    'a(APBSD,0,5SBu-C>6cM2n+aj6S*h{ApzWp+fP 7&dAvE pT5-rY>dW[&J4t)0I4');
define('NONCE_KEY',        '!-}Z=2bSR]=QpUz0P;RKYwc</X9#!([L@!va:n-5;z#K&,n])lA@$d$T|]ja6lki');
define('AUTH_SALT',        'B$dxw#C*W-v%-J[3NRj7pHIeSi+Tk1jZP5CZ,~[yXCb`kRn_?D+31s~%m59_QiK,');
define('SECURE_AUTH_SALT', 'zi-#VAAoV|v8nI+u=*FS1I:2aED.>V1%+l6l(q9,~X@_V1 AiE#44##=zW1w+1uQ');
define('LOGGED_IN_SALT',   '$Q45iTYa17eeR<11PN-X;JV/C6G*JGH=fkxi z}RvBQ>Z80t)&sT|Ls.EkB6+]LS');
define('NONCE_SALT',       ' pGB*Hi>-U}Bs6RZ7jl]{:Xr1XVhy%Z6L&7},7rk(|,3g-EF8@xDvb~#~5l^?N36');

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
