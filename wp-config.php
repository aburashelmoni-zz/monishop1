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
define('DB_NAME', 'monishop1');

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
define('AUTH_KEY',         '])iL-V7]uL#^>(kyD(rRq#$*diHO6`<CIJDuV,F,tP(WW)gQ8jID2L3~p<Vu*wBw');
define('SECURE_AUTH_KEY',  ')or9Yt/lqN>NLx{urUWk@0SYYf~L>AoaajIPm0hY)i _z/6<[Ax%%9kZ^_z_v7C%');
define('LOGGED_IN_KEY',    '?7%8mHGgilqvMUbh4x]8vjoF*J-C-iFXBS?(x)@0_:17g{@9]RK9DE|uw1 zeE;I');
define('NONCE_KEY',        'P3Ypfhz<%*lW_*u;O=PjsQImg`>Ye4x-+h_AWt~rmpB7l4/Nnap2YA$HnD7jwZN3');
define('AUTH_SALT',        'w:g?jy~Yr@Pj+BeWbL<zPitv>M,LMYQRa:H,Fx#,ueaqgq`ARf;i00cC@=K+7JP^');
define('SECURE_AUTH_SALT', 'OcAMuInL<=Egmv$t!W2 FSZz}]Vo5X1~bHb,g7j3>AB.79KV]N2-.C~?xdsE5pe*');
define('LOGGED_IN_SALT',   'sMb3>B_1.S<~ROOaD]h/s]6H4jm*|kc2*>t^[#miB>^RpX5_-xS4g7S$>&$/;%5a');
define('NONCE_SALT',       '@z-:o3R_4`iulygCD?RijcJpedDsE?w>bhkbdg@bzkg4wviagM@@d5ueyBpkm[j5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_monishop11';

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
