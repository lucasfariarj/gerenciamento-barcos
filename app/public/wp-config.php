<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'xym-:?!I[]M:f*TlxAIlahkJIm8)35e!X*T2EcV73L.fbT+{<`sTg9/G[S@sE  6' );
define( 'SECURE_AUTH_KEY',   '/VgLG%/]En`+Z9J$_d=iH][f_~keEUCFOAciGn&sb2KAGFjVv}3nY({ah]Cy3%?G' );
define( 'LOGGED_IN_KEY',     '#+PRFhA){AD*Fn0Q/jc*A,AcRfVtEZxWQ{[H;NX/<>hr`Zz(]cK?aoL7ab|.RTa1' );
define( 'NONCE_KEY',         'xFG_IMo6g5|QP+AA3[TW8[&3u_a#&T%YOo!ygz5n]v=Z`?]EzrTb*+A]ieD)%gXc' );
define( 'AUTH_SALT',         'aEFbtCn{fw?,c#sD_I24s15]mH&E=7orL@C9L=$Do7fu*HQ;YvTn>T02(#j^; Ex' );
define( 'SECURE_AUTH_SALT',  '0+,Oy~<Qec.9,M}EQMqWkCsLDIE0x<9E5{V[Yc{8Z}4YA@^CEn+bjB}}!LYKgmlF' );
define( 'LOGGED_IN_SALT',    '%[HcZCtQ_tx>O/Sr!1zg7:Nb~PSPv!yIcSwdx=vfkP-<j#Yb/ >J`;|Fs0Yf[(YU' );
define( 'NONCE_SALT',        '7(5A?:r||ZH+PAT[Y^?gOJI.bhh>R7j~>3n NHh><4$-q{jp?mL$[Fy9BUiRL4sY' );
define( 'WP_CACHE_KEY_SALT', '6~w-FYS}V!#jOm5sg;dE1TtutZO$i#6a4ExFR?TXZ.Fo[j-84C_d4@f6UhU{?W:w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
