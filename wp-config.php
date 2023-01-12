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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'M*4V[`, pQz`0=$e3n;.4nQ-GN^t_n*_e=Wyma>epmh1NMfdkO^AnZN@gM|b6MTY' );
define( 'SECURE_AUTH_KEY',  'XRaT6L,5[-$Er<:&s8YYT~NSM%SsML-}[eM`n<q5?bLfyJu45}3U@?bTsj;s*_:c' );
define( 'LOGGED_IN_KEY',    '>E`X)4zU)}T}=QL8K895I7T~`F3Zw5ri}$z;EflQ-H49*-8o<T]#ZRz|hX,XT_HG' );
define( 'NONCE_KEY',        'mg?9s1@SCTQhzsEl;n%]:1.;L%dXF_YWB[[pyG6|d<0D-%&0-t3{iU+O$HJ<Ns.I' );
define( 'AUTH_SALT',        'f?%}Lm=[6<@{yc*fk5*&QAS|-,[up)A6=4I*8cbM*;JUBgfh!5AY^H/%vc:{VCXt' );
define( 'SECURE_AUTH_SALT', '45E( +PAI;Wj*RM&_5  &y;_k)VOY;d&4VHxT&amr NQZvTv!?yA--~iC/iv5Q7M' );
define( 'LOGGED_IN_SALT',   '#*56If@dlDsA3wrRNpI5m!C,|>cd4e5&b%AYzeH-])DD`O-9TkwO=$MUH.P8%`*{' );
define( 'NONCE_SALT',       'pUR3J=g@x/ZaeW:*Ym-*X,?s,L`H`f=cZc?,f?_y@R@Kc&+tS&/53A(.)|2fM6.h' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
