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
define('DB_NAME', 'tbmc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'e342c9d35f1901465e3661192df41e45c3e9d4683317f000');

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
define('AUTH_KEY',         '|Nlsj#S-n^QDwqf&Q#YmGd0P<[#~!6GDc:f6H|]^V;TBwZ)0r?l/MWOM^mJ0qQL9');
define('SECURE_AUTH_KEY',  'Jm[2!3I*$]&o*OJBarghRQA2cp:F8hklGBcs}Q1+LnXnp*[&u9,R/%^1E<7h_%:@');
define('LOGGED_IN_KEY',    'y{Qd^}0aP,mq1QdW KVQF)HaP`;q[z]]c,p*+];e&)m*#C^$tIP~`7[U= U>_/C!');
define('NONCE_KEY',        '}2)Y~`F-GM0CQ4_T8sm&t:SP^Bvt=C}g&{T5CHl!ymLbtk[}06Ce|P,1![Ib?cca');
define('AUTH_SALT',        '2A|H*2L=6zeY,l{BM0fukVZ]^2QYbE[g T[^AU]el@)JP%JJCsQmPI?A0S$&yg~*');
define('SECURE_AUTH_SALT', '3e8_cFq}XtmH[O>?#F`DnPqzi%(9|##%<@[Jq>eN}nmqq}`deCXgP-q?QVx[zhs^');
define('LOGGED_IN_SALT',   '=F$at#}6.cqsD(DY>>>jbNbr{~Pk<OVJy+GU>!H8GcQAd)La4x#CLmZ*hsEdVo0r');
define('NONCE_SALT',       '.FtW`c{Nae_N>X;5=3hGoMox@fJF.vk=D3y_vF#z*t%&>jmS#2zPdO:<8q#!l#+{');

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