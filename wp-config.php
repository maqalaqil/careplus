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
define( 'DB_NAME', 'careplus' );

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
define( 'AUTH_KEY',         'IuiE{_AyDGbfN(GhhC?7kDJ:`?TGJx+]8h<lf#7m_HG,1j6Ie3A7=3xUF?sDEXTx' );
define( 'SECURE_AUTH_KEY',  '(TEnI}Y0*Fs(pX?|9?5`2Jg0DeiW_+&|bx_F>2j(gyl<;HhgQm.nEBZ!ZYf VBcz' );
define( 'LOGGED_IN_KEY',    '%X^xwO`;cr7zdsp%ur@.sWnBi%-+r1N}$E2];V:@U]3N]gP3&3 1=_.`6I{WfM:D' );
define( 'NONCE_KEY',        'u*SA/h~dz`rbe4i>mwb``4#6NIE)>wn$t.R}[A!wwJ)Zvn>mt)1@<?WWli*SP<=O' );
define( 'AUTH_SALT',        '<{Dihhm~Ad|#AwN0OaH_sPWeGP^=c-?bsK1P>e~V|H};Ds$B[)clu&so8kT6d1n8' );
define( 'SECURE_AUTH_SALT', '5uI#@3,IP;2lP%)f$Li>I@NbYcWJ8 &I2<On&wJ><Aeg7lL0!8}VN-O=rfZC$#T}' );
define( 'LOGGED_IN_SALT',   '~||8hH+0V/8foyCt]Q+8T7?|~WDcc!=2)dI/v+9F1`m@^VUT8#sJ:OPSC,Lod[Y0' );
define( 'NONCE_SALT',       '9j=oVD7(#V?H?h93BhZ}z:6Vam)fg9D<{R4Qj.0nof0SCy*XcnaR}vmc>g0;d)`I' );

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
