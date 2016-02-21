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
define('DB_NAME', 'wordpress_bootstrap');

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
define('AUTH_KEY',         '=a@w:YAW&5[M/pWX|(Xn%RmT2IHxZOpoD7:|#g[xq0]w+J,qzePbS:NHBfe,&e8G');
define('SECURE_AUTH_KEY',  ']C)Fm}3Df5AA?lb6^xPcv9^WDzL^~kH7o%[s)?&<Y??_;]m9/7`]X$=6bd/}68q+');
define('LOGGED_IN_KEY',    ' 1[:Qob@+$DhANZp(F//4owR4[I9>:}oVzN*vk_+@P)R$Eu=z <`u1XW|n|6:O U');
define('NONCE_KEY',        'tI2M/|fX2-OHeK?Pxih.YUBgoU*H6UBW+LI2px9c@@H-t) fpBM ^9(Dox;km&Mm');
define('AUTH_SALT',        'B5pFp|Yp99,UdJBK<J=$%4`!yzhpa|~U)#|1Xo3i4u5H*g/NSi7r;}?+ Kb_gqGg');
define('SECURE_AUTH_SALT', 'fX8z+N{,)ES8W!pgbk{MXfT,mxPY$|Lv&<-7{$EJk7Tj_*!za&)_F3GHAIO#sVWb');
define('LOGGED_IN_SALT',   '[+n44;CsRpAbs-A>%&M^#A#xcBeP.OWV|*7)I]qccHtYvH]L`T/j~IdC(VqP@NMB');
define('NONCE_SALT',       'H}3.w0(>+0GsRCXz2kC-]-Vq8Uf`C,tE8_tM]P8[]/B4F^p)V_dN5OH.M={+e.7q');

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
