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
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'Sylla' );

/** Database password */
define( 'DB_PASSWORD', 'Kaka20112015@' );

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
define( 'AUTH_KEY',         '|M9cSwaq=3gqZ4 QvqB0@*deE<llp^cLsR{wfW?57C]8JIT18k=Ea`hpwF*]!xZK' );
define( 'SECURE_AUTH_KEY',  'kUuerx^LlP~*Odex(v60Ms E?R-2EVSn)xFF7<M~HK3Bsl~Waf{8.`K;N6RTihA&' );
define( 'LOGGED_IN_KEY',    'GV^(;*y29ew~q6`>]t px]!s+E+OE4`dvXfYsgr<ue9cXK}Zbc G1N<XCTN?1,,l' );
define( 'NONCE_KEY',        'Kws`QQ>jAC(N`Sv|]moVZ8XD:fvfv)ZAS I2uZAQps`{1;}w{1^YoBDG&YU^02u-' );
define( 'AUTH_SALT',        'UqPRiGlWL1zROnB.]M!>-1kyIBGHlU`Yr&~l|O/9p?24>Y6?WASp2Ay3^MI]K%[n' );
define( 'SECURE_AUTH_SALT', 'AKx|3=o~67,s|_69O#8*JTR|B;JVUP?4D@&]8jli |@/li6S$Au*cOQ;P{!|=2;<' );
define( 'LOGGED_IN_SALT',   '?MBxwO::fpY(VoA)t><z*hKR<wq,1R!),}%W]?D(od;0@SB`[ppil/Li`<}C0_<c' );
define( 'NONCE_SALT',       'hc<*$5-1hVhYE,LOWb5]X2@zRai%N4.JKE)8-^PHS/l1GOSrqu1-U9QLV2JhF_&V' );

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
