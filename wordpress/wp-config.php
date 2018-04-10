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
define('DB_USER', 'www');

/** MySQL database password */
define('DB_PASSWORD', 'plugandplay');

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
define('AUTH_KEY',         '$#qwgFqU~P PNyhz7Wc@3SUbt#t4IS:d;-&NaXxBCDjT||6Saums?e-j-[Begw,k');
define('SECURE_AUTH_KEY',  ')x;n|dU-dj{5pkkxD)Vkz/%+j*bN4!u,^_9:_.;!q`+n}x+T=R-A&s:PCyTJ/L$T');
define('LOGGED_IN_KEY',    '4<=Ln;zEJ5(6]6 em8)9y>G{XGASfna[h|#CnFOv~y:0;fam=Ap>oz<eAS#dH[,0');
define('NONCE_KEY',        '%(]_fAW[ldLb74{wfjt:]vFVMYi#RS_O>/[6R$Nx)!q&++|U#TU7p:|/SrUf:(Pc');
define('AUTH_SALT',        '$-RNzqOmZ4^D-]t*)kLf/.jTX8OD:gl^~ZicA+L6lF;]Uw59o a-e7_2m{6`c@,U');
define('SECURE_AUTH_SALT', 'eYHg. t]9`GrG?>+v+!2]jW-;gKxOs,X0i:@+`?pt},%@/UmI[T42+dmstRh]OGO');
define('LOGGED_IN_SALT',   'b_Vbf9PA+*s&3w .m}ljzsS/.@![V@9b|Oc5Zl}_y.D2c<e??&Vfq*i7rOZ8DZe3');
define('NONCE_SALT',       'k@Ry%QNZ_EvN6Cx+qEvTHxX1Sp0l~z(H9~V!gv1<s)slV8[ )cIe@`SwU2=RDnOU');

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
