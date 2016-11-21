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
define('DB_NAME', 'audio_active');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Y6,g`qu*BA+T{u2E@`3cq>U[#e+C:,HBkV=E6z8pBJVK_ULBG9J%zqc&=Z#i#p3n');
define('SECURE_AUTH_KEY',  '/7+-{9P3[i2_eB:g4e< KB-%B5n(L JcxN]`?`{>z|ztn,]Hr9V:<aVKx>P0Z/%J');
define('LOGGED_IN_KEY',    'e5FP$YcsgzR;~g)98VUU2J>`<~lmJcRpamyWK>S*Tmv_kCz`7xTbMstG:d7O@B7E');
define('NONCE_KEY',        '5/`l{[dUQ,TS3WtdIEeY9Z4D-?rE$SDow$?/AaO)XHhVHW.Q=!l .T^.&tLZEIQ6');
define('AUTH_SALT',        '*DoL6mMNT5:f+@]P(B+=JG.N4oyN4l)}JlpjZ3y`8^qE^d)w-iD;kBV$[fGx{jwW');
define('SECURE_AUTH_SALT', '?jYub$j@&`!l[{^m/aIZ@Rk^U4Q-2A68I[wg2.cWq$oYYE+7>Q(B95J1oI;5JN+F');
define('LOGGED_IN_SALT',   'XRJ!*dLrtyrfI)p7N8wjSd:5q4kk_ce:ArEYZ-9cka*YE_NeR44gtpGP^jm)yB.A');
define('NONCE_SALT',       '$=T7U5A%>kJ_zElaN1-`Dh@QBAzFec:r(gy.&7Urnru<!wVcF?j*TQ-8xK(=_>t=');

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
define('WP_DEBUG', true);
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
