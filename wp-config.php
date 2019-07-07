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
define( 'DB_NAME', 'deves' );

/** MySQL database username */
define( 'DB_USER', 'iamdvs' );

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
define( 'AUTH_KEY',         '|+RPX.=OxEa1o#N_ttu<2=Ii)06:&!Z;Z!09$>XN:*Um@TvZ`dM8bW:y*({}e{ML' );
define( 'SECURE_AUTH_KEY',  'd0nP0H^E}KrR[|@) )|CWFK!L12NWLm@- tnl4=V&a M;{z QGA?1tNgCf?DT*5.' );
define( 'LOGGED_IN_KEY',    'j]Ky|LH_g;psw9Svzl#-<{{p!:,YX<I|6CM:]de}rj@2F{]/aUxS|/i00w]+Vm+P' );
define( 'NONCE_KEY',        'b&x_ARg.}5WwgT*sPQ;ZxdB%&SDRk[!2fS<u-V*jWC; pK@g(H>PgC4}./3!5jCH' );
define( 'AUTH_SALT',        ']/BVGtY ;c^w63-7;W<sJJ~bpma2SMW8<rKsbU=xzO3f.:Jep(eobS-Ed^9][ P2' );
define( 'SECURE_AUTH_SALT', '|A)tm u_Q$*NBmSXmk5NK|VD}M!|n*2}C|G_wU)H0t3^g7pXicAIbW$F:{jtP_y^' );
define( 'LOGGED_IN_SALT',   'Ae:!;%]lo=t|9UW,[ZDM+&^/62`V=w4Z Y1Kz O*dg>mB0OR>GVE[)G5pcIBV9e7' );
define( 'NONCE_SALT',       '3>htv Kwr]}SfG=vRbXwTYG~q~TzSL0l55G}#sgy:M=4u}.m?l>=X.n;8[yc<e3Z' );

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

