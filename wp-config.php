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
define( 'DB_NAME', 'stg_nbpsdb' );

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
define( 'AUTH_KEY',         'T@L}^a1OC3IF_=EtpQVL:1@;T3r5:P>Q<kw2`cF<)jM>=Uj:!3on&0I>,Sul$Ig)' );
define( 'SECURE_AUTH_KEY',  'zrfkT_XUdfY+s>l1p1wHJ2Ntp.47fhA<$oJr;H_J9!5c|A;br4[I.M}%/ -+D56p' );
define( 'LOGGED_IN_KEY',    'MvQrVHS}TbQ2}mb*=*4Q4L1]yu*v=coOBw3)Wnw+{)AwBQ{2sC|kay_m:ereaA>l' );
define( 'NONCE_KEY',        '<Pgo%xH{0W48#R}OfAFa{#OiY,HTZ9nf[jD k(S(F<kq;`fNWl{Ex@mjs%%LQ7e~' );
define( 'AUTH_SALT',        'HTtH3pCs(PW;GKbU9V.zJ8JxxX3CD;l$k(p)HuflrJENH8KtA3]p.$JZnxM$<[V=' );
define( 'SECURE_AUTH_SALT', 'G+a2N/E@j6Tpl1.==.2n$KLk_/EWfXs@y$WSlvhbZguJX/ncnKjZx&m+/g]o%o%T' );
define( 'LOGGED_IN_SALT',   '~J[XJ^l`hlYE?E<m0,R#z=ztPVuC,emDdK$7HA0+$aT5>wA+QxE%omH-Gl_}L+=7' );
define( 'NONCE_SALT',       'cGAqmQ1nBw;vI.~jgFg7XQXa+sWdT`uef&OaMc9o?ikiHl5KqHHGkf.9a~ZsTIvm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nbps_';

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
