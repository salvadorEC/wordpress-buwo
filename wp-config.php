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
define( 'DB_NAME', 'wordpress-buwo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dts-Fa<9/jv|+qY%LG:PW.xU1UTg@AD)HyX^.:=wesM;$lEXg4SLS4e@.~ec3R?T' );
define( 'SECURE_AUTH_KEY',  'Bs^#+XJ[Ju00EvN>pO.=O~3U/KU}]mP>#LL,z7<P@Af&%[b:A=jy,MeYpu(}b)a!' );
define( 'LOGGED_IN_KEY',    '5vs/e6XnW&6Me)A]{j}L<($AX1djmcM8PZs+ qY{4m8@^Zc]Kyo-4ujL:, 9BvkG' );
define( 'NONCE_KEY',        'uD/^kNS~L=+06uO#$;X<s{g4@P@e]ykGfS<Vg) ]PR)VHZen;V-aR2,V2xcVH1ce' );
define( 'AUTH_SALT',        '{HZc<T]S2H@^y%f;`:x.L.G.+N*]:w[uqH(X{Xm}cS7fpDOGEzS0[QJq+3-`PbLn' );
define( 'SECURE_AUTH_SALT', '$][Qh^PxBx~=$! gASMWCfE|_|IeKGB0W$i!S3-(<P@,UX_Z(1%<9&<o}}D6$>iD' );
define( 'LOGGED_IN_SALT',   'W<jEs6+0MVe4^AwdSKhzZ!#]}zr@j$GnCR{;*3-*@Uf?EfHW:x7133%`%8aT:iPZ' );
define( 'NONCE_SALT',       '5I_Nl$HQW$$K<c[^LK2I<_#$NACOM)EDXR sfiu:VZ3`o@Riik.Elc c&iX/{CuG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
