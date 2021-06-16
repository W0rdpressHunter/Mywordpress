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
define( 'DB_NAME', 'mywordpress_db' );

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
define( 'AUTH_KEY',         '%zTKE~S_90g[0`AkRd1/6a5x^; s_Eq=Fwc/23]KINeg~]Y)w(>qPPZI|nXMEm+i' );
define( 'SECURE_AUTH_KEY',  '+^)Fu]*Z9e.0X -1z$u-1*ACw=79OM]E~cGJa}+S5&$2A4M8ojXk[dduU29mE&sc' );
define( 'LOGGED_IN_KEY',    '.7}jW%IdjFOJV&cjm@w[k#}zrRWGna!THJJn5(>U@z(F<p3[$Z?/wy2`W+l}H(YS' );
define( 'NONCE_KEY',        ' z*sypguq-,L{8RI ~3Sk3DZ.uz]T$:b<EyKfR1B,`2u0cf4]@M~5=!JW8rxqrZY' );
define( 'AUTH_SALT',        'mq6}yM/ky?b`R4IQ-K7^tx]XZ*j7<D=cAE8E0D2w>yl.qKIU2m}M+x0A55pz3oI.' );
define( 'SECURE_AUTH_SALT', 'NRZrbIu}vzy$pO9eJg.!C7aD$b0+V.]`$uF[D_}V8E_Z*Q/8wu4Cv7=>Yrw3BAdB' );
define( 'LOGGED_IN_SALT',   'q,tZ7!*w5-X=`,T9y_d%n~yv:iLzoxhFmKX/kEzQuY!=BPxXG%L*A&5Y^#:rrZ0B' );
define( 'NONCE_SALT',       ')AFaB8<A4iIY#E.<t T)wy4W2D$K_(`Y>LKHNd~Rsi Xy1=g*hTM#6:xTZ/&vXdT' );

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
