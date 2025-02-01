<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bonadeaacademy' );

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
define( 'AUTH_KEY',         '*tL0j5,jl%( VY&@><QLOsRS03(OEH/j?rl|zn6Qs@Fy.)m,v|FM4D+</808lm$F' );
define( 'SECURE_AUTH_KEY',  '/UGOy0mxwY%DUG,cBqvNiFUv$sl((oh6v+b]DBVE2W<d=vk+,@rguX4jZNLAfA u' );
define( 'LOGGED_IN_KEY',    'U0kw`92SD07ZP-#ytyQf*I-h0C3|~Z 4bM-Q14rAo!=>D  |3g90bV{7cu#Olp}u' );
define( 'NONCE_KEY',        '7jdgX,}W;$Y^CuMV_:Y29|/u0jW,-NoqfvlT!1BXU/K34D[1?bo3,C_ep&m8fVHo' );
define( 'AUTH_SALT',        '  t3r-?!#yI?9Np3;iET2k}fQ#K[p06-zHNYvqc9l)-i=g#66eWXV|B_5|c<y_Df' );
define( 'SECURE_AUTH_SALT', '[!Qk;3`!~f3W^#k3`~vmfa1^g0Mqo&@$Vrcb!3IK0:x0F7nO?1W]ED8Kg!d>`R!/' );
define( 'LOGGED_IN_SALT',   '8Q6z_3eEB1e.,jw(p|ly201)-w2?/;+*6:[H/B%[? P&nAT<y@T!*0 0Aoc]yo=1' );
define( 'NONCE_SALT',       '4FFdnik@WmTDr[%{[czfB=KGQd3EX0K~Qxz=B@1Xz+rtdk7D8&/Xk,abLC.(59]e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'bacademy_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
