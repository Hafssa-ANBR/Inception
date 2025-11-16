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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'q~w2PhorYzO?<G7::Rcfus~Cbs?Z#W`F8]M4*X!w6r~X8x#mq_5Ho7(O}2m3~ E?' );
define( 'SECURE_AUTH_KEY',   'b@z%v_g7vV+ n].1!7*Bx0-=#gTO 2s7,?s iN$8,W~Qo:j3L!qo]hD|psyFiQX$' );
define( 'LOGGED_IN_KEY',     'O:3$YhwIF{HD3j;|uQUkAJ&+.Xbk2v^rpOB+k 0I/s(KX~mbU>A2,DWIotmrS1;6' );
define( 'NONCE_KEY',         '|/yck*k}_Qwya3u-VR]+,;[oZ#)@4!3C0 O*:lc!o_N>G`V4hh|:j<4uTiQLln.R' );
define( 'AUTH_SALT',         'iQ$<JXR?>w:h3Y_$_Y %kUn&T+GroERFxWIyE:5^U:yh.x^TTz<&oNv#Cf?y/Uv?' );
define( 'SECURE_AUTH_SALT',  'dj:XqM`$pb>4hesS$,6q]e#8%t``cOn,2{Z4Ky<I:g~h)1rt6a/E,(;[h.2VCiOM' );
define( 'LOGGED_IN_SALT',    '.vp{U)8Lzvi=F5V+JS{TFE3fDzFa&tXBCXAWNazWaQgdh?u53z<REGL3cUx2l<4A' );
define( 'NONCE_SALT',        'e<}1u]{OCyQ+HUpQ*gEPo>g|;]9dpjk|H*p PbN$EB2@Sq3cmBj-nS7ycN>~j,r%' );
define( 'WP_CACHE_KEY_SALT', '78Y%zon*:*b|u~)aVE8ssN%G;S-dV ap,rVTt#wB3KDv1@j|2eJ{2_Iy,WCfO;&b' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
