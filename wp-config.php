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
define('DB_NAME', 'finesoci_wpps');

/** MySQL database username */
define('DB_USER', 'finesoci_wprs');

/** MySQL database password */
define('DB_PASSWORD', 'uNdcy;(H@L).');

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
define('AUTH_KEY',         '*.ITN5&5,AsYJb{a@|f?9P8;*ri+l(L%n{+t2cWf-JNPm:Rlgq`CRgg{=xa4]|w^');
define('SECURE_AUTH_KEY',  'ZeU&8g&!4t]y!pd-^1g0tC4_J4q;oET8D0Vd::(}p@XoT%knZ.qBT/Sc.XL)S=z3');
define('LOGGED_IN_KEY',    '-I^_K~r6%l[eT@Ml0K0:EqU@a3`!0L#l)DufL-9=kLlzEg4X*cUYYv:Ac31AQ^*8');
define('NONCE_KEY',        'bZX:Y-ih))Z3E&g5d<33Vw4(fUBn->ldX[|f?LJ/>Nh<z#}RSD7G,~}/d>RtaFHa');
define('AUTH_SALT',        'zOMa*xL.M.aX,ed=5P}M=h&qYGLH:RccO$FD,,uS:_#gl,nJEH.pTDr}$KTt#8V%');
define('SECURE_AUTH_SALT', 'A,2F8dv~G%#45Cd?] 8g4xDdVsQ,K<W_CW0GC7,[zAPLk<K%9b`WQ>Za|$2&&4Qe');
define('LOGGED_IN_SALT',   'n{SAf,0?8e&.Zcst_IoPnN(*1feCDa&^ox@f]E?}ul1Czm^eJ]D17Os^Mbm/NGfR');
define('NONCE_SALT',       'hvQ|De ]~SY%;^iZ&ouY=J`y_D5uT6adF8JhuDH1v!XjLwo]/k~J$qygjgkJ]Vr:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cmspres_';

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
