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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\tienda\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tienda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}Hp3|I.y-CS*/OY{Qr6<G::E,QUrt$0!0<;@8Y5$d6~[TSB.LniTqh>(NAX}~GEg' );
define( 'SECURE_AUTH_KEY',  ': y!;jZYRBpiIE==d-H:M*4RLo1xjxzTG?rJ|Cm^Q KrAm}C3c,IUY8_t@|)qvw,' );
define( 'LOGGED_IN_KEY',    '5 lL&*57;,nz|hBpU}^B8UQa2&kp#iVX$bKhlH$0Gu*}D ;/4(_br9/+%aO$q8uh' );
define( 'NONCE_KEY',        '--Wlt}Twzc76+@Ci7DQ]gCZMB/oXMS1GrWKNjEQe,&&7m_,fq[rA{>(z^/m3U2x,' );
define( 'AUTH_SALT',        'D%R-(s}t<epoa5UUQ68h_h6RRO3OJ[!PZo;$ux7Py;/SnX.VdKp:E7s~,7G:~dKK' );
define( 'SECURE_AUTH_SALT', 'cHvVbsiZ$s!7S_?e67Zb|,O^Bkmq^o^acY{6iCgoJdH16WCj&PDMa>XIm0]2.qfW' );
define( 'LOGGED_IN_SALT',   'zymw xqC}l=zcGu[EhZh>e?L+it7Kn!aN1rou#h;8V,2]0nJ0`j-&:K]r,!j0M5n' );
define( 'NONCE_SALT',       'yDQNJ,#5o7UZV}v(FW*3-cz;Ja+x(4Z<_l%vlfXWK7ukb0q/p{jOKX5opN)KK}0/' );

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
