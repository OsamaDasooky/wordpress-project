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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'R21F:n3W<Y<|!~Rrk|kGXpFK9]^g?l~X6HU-tEp{N(k{4Pg^#@=y)0vol+6[s+0y' );
define( 'SECURE_AUTH_KEY',  '<ohvQn~+[zH+SDalV}SxHOaK1x#z[ 5WxrO+zV^Jw2{*n}i!ZV5aFCdi;F0:i#Z7' );
define( 'LOGGED_IN_KEY',    '8#<]`tx)g~}HqfiOf9 J]Vm[?M;:TljD*a@zAs?lZlG3WBPrGEzu4gP&p#3(b2UM' );
define( 'NONCE_KEY',        '0GM)/_2O`(</JF}{GDUd9DM91{I?PS&:Zpd.j!m8=sr+Wi)pO^:[[SGk@lKe YW>' );
define( 'AUTH_SALT',        'WLd[+S8WI,B%/{)9<5H%@?VR5;]Gpjkh.)/EWE`R y52c?wh)9CbN/&qGa Lw;<+' );
define( 'SECURE_AUTH_SALT', 'O<Po;1+RVYf0:3+Ipof~O]lxRX{06inb5giz?L3YR61L4R8=mQGX^rdQ3j^Lwi0x' );
define( 'LOGGED_IN_SALT',   '.OMFW-`!%$=G`{=t0G}RX.R--;{)Y!&l15$ks.~@xU[>z~sV:ziRLW-l cw?=as3' );
define( 'NONCE_SALT',       ':w,A&%)6=*Im}V)Y,8{fe{wn}yL<Jwa*^zGwV*8iv~s#Veu*reiObPghn),s=Dm8' );

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
