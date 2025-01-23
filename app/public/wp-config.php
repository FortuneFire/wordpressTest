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
define( 'AUTH_KEY',          '|U%y;$ZnN883<Dl3V,#l}`!|fp G{}RIg$[@G*$j1[W~J/eG{@.F.I0{uyOfs6~*' );
define( 'SECURE_AUTH_KEY',   'L+ zE5Lm`r?6Djn,;ci}I |`<;;/(OX~]V*k]R{<`g]g$p=M&VEwZ{FZV3}#%)R!' );
define( 'LOGGED_IN_KEY',     '(R~pb!b,[|GQ_58~ ^/rovWRpUp?YgQXz<m%1>&ti2<1S aUO`o<qSQS4VeY|EX*' );
define( 'NONCE_KEY',         'D|eekVe0pH~<dwjjt=8vCXyfW*$S3LKUt+CUVLq1VXw+mZMUfsGe/,FO3<Glb4He' );
define( 'AUTH_SALT',         '`q9ag2(/e&}db*PxM423U,_AqXys^8;Z PT3j&(./$W;l0]5(@XvjOHRe){Qg5eT' );
define( 'SECURE_AUTH_SALT',  '[_f}>!e/PrLn552QEVnF:>%10m@X.7y)XoN:SRwOh#p|DB{;HV5Cuc|rKb|xJ6g&' );
define( 'LOGGED_IN_SALT',    'M{vrBe[Tu0.k$W)c){ty`Xy5z+{)q^LK7>[w[u,cy,_xA8&p=,]{!?VgqJT4iG8:' );
define( 'NONCE_SALT',        '0dspAsN=Vj_Y4wt^zU+JnJ*5:o~+6Pspo`TzLI;@*c6@.HNBHX$k E;_$_.K)f]u' );
define( 'WP_CACHE_KEY_SALT', '9]_0Q>yz56Hx{|XHK>9<IVss#4^yI#^F!]cxlsa-0lf;XBZ/ecXoVe}s.4z3QC/ ' );


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
