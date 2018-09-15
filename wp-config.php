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
define('DB_NAME', 'AutoA4');

/** MySQL database username */
define('DB_USER', 'AutoA4');

/** MySQL database password */
define('DB_PASSWORD', 'BRbj2uxj7P9sgReZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n0Fv*I4B;nrkLXe?AtNc)`1%f?spzP}lP45NeI_O_zV/pdWCe3O#i,t2LjRt>s-)');
define('SECURE_AUTH_KEY',  '$>ri.DW0xozd; -o[[Mx`bp`Ax+&L-*bC>&_8VT,QVuy}z2JcBxC^j[UIm%MrZNf');
define('LOGGED_IN_KEY',    'p@p)gY:;4mzCo4,BG!~0-y~Y/G]6=h6),Mq,`a*,(n:<%Uj(J`^h eKnZotJCU;0');
define('NONCE_KEY',        '$n_!Z&3D!=k2.9P$he8J@Iuij)CkuR%&7>&E/Vi_Z( i}QXCF7%S$jYxKG71=MXb');
define('AUTH_SALT',        ']@NR4Eid>u$NH/VPz1ef=8sB4^xfNDXYYW,c^>J}IIo[rD @uj7S)ORF7wC&I>J*');
define('SECURE_AUTH_SALT', '1a{#x^ U<wEhxYHmzPnn?BtGqiWv8P4 l9bJ9ZgsPEOu*T`u9IVVEndJ70&(^4|o');
define('LOGGED_IN_SALT',   '=AG6Am{{fW2+bAms)io/E@.#Mw^,,0xs^VKBWr|>IEmO#Ny_u2<Ia_>e<o(F2^og');
define('NONCE_SALT',       'R8{&]JVUGSMW@!C{|6n%y-mJF3cq%.gZq@B#^<?,;|P:#C;e7-lfLS}GX0dw]jvW');

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
