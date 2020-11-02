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
define( 'DB_NAME', 'sub_db123' );

/** MySQL database username */
define( 'DB_USER', 'sub_dbuser1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xxZjaXCjYT4pDV*' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.drwintech.com' );

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
define( 'AUTH_KEY',         '6O1)a=vS>HdVLj$W~q`R(^5/7RN*Agy#f=i8q--QF!K(:K*i46Q#>|#$=!i<w=zj' );
define( 'SECURE_AUTH_KEY',  '6C7-dDB6B[PjiO12/y_l20Zz&u(~t~NnNLl+[v`t%/3iE!8w@M5|vjFY6h/EA3b|' );
define( 'LOGGED_IN_KEY',    ']Y7k hZt=4@;X2)*4w#!7Vrd@|{Y$6j,=W[tT[!wBrox9I]zTw^38]b5<A!3c l=' );
define( 'NONCE_KEY',        'oaW~<tj,}/=~dhQ7YNzLt;49#A/by8;t0@&Xvbuf R:5bZg<5bsA 4u/!m;Kr%Fe' );
define( 'AUTH_SALT',        'qu4vmVhS9F1;NPuJA/-J_RqI(4aCy%/Yq9rwB9f^xgr+}AJq&ad3y&QRC9Ge3O_t' );
define( 'SECURE_AUTH_SALT', '3,x99_N3ZDKKKnyC7a=99C{a5;[(:>U3e*v/RLePi9maUz0|;ymXf68R4;qyhd J' );
define( 'LOGGED_IN_SALT',   'e=em6Tz&3$? GI?*X&K]}}t`cRmy,]Q4Rv>aO76FGM%d n>q&cPxH%(LfrzTK4@k' );
define( 'NONCE_SALT',       ';u#8wCC&Mza<FF~gw:%tEP5w~k9]0[6.kz?W>R8?O-/b:%-38:o^fu^ec18J#9V~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
