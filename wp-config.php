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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PetCare' );

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
define( 'AUTH_KEY',         '|WER2+[Fj3r7WytO`)?Nd.R<6>Si(/`brOBGu>d*GRD-0>?:UoStVHc$X0>R/Z>W' );
define( 'SECURE_AUTH_KEY',  'sAheRnKohuq4(o#gD#Qbil7Q>4?<:_3;+FM*=i>XIk_ OfLtY~&:Bd+G=Ws.1;S}' );
define( 'LOGGED_IN_KEY',    '@RJasNsP05y<Yt-3gS-_wOHV*w^6EfU{>G!m OeIN;ouQt>4=Y Dxl%Y9|!`{U|/' );
define( 'NONCE_KEY',        '*SkcW^&[UMzU0Z`)YOVY]!O}vJm&#L[~00QcP$;5Uc?f$^SmBg{cP{7GYsOEr1fM' );
define( 'AUTH_SALT',        'u4}^dqnu@agL67MWZ`|S#FVjGn2.HP[Md75H|ilAaeYr?G%f`=WjD|A<.iq|VjRr' );
define( 'SECURE_AUTH_SALT', 'dM#+!WX#m;vt3+9!&L}}J~=m&E.E}7Tv6m~>@b},x{PLo1_8&t(/EECZL2dX=WnE' );
define( 'LOGGED_IN_SALT',   'n$7cYg8B2D{/X.jJ*jA(7x$ JTc)`HYuS*Vx8~{kYNms7UQe(CGi{3]*|=E?8k,j' );
define( 'NONCE_SALT',       'f7EzK2POb6sYGsRoan]NWR((6j-B{Yk,zZ]f8#}%{vOG2cCGy[$E{L#w&:EH4^QY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
