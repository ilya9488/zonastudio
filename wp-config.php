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
define( 'DB_NAME', 'zonastudio' );

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
define( 'AUTH_KEY',         'H|u[x27.ej+_em6C=zxKYud}~j (eFh|6go&o2w;lvj&?nkIF}.hd<ZP4A=$6k7N' );
define( 'SECURE_AUTH_KEY',  'Hrq- S1Ar)MAkY0jc/61vG4yTtt{qY-?.aklQ?AsxPq*:M7g}h? -k`kOxe[.(D$' );
define( 'LOGGED_IN_KEY',    '(JDq+Kye7;V/,s7orE%-7_|})?Cj*K+vP.*fpsL~D}.g]X|$S8j.H=|N84U:Lk}]' );
define( 'NONCE_KEY',        '{D$G|#awhoOs;MkBVU ?WM*G>[a8o5OVro_x]+~])i}6:m`Qy|c(t9|]^kGbaz1p' );
define( 'AUTH_SALT',        'vbqdE&qa0BC~u@IHIUA*UQRpo;~+GtxvQ%f:9(DX3(_gE u8l{pf!+s]:xQ$J<h;' );
define( 'SECURE_AUTH_SALT', '~8[xW&`W<?fJXby{eCRDn>]!3*fU|U0QdE}U30b}Q[6HFhV)t]D{7~g3dxhXT`9>' );
define( 'LOGGED_IN_SALT',   'S!n}3Ci]DKJ;rO1Bdzg+CFO0KSJXet.XC~56Gi-5x2L:lXr!rn|&oFKb8I{)w#71' );
define( 'NONCE_SALT',       'LhUt4[.?vpEW<GLOog&^BngEMzlsTMfqkRoIwJagx]x{&`@|yC5*&wge|3B@w: C' );

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
