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
define( 'DB_NAME', 'SteveWinwood' );

/** MySQL database username */
define( 'DB_USER', 'SteveWinwood' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uwCfLnf2' );

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
define( 'AUTH_KEY',         'b }fb[F/f_L,IrN;PuSeqnz6VP|@bVDlkTKXiF6O$dB@DACh,aeCJ;3JdTZs*XH)' );
define( 'SECURE_AUTH_KEY',  '(Z[HAkJIsb.DSM~2cR{9#nn``AO}u7&oUv({@%R-(`p4dRcp{ctEEW12X1MdBq7L' );
define( 'LOGGED_IN_KEY',    'QBg]1hCRZ#5xiN=|@f]L^3Q#&Vz[na?R`&k%GoXfMR57*-^5oLK7Z5.9dB*16)t>' );
define( 'NONCE_KEY',        'OW(R](.F}sz_>,7]H5@bfM<3vy^D&ttU?NCM&?]F-jtrab-Q|.h;|,<oV^i8kE^y' );
define( 'AUTH_SALT',        'sq|q*Rk %*DlnT<#S`{4GW[ SO(W:*G5h;D,&M`p:qNH{R{MI}sXd(koI1Ik6GP5' );
define( 'SECURE_AUTH_SALT', 'y+J8vmt841|g8G?Z.4Y<JA<luG.[p[)pO!.!L<zEWa!zN2l:=[ztsTq2VuXmyg<3' );
define( 'LOGGED_IN_SALT',   'CEA^5LO2+CQ,q$lXLg>UL!%RE?k=6I>>(],.AAAI!&Pb([JMzf33?>Ex|@J?o5Dw' );
define( 'NONCE_SALT',       'Qv|U#,a%2_T~Ww h{=f-n|N_VD9,uo0Vv-L,PrRx|`@Vn]e4,f{k1]an9I~OeO3L' );

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
define('DISABLE_WP_CRON', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
