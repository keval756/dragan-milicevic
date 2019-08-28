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
define( 'DB_NAME', 'dragan-milicevic' );

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
define( 'AUTH_KEY',         '&Tu??{nhV/A9<UpnBd1YHHx2 B6foL>E^N2[C+EL|}[h;SA}ehmNP+Yz^y]#R%$/' );
define( 'SECURE_AUTH_KEY',  '[!Qd%e/vJ8MWJ5!dYqk8r5W8Ck2QRm(r7CAY~J!.tkh82)wAQDxB^lYTTKKOe +6' );
define( 'LOGGED_IN_KEY',    'GAuS4kV#ETW,L>Y3i)DKZ<f2D1EQ;`u hGFb1*v7mwZW1d>K=-(_QOeMrVhK x}/' );
define( 'NONCE_KEY',        ',q&OGd)T:X9os#VL_Rl#Z>mPV+>v)?,:%=X8bB^n7&OocSVjj<33Lu^L1h6@A- H' );
define( 'AUTH_SALT',        'ET-`KK }]ync&6i1Lf]LDWa,f#>en;/DgCa<s%n$$INcRa{*.-8RM[Ir/}DIUw~H' );
define( 'SECURE_AUTH_SALT', 'UA2J}2y@xm9.,_wAu#ZMilO2Oug#uTP1gQJuq8a;Sc!O5ouEc~w^ 9x:O$,OfK=x' );
define( 'LOGGED_IN_SALT',   '<ZAU %~wDllS&[[r*$1?Av23P>x-<Hr! QYKfZ))U0We3O<NdA_-23GIAbtm@!h0' );
define( 'NONCE_SALT',       'NI&lfVMaRehp4Q(KErf`?#fLV`tQZHy.~B=4s@9,BZ1WdTJTB=`w{BeGl0*~g[sa' );

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
