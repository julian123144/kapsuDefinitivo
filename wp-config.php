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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kapsuDefinitivo' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b614aac6b6e28dd7029e7518b0ef89832789fffa1fb318c5' );

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
define( 'AUTH_KEY',         'w :KD4Eqt!+ c}u,huHU+o1R3Nj:iUsv*&i;j@Ong;}&8K`x!}uadrAhaj3 sJYz' );
define( 'SECURE_AUTH_KEY',  'd5ai Uo{:-?f7@/.UhjO>NjctV.F/3cosd@@[5:et404vytL%#/[IGCsFzIdR`A[' );
define( 'LOGGED_IN_KEY',    '=U[;MPJ~ :M)4_;CcXl6[5}cXwkvA%7b_,>2]8WWTv&t=k; dY`$5px&1r[KNot{' );
define( 'NONCE_KEY',        'k:w.;Sj>%K>YCVZp9o~GnsgH$<lg*kED^tkU>q;<%K_<70r{r+{_eHR{j*YL(+TT' );
define( 'AUTH_SALT',        'KSSC%OX6zg.;L+w=f*ZStKR}K~Q`F~h{Rk:*ZyQtqSM!h?9Hn-Nq]p&x!sG@<Eo4' );
define( 'SECURE_AUTH_SALT', 'Dnw`(h  0oNu6Yr<g&m>Q9eme$K2>$ :y-Q]%y`%FkFpuBbO/3JLjc_l4KwpZrs^' );
define( 'LOGGED_IN_SALT',   '%o`a9K0;?w1#PnE/dFnX+?5@^P#!1i,_ZW9Omo0HiB~C*z|mYTW-%JC:+ynaaQ(v' );
define( 'NONCE_SALT',       'uU=$,0SPVZoYxRa]xmP@o&z_otxl`IP)0mCu*e_6:i=-B!k{<G-le+ce{}tIPW>$' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
