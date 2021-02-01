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
define( 'DB_NAME', 'u498220779_Igq2x' );

/** MySQL database username */
define( 'DB_USER', 'u498220779_v3SLm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NuPobVbMs6' );

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
define( 'AUTH_KEY',          'A|}<]p>O-5B;X Kcmb@er+Gp=DODT&hiA5KVzxD8e)[Wo/N!|]8U,xX*R0qH(Qhh' );
define( 'SECURE_AUTH_KEY',   '0rs)y*A( :]Tv_.uYZBk?|S}-oWj3g.AEALS)YowD35sKl5:e^eQIPzYI,u;/(ne' );
define( 'LOGGED_IN_KEY',     '~tq}OX+D%JYkjzFyVevEUu(mW<x_nTm)?~y2]Bei1+jUArG# 8tTJ?2./S3O+mF0' );
define( 'NONCE_KEY',         'xE3Qc(wB^1o^.-Ei%6]<$2<&r(q5YCYoEE{:{CJoWi*[w,XN9HsqR%-XL.XP; 9,' );
define( 'AUTH_SALT',         '1Fc7.zvE=o`uI3ayN+Q*.7^mN%;k[n^ik~[``tc;dh5_$n%v#z#UfUs_<zV,6+St' );
define( 'SECURE_AUTH_SALT',  'k0UJwlcX(#.[##+B7]vw]K/jRCn3vs}G*`{uXRa~%;L%edtK-=5El<.:I Yj&Lm[' );
define( 'LOGGED_IN_SALT',    '1afkvXG2xaJ!Rf~n~be[`<cU3/>L6VKNosk,,~OEsY/q8P$3ef$Ccjr`/y=4A85B' );
define( 'NONCE_SALT',        '/RTrJ&GmI:nr{Xr9M.d8rle#oEaH9!*vE.2bNy$(P06yogxGRnDDow2mwHV/UkDA' );
define( 'WP_CACHE_KEY_SALT', 'C]W~0n{Y[;>wRf2&a6ajh%,3W$y@.<(/>CH<*u#[1mi]RLgz|QP,ix{dGC]3xprk' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
