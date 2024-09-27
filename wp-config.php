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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '[WN( C`i|47z%T=v<?{>}!_Gr^v9FU94p6k98K5f4tG)4X/BG,3D``4J4S]LMHCF' );
define( 'SECURE_AUTH_KEY',  'w2o [oP^4>D>8`g!N)nWPWn0<@KFy+Dr8RvC&P+U}T/`.|58hLR=HN4Dbdu~E$Hg' );
define( 'LOGGED_IN_KEY',    'mFgU*.J~$rnIbWR{3t^&FVgz}zb}s6b_/R8=}gE>B-l^JaNLW.; Rbn_.m7r,TU2' );
define( 'NONCE_KEY',        'bF=k,[bSl@;;]9cVS]+zYNMc2z9v`A8g!V1L!bT|;@hcFYwV!!H)T?mpf/!$1&w0' );
define( 'AUTH_SALT',        'KC/tO;d51G|a^q9R#T{ jvQ$~rudeqf3G%;m]/A1k1kdu3iC}PT,!_iWN6!N+DOq' );
define( 'SECURE_AUTH_SALT', 'Mk^HT16b$Q/-1~vo4Y^WQkT{Jx$,7HOR6X.5X&)x-JdHj%8Ta{a.02#9CiU/wcY!' );
define( 'LOGGED_IN_SALT',   'Eo2L^mYE 8U+V~-0 p0+mO@Njl&]J]uGc5|oL8<;0sXY eSL{8mjC`:|E&(K3k],' );
define( 'NONCE_SALT',       'EG*_FE3AYiSR23EN-@INd4,P;QF:8d1mec<|$m/KBv%!?fy&{ju2x220D2+wyo@j' );

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
