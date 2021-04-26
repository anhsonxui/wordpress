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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+tn9z&(vQK98L/EuRKg8_I2mN#H`=^p$H_~mjGJ])PEgIV@g&H$8hF~t;]c4Gag)' );
define( 'SECURE_AUTH_KEY',  'H<$;.Z&`mX`@j;QqDU>[%JOxl$2%l?36KX([#.=)CZ3:>$vIH7nV%T_!^0z51Y$@' );
define( 'LOGGED_IN_KEY',    ',r+zsP-W`yC~&!fQ&zMa=ZvkpVtgCn*(XA.8R`/TNIgW!iBRv@o]x>}x)W1vbJsD' );
define( 'NONCE_KEY',        '1*n2Z5jl3tu_bMlkckRMoxQ5&gzs(a:J]Q_r8jn{!&}CDfxQrR%^H,B){Wf@6JDE' );
define( 'AUTH_SALT',        '4*FO2(99Du7WV^+ `7R,CskY(=`ez}$d^MX<h[Sz(@L]qM0ib1xC?Dqq_y6hw26%' );
define( 'SECURE_AUTH_SALT', '|kU8*$NsH?yO~Cq] Qu#1;C7v{BLB3aD;ZCS)*jcuA39ezo>tn2h.6oUsaCQyZMl' );
define( 'LOGGED_IN_SALT',   'k0aO(IX^92LvS_Z%&#3=h98w&R>s&4<VD+NjxP*A78%8+@YbR::9:v<aX:f_I!p8' );
define( 'NONCE_SALT',       'tjr*:5i^;sJ6WHb/=!U@K(eN3j*s&B;U{wq<`sqf<A$T12+{~GUbX9*xq[ZTyiT*' );

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
