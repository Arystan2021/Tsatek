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
define( 'DB_NAME', 'test3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'ptq##U5Hq$Bm*WnckU^dsd6;^AFDu.NI6hg8]*o)_LP~^bipOa&yMT|IKL3f(b)v' );
define( 'SECURE_AUTH_KEY',  ' *!.T.U07=OMG:kinM$9Ojp-?2qr4EdciJy0{`lr>byhPu`;  b207l%MLIL+pD@' );
define( 'LOGGED_IN_KEY',    ');r$O0|GdIL|{R*;KcR7#zWc3io+t9_Ld}sV}j!X[&{UAp8$QQnpi96)s!U`0f8n' );
define( 'NONCE_KEY',        '(nO,g;Rm<mb58Isk9t:I]V&y!}w;OHLvu=-QB+`{Q@pf$eRnesb^Sr(%RjIy%_Q.' );
define( 'AUTH_SALT',        '`b[GEI5 sBF3VciA_7[NU{0cO_LUA$$t5*qt}6rL[ <y@!;v|W+nE~joQ>LH2`/}' );
define( 'SECURE_AUTH_SALT', ']e+CTC*=Pf}kF,y,UVmn7=QNj=?WNl ^h24xXN3cdOb)0UBdYejH+Vxb?ysvz-A8' );
define( 'LOGGED_IN_SALT',   'YI{9HuO;#k|T_+Y+iy$qrzbLj7]K9pUu|gOIDgNr2X95VyS(]@z0s:gNEUAr*U`#' );
define( 'NONCE_SALT',       '!B@7kpy/;4YYa4r%8?w/CZ/oPxJ~w?A}U#o.YBRgLrPJory3Q%IQkTI0`V:-X9*>' );

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
