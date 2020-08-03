<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u336541600_VtKYE' );

/** MySQL database username */
define( 'DB_USER', 'u336541600_7ccT8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'La8nrRHRUh' );

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
define( 'AUTH_KEY',          'vxJ[:D(UuK<_scC:]VZGLy,3%P*?im&8lY>{w-:{o#PC1ju=Fi]j,MT~@.*,}r#!' );
define( 'SECURE_AUTH_KEY',   '2igF9?~fqF|(Hp_t(RC`!rOxAPW=;z.{.p#;Z`@YgAx@:4FlT&}sYn+G-B)z0dy8' );
define( 'LOGGED_IN_KEY',     'kvB:>7}EQvHu)6Bs.J(bn0vV5$E{eld3R z9zb^]@m!Y)aN5?xG>=_=U1y&%^k:l' );
define( 'NONCE_KEY',         ',g1txC5BSG/?7Fy+$T!aKoW9QW8h]S2$]IDH83)oZ?n>X0wLNV:0:Jv&s@!}}5QY' );
define( 'AUTH_SALT',         '=bSjpc%3761jN/QX`J&{&*k_p-FG4m;jgoiFam/AT(!ZJ}``6M[p30(mfPCZ,0.S' );
define( 'SECURE_AUTH_SALT',  'e*kEEwtph)Mh39E6wHs|Tc[~1O6$V~L023:S,D W?P;zw0(?w*jFo!x[8)5F1G|>' );
define( 'LOGGED_IN_SALT',    'sEpd;iV4sZ~@_D!]5/*MEiq>=^(tPT{9X+9+d,9}L$y&>Fn:,>sL`)kngY1-R,xP' );
define( 'NONCE_SALT',        '&GKf<BwBg AD,SU7N_MB#Uxb?4gMjT^hfSHI_!w9XT&(0C)*vc<c]UL.-zsyj9t9' );
define( 'WP_CACHE_KEY_SALT', 't#IF7Uw(1[: 6wsxd~.*J#z`F9*Ew<UTP/7FM615q-A3@#)U[IGxss@*rumW5yz9' );

define('FORCE_SSL_LOGIN', false);
define('FORCE_SSL_ADMIN', false);
define('WP_SITEURL', 'https://labinterativo.com.br');
define('WP_HOME', 'https://labinterativo.com.br');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
