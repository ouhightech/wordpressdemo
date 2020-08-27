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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Aa@123456' );

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
define( 'AUTH_KEY',         'aYxi7F>X!+R19boRrgC4{a`)b.OZDF*a<?Et%*i|Jl~<cH!wnBI$+Z$e|!9X/tIf' );
define( 'SECURE_AUTH_KEY',  'W/C|pC0dhFmg|R/;GZ2}DF!,#m^kRh`oc=g,tj$^bFsnc8sXfWx%B%4#gdnv_C>%' );
define( 'LOGGED_IN_KEY',    'xvOpw8(;CXpt+1qjr[L=)y$zC}Z%fu[*#~cU7EenA1aq%>*TusCYhjM8#+P:=+T8' );
define( 'NONCE_KEY',        'M!is5pSBJlZsuCZqTa r)7KYyf?bsJFIX#:#~}nxCTM2iC*E~}UT7D}3_Xg%,-)7' );
define( 'AUTH_SALT',        '.6G<U#9DM>8tC-Df]Mp?7|nBpNrVfJ!<Mw-e2R?*DY#R%`N~mJ1hPqJdn3}M IdR' );
define( 'SECURE_AUTH_SALT', 'MkQi*C#Q^_#3fjD,81z7ZfvR]L!xp!DRC2{?+ {dfKVk+@@ro<apJwLt/]0bt3]{' );
define( 'LOGGED_IN_SALT',   'wcu|rCI[2q[g]pm;zr7NC=M%gn)j/1?RE#PN}jY_1af2~SumP}WG(90HjE4uJ$Mg' );
define( 'NONCE_SALT',       'W(5?d4&1%AWoU?8fS^RD5Ux l>H}:AJ[U[4|UiKwh--LSZ%loiDBbvE-J/wC_a{A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdemo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
