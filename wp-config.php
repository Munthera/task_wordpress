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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#&ZRS%<g:])8>qiu6rWTK0P^zmlzpgDeRSQPrJV~IxN pTO,b<e6PkZ2U2Pz09=C' );
define( 'SECURE_AUTH_KEY',  'ruvp^tF;}hk0_w!&-L{2X,90pr}l;.,JhhS2{A;i[~R~Y_/,m#Mxn&0#[_38$p/*' );
define( 'LOGGED_IN_KEY',    '0.DLZs7(QBuv!?KmT5Kp|BHD.k;1`NLP4>V]{O5Go85~*nnH$(V|{uc?2o}`ovbP' );
define( 'NONCE_KEY',        'lMhT}%j#%>sj)NQNS,(D_{}/QFF 6vn|&`3#!L!1m@_f(k`ryi<<nDT}%>5}Kv!Y' );
define( 'AUTH_SALT',        ';Of-R6<c/yv>1};:o2V4_;aj*N3/6KJ[ChO?x0(*U]U7/?]5%9*2dF/XHxN0|]*}' );
define( 'SECURE_AUTH_SALT', '0ee,@{$ XNb>5Y,O%#Gck@0*TX~+G*@7t%&HS/GL;xiB  l:JZ77)nYFIBu~)Yb}' );
define( 'LOGGED_IN_SALT',   'OTK+YYhp8f@03ZI5/er7E$.l4&}}X5aH,RBqt(PX8*<~wejinn0p*!28TU?AJ7#F' );
define( 'NONCE_SALT',       '61bv0?ibn4_nBan(yU~0x,zu-O^obfD<Y{cu^fUuWMQ+T{]O4q*)/>qWXxPGNLU5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
