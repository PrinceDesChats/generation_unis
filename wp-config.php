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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '8d1ee9b762567518a90a54a0bf08b538f21e6c5eb1a33465' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '8MXlo(6,0K8L;-=R%gR[>RNL%OeyP=Zc0)QMIUf5)1C(Qhs2g,$GYxN(iM`xT.A7' );
define( 'SECURE_AUTH_KEY',  'C}U]OMR>07*>$01GleG;z]a`@rjrElP0An(CqTJ])GCu 6-osogZ7khv3!)LVqrl' );
define( 'LOGGED_IN_KEY',    '1+dIFtbcd|>xPHR$,61i(I|`A~~{[$ [Rd1U%C;H@@63z<X9HcswZcXh*J8D8e=P' );
define( 'NONCE_KEY',        'R4$ciuU%[WK&cu0/m{}SmwO@-M40:WFFck*SC/.jq[.pl:dOe:~!7N;?hLC10.h,' );
define( 'AUTH_SALT',        'bOKr8qpD%,?6G%nP-&2tbM}.D@G#rdfbBwNpgv}`r23k*KMm*mN7NlEF.OjGv3tZ' );
define( 'SECURE_AUTH_SALT', '7*Kr[7`8BzDnFF^,DKxXJ#vS(3<%,mxep?N%`0x~?t5-|=Hhx6AL#OU%VL,C%21a' );
define( 'LOGGED_IN_SALT',   'OD9(Xe*mK[]($y,QL<VI^Wv4Z[e,%uW:~af|E|_6M(Kl)dXNZP^ B3!C?g>M++Hs' );
define( 'NONCE_SALT',       'T7=<ixu3|HSw3z4i!sfq?=qm^?%d2=l~:kj5<bGkQRV~GlZ&dySW-OIhRmFmJ>HP' );

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
