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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'GNIktVK@<i%o32qVZ TP.qvrx5gzr5Yal1^4mr`&Lvn(n) i92.}VhANVy]}xA#V' );
define( 'SECURE_AUTH_KEY',  'yP7;~a|*;<85.>DCCMB0]l[`79LVs[4$O.:C(?Pb}rki?3POCZ=M][sjH,83ddiw' );
define( 'LOGGED_IN_KEY',    'klc0j]w7+oV;*D.m#_{]AqLm<Hletl=Lg(d;XmzGII$nz?dgQ?@|mX.=pG,]NB0k' );
define( 'NONCE_KEY',        'Rzu4*!gBrUtJa*;$5)(@7n`s1}#B>71SL<=3?c%>.U{GA4hTf(:$Z.Fr+|Jr`k%)' );
define( 'AUTH_SALT',        'iW)Fz)13Nw7ge~)63H+{i|PCeI^WA<1>?eZ_&3`PE2VA/*,a+z_,zM=d!|,;+KOs' );
define( 'SECURE_AUTH_SALT', 'bLD}ICV{~Lt[+/sX:KwL6p;Y(}=]GZ}54]I9Ry2v>X)hq]6#W=OPiBC6oC-|V,eT' );
define( 'LOGGED_IN_SALT',   'ejC=($r95E}0FTZ5=Y1q1)IsCyC;_Gnx,f]?O!s#~*me^cz[C`wcv{r2 6<CkD>}' );
define( 'NONCE_SALT',       'cK9=+KF;svtW]%_u9JIl?~v,$S M+u_-u+$kN$C66,*rF@ig;9h WL:[zHTNHXd?' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
