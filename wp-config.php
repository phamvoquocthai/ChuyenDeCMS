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
define( 'DB_NAME', 'webbanhang_wordpress_1' );

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
define( 'AUTH_KEY',         'Qp<hd7>u! Xa_[--^0_^;Ge)[]KEygM[Rtp@VJPY>b~YpF<4n3&+nD7*NMuwrrZ_' );
define( 'SECURE_AUTH_KEY',  ')7/ VM)._`Drl`3og*!QzZ_Do/1Io&2o~BYHtP<?c9lV/(& 75 K|YxQM>yq5obG' );
define( 'LOGGED_IN_KEY',    '4YG$yc*[{yrqI.;KPA7rxs DRw kz%^LkocK2y-Jx<Xs9 ~8i3757(u(]T-g=wYN' );
define( 'NONCE_KEY',        '3$XiaC09YqJ}8:%Z{kRg&S@s%a.awBFIoHQ0w-%JMB{N95ThP<!;9MNj#mvc,MB3' );
define( 'AUTH_SALT',        '!3p@YC,Z<a!>[gQ,W[^p}>.Tt8SE|`:6A9kd[?yU@uvuJ^q=<%prp~|y?Lc8UD?6' );
define( 'SECURE_AUTH_SALT', 'XZVY?>*X!ysS6i^{FY:[9z>*bUVd$3m=% ;>VZlz6];@#rJ@I+FYL<)GxIx8T-v8' );
define( 'LOGGED_IN_SALT',   'u(hSHt`4A!`-67c) $07)z~Yn]kd%N1b5i;P9YIO?&lW<+j%21&yXMwfDOY1`$?w' );
define( 'NONCE_SALT',       'OqNs=eBz-@,1}o<_) lB%EFd~6Y3y.Vs[teUNV.~KlMn1}(lIeH`9tB.d_1VRHLA' );

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
