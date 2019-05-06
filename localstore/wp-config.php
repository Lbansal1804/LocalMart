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
define( 'DB_NAME', 'local_store' );

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
define( 'AUTH_KEY',         'ulp2}[*l^)]P5ZL=N`U~d]3]Fz/S~hX`F@OCLh0?YZave+ta?C-ev=D*yAu,,saj' );
define( 'SECURE_AUTH_KEY',  's[;RuQ0##w(c]6t?voc<XVw}qk]qXVva(j+L2bXXp|+nSigl+TD<=43h.@H&?^9C' );
define( 'LOGGED_IN_KEY',    'G%qe}UK: x1=(OV!@<x<ME+e{C-$R?Yc0cqe2cYgi:l?7$PD1+5w~r1~j9>UT#Yw' );
define( 'NONCE_KEY',        'zgimVfxF<d8,co ln Ej**|+&U!hipH%`g<IS*h@`w!?#r@@0jIB!syoeYMg7_?c' );
define( 'AUTH_SALT',        'nv@T1@IEMsZ;smTfg)iUcrrh|b{^(I>F|gL8+EC5c1LZEeNKBjHg=S*nw<4P+*)1' );
define( 'SECURE_AUTH_SALT', '5VW)/z9o/0to @a:_AtA|*K]GZ4Lb5=$K<*sb:X^IqPr0h0*b|E Gm[&.Of?6q=#' );
define( 'LOGGED_IN_SALT',   'P`G9FKpZRLF`lJT9-sz](n7:Z?n^a0FKV+Ya`a:k|[9}R&3SE9ou`Sp:;ygV.{<=' );
define( 'NONCE_SALT',       'SKg:HPiSYIEB(uiqO)]dey6VB;IR;ym.By[y-% p[ASX>qo(1casUaXiBwXswJ2:' );

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
