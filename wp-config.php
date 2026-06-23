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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tienda-virtual' );

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
define( 'AUTH_KEY',         'gao,5|*<>0-RPC60is4;f#TNpvXaHI1a``J*R#Y%QU!X%A7O}EaaNQ*@F?DVTrQm' );
define( 'SECURE_AUTH_KEY',  '1kk_oFt}kUWqVcl]];&%*~+y^.;hTVkiskUm.Y$>XW_fC,U-^K&ZJOy&Xqr5d`Am' );
define( 'LOGGED_IN_KEY',    '}17s[/^]WAt3xksgov_}sZfI(;%+VZ}e;v6 !nZ`3+>(EF.9ha*l ^l]wv$CpIE:' );
define( 'NONCE_KEY',        'BGIM6a)?<Y](/jo^Gd(eb1|qcfLDj{&A[tTMMpnO Ti8[%L0spzzfmwG-;h2vPQI' );
define( 'AUTH_SALT',        '==IEx`M-E8/j^S`{0JOiLQ4LuXvGDi]GzXPWi.i.Ic-S@$v:ARAN!^nm-wn@cujM' );
define( 'SECURE_AUTH_SALT', '69P5-0mly:t_d`@?S&%C,]vr{,^E~Xn]}Bi1_kw&i+[H7*yZPOv-$LbR8KSFG538' );
define( 'LOGGED_IN_SALT',   '<).[aY&w+Z[U+1i<y#*=G]vAY~Il*2u!#@H_0ls/1DfGp9B@u+}!hXF5x ouD(4(' );
define( 'NONCE_SALT',       'bprw?xyn=oY%v>wMENR,]?9fOU|OwtoOsSscNHn=P6yk2RwHPzO7*FkduyE4=ON2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
