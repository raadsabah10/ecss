<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u714388648_w1gQk' );

/** MySQL database username */
define( 'DB_USER', 'u714388648_FGy3e' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NOJPd1uHwT' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's=6n3Tn^gm::{1?|)w_Q3<%GY@MaG++ydsJ*Qt|vNWrd:,#?D.Tg1k5pdoqI;a6:' );
define( 'SECURE_AUTH_KEY',   '_4ghXC?GE&sJ@bj>40_*PVv.Dx{Lk>z%FiEjyDsioA:$;E6c:k!a #S~^N8md^J`' );
define( 'LOGGED_IN_KEY',     '4=u6+XdQYV0A)eWW?@z;$V[_6!>|Jsn}gTW)aJuVmK(w_9:uS#Z6[X9T)nSIDWE>' );
define( 'NONCE_KEY',         'WjEbCG6[IsluDiV?klpS$I pB_Pp5Mxb{.K9#!JYyJ{U3vmB3MRRrCCf8;s~$;pN' );
define( 'AUTH_SALT',         'oBxE<B7Tvn?T4kSBWeUrrtO4>Fr+odZ_9Yf|>E|!{b*b`79D:P.yvutTKRJOa7d>' );
define( 'SECURE_AUTH_SALT',  '}s`e)mh(Cv8U]~ 4+0g`~NuGT]!ov0n|WP0Jk|eS?)e;i$;OuTcPe}&{`#rK s9U' );
define( 'LOGGED_IN_SALT',    'dDdUr-Jz8@3:nM+{*MbBsM]6fdnUXtF#Fu!DJw^[DanY<o70f9jD~E~m0eBJwio9' );
define( 'NONCE_SALT',        ' :[1],}+1JPrxK!A.zbK+l]t%Ij{+Lrv>*1OiHiZMpu^c KBo8/QNKG1`W%LL.[P' );
define( 'WP_CACHE_KEY_SALT', 'uJZ:u=^UnH/R$h`>}f2$0~@&- lWlB[IM|O=S!^<O_9{!CqC0TY8->=bcrc_LSE%' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
