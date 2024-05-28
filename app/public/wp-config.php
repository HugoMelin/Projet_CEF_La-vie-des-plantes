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
define( 'AUTH_KEY',          'H#DFFrQ`;Og`=z}mB#1@R^k|cD6(sze0STi(Z2gz(6p<a^}QdB>=Tx}!*V4uGv|L' );
define( 'SECURE_AUTH_KEY',   'Tbwk3p8>atZ&Z%NQz{`Kl4<a-B#9{215>V.Hi3Y?qvNH0=:L9AkMES@z4qjndMAF' );
define( 'LOGGED_IN_KEY',     'JTDIKI-d1xUl$Aj.<VFHPW*b0sX<=0v@d^|0(@Gr`bm Mt}Ii&%t|dC+3I3i+o~n' );
define( 'NONCE_KEY',         '+(;H2E?mL*z`=QDS_A%V5p69 *rw1Rq!.}M1E1zqQl+j*Z_sW::vOcz?DyS1ee4Q' );
define( 'AUTH_SALT',         'imcDp#SEBkBFtHDoZ?!x,,j@+{x|OwTW1usI^8GWcG[AddK5QPL<-sX,;`eLa~#U' );
define( 'SECURE_AUTH_SALT',  '@iKfk0R!R@7S18*I$YxpNGSD2!M#8-$/k}+7G7A_Um2,avuS{2ri@aks)T_Yn,Gp' );
define( 'LOGGED_IN_SALT',    ')u1o0VlHGBrI.XE#Opl~$*zY8JZiZKf+K;`]`vyl-!GG7K1Xencc/WYKpt*9MQnN' );
define( 'NONCE_SALT',        'v!vkEl%53VM!#5&LKi`[Jgl kCUM Vz`/QS`$aBgyU}<`zy!cHaZpNs(6bKl8RCL' );
define( 'WP_CACHE_KEY_SALT', '<z$0]6%m!Z)_Qd=T7. xtcoy#gvT^=+$jKl1ld|v{_#dut5J>*JOVHTa,E$r%sH;' );


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
