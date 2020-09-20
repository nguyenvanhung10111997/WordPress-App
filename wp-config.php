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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:82' );

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
define( 'AUTH_KEY',         'wZY296^#Z_]x95w cH&2jg|p2NAk1.|cX&7huPz? C=#q9F{T#8HO*Npmq;Nd?~>' );
define( 'SECURE_AUTH_KEY',  '+V+;?J0[L w4oidhoU9PIBIzP3RE_f`cUaiS&l$P:pVdQ*w-67o1sLUygvG8(CkU' );
define( 'LOGGED_IN_KEY',    'e-;6xV(%2#~@K;*3?-^higJo}3D%Xm^!Z}4))+F*@R~-qb$b52TzK~p&@xvbT8f>' );
define( 'NONCE_KEY',        '05#uEYnq5nW&8T`m;Ltqb9*P~Y@9ITruiG$xJEor}xA+J_]`K/)~!E8Ehc<F[dAi' );
define( 'AUTH_SALT',        'Td*v8`j^V{qs8N>cTT.{_FrTkgy/5d]O?s.)P&9^**i;#<d3 =:Zz>x|{$s`t;_I' );
define( 'SECURE_AUTH_SALT', 'K8qUB|$9n7m**H_$LCF#^2cbVW]M0?]C?zD7y,6P)Jse}KkNy+yp}b+g.e5xVU2n' );
define( 'LOGGED_IN_SALT',   ']B{nY+m[A/mQNcazBbH#K:dk|~H,-Tq >Lin J%t@cQ-X&]RN4El`rcBTKfb.%*)' );
define( 'NONCE_SALT',       'xyRKR!>M~u+ CmT_f>UK#IAmAK37X:}+`:Gsrzd01]3hv(1^k2}U:Da@!dS`,QJt' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
