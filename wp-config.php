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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sanae123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<x@0Eg8%Q,|:FCqMOO3:GSZ9@d5ATz!){>m6_eKn.+h8+y);Z Hn0A[LaC53@%T`');
define('SECURE_AUTH_KEY',  ']*9wa.A`Ne0v-X&p0=-/wn4#)O*J8[ u>A>yTpZQ5hzluP``U}:rq5<|b%8U|:g:');
define('LOGGED_IN_KEY',    '5;+BHuTKWG519{sp+~qRNxOQVH|{S<&a)2z+v,=~?xB9RZl[z6Zg!?;?x.Bk]pL4');
define('NONCE_KEY',        '} |Op_=CEeill`y`^<?t0Bo 3UVee>B#7AIm(^nWRB~[i!7m U+j}q@2!MJ`oKor');
define('AUTH_SALT',        '=I{y{3:9 jT)J}!}32*PU,81<N0,a_,{7}4Z2K-jr]l!{l;6<gU`:b(|6-DJ4l9W');
define('SECURE_AUTH_SALT', 'cX6[= w8K`iMIO+CT Ejy3Y0vP)zUXvPS.3]v^nY+RB,eLQIFcj-$;2LKW=%r$to');
define('LOGGED_IN_SALT',   'S[L:/::o)xy6$aR.<Duf)(?`t^+J99!3UxJJH%w+|[)Q9|hq|g+4Q@g8}+e+ j [');
define('NONCE_SALT',       'pJddq^hv8Z*H.@B5zu!&H#q[ewt?+8Kbm*9 YW+R6=>n^|if+#FM#+-!k>KjeAIT');

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

/** Allow direct downloading */
define('FS_METHOD','direct');
