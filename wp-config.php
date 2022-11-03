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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '/R6MP$P18QiycmVrWa.,n(Bh|4#rEu =,YWuddlYkgGlCEE0(RDdGN]Jy$9AIMki' );
define( 'SECURE_AUTH_KEY',   'ZF6Q*l^M{@LP:c^}lm7J}M2u ;WGveAjIn8_Ii<&L#n;OaT#~*trG48[*%?AX$L+' );
define( 'LOGGED_IN_KEY',     '&9U?).mI2&ZrN}42Y^fa#v_nF[L-!p1eHD_;h9?%Kmd/)/KQ_Ms66<T^g~F=t[=|' );
define( 'NONCE_KEY',         'z#^S/5Wd %1_9ZZn&OKPAI(B#Ho6=R{_rjagHx8A|GNt!O_0@8`r*S.#y5DQKbiU' );
define( 'AUTH_SALT',         '8:@LhM`+A[QNxl,}2w]y9GA ]3OLcoLp>*R8{yN>Eo5G9!DHdJzEYHxmJ$JJJ|p6' );
define( 'SECURE_AUTH_SALT',  'Y5r&[jiBwzj/Jf4#Dh@zY)JPd8@8s>jx*d9[_;=R1!]nK8PLa;g+}[R$IO2KNR2}' );
define( 'LOGGED_IN_SALT',    'GxOz^~!8N&nVyL.=^&3X08+6/Au:TgQf5/csmS2F$;J8Cw)eN@gddkUOulGTrGOn' );
define( 'NONCE_SALT',        'ak,3w-XZ<=lv}YquUMXQ)3K:U^Z$I!>>bx BhL76o;&-e]bkmPxt$3V+!]?A@V&V' );
define( 'WP_CACHE_KEY_SALT', ')@ kZ-KH2fu+s2S;N%)!:deu. 2l8l8PE}Z~W=5N+mH%;)H-KZkl&-f3x0>[dl33' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://Site-em-WordPress.DouglasDG.repl.co' );
define( 'WP_SITEURL', 'https://Site-em-WordPress.DouglasDG.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
