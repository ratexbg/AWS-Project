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
define('AUTH_KEY',         'tAogYnF#+,{vk21qm0stc;s%|Z?|nNLDsJYK  Yt+?c/pq;JSgM}r734ib=w?@{#');
define('SECURE_AUTH_KEY',  'o-4=.qWuAok)r|)iO]Q|+T`d++u0L Up|xS)!fA!$cd?pavCKWavi|-+|X@-O1:!');
define('LOGGED_IN_KEY',    'ZIeiV6[&sBhH|E ox,x+t3ffKx`AFM0gfQC=:i+z,f]G2@hG@dErxDYbne0*rvL7');
define('NONCE_KEY',        '((KB%snT# G^pHJks(x|z|;A{m#:H@c[/13F%CzD]woOyj:29Mj~Tm~#=ED-gDSC');
define('AUTH_SALT',        'TN,$R;u#X?ED-YO;o`d(+qTy+?:I|wN{.GpH$n7x:z_4(<~=+0tyc@<EwA#r8q#S');
define('SECURE_AUTH_SALT', '**TnTK*+abbU*de!9yE^pF,~_hGJp@%t%iT>q@694W^(m7>e>qmURNFa(-Jzh?E|');
define('LOGGED_IN_SALT',   'sAv}gFdjstT+?J+S;(^0 1;LJ4#s6_:>uTy>.3(++&LU+0nw%kmoS#_6>E(CaH#f');
define('NONCE_SALT',       '+-B-@II`f3E|9+WM@6A*B|s/&r[m~2~<!|DtZwFr@-Er>qC1z|`T1C4rlH>?T]2<');
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
