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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'search_plugin' );

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
define( 'AUTH_KEY',         ')~yHePqhhDot5:e]7oG;%Xw4{#=P]r-F2O.b4({a($da RFs {*Ezx=4ZQ`m!NnE' );
define( 'SECURE_AUTH_KEY',  'T7UYp{]G*6F<HEf_8,b&wYx<2OP.w+/$0ra/!Y5C>|_S5Fmg@7 Q:*GXsQMn]5Dk' );
define( 'LOGGED_IN_KEY',    'AK!j@J5_`BF&1)3]E6v<@U]B/}f? 4VGK}Ev$Q:SZul1ymZ4kP[4uxu:/xqoyuLr' );
define( 'NONCE_KEY',        '_rGn4_!R3P`~4/Q*5C{x*QZw.H!h!.Nx!:seiE.q!I.aF+;N|!k#]PhZ^*TymhE/' );
define( 'AUTH_SALT',        'DjQPau}~+u{Fk_#MBj-),R(E)$5fc5)~DKhmahLt:[},r+,0~&;cz~$c|/mQ%JT9' );
define( 'SECURE_AUTH_SALT', '0%TP$+K8*WHpj;VB6Hg(.is@#Ak>m7pc!-B626Wl%Mi748l43VfL1KO`}{s6:R/e' );
define( 'LOGGED_IN_SALT',   '?[@.0o;z_FZ,[ggEL*COYtgQ3hPn=29T[g$^]TF@JTA)l^BsGzGu/5L{RE6J%B>A' );
define( 'NONCE_SALT',       'cq87T#mqI8U)OJ:[V1:.|V>90>0AYy%_HU9IaGqHS)p9Lw41Jz{7L&jq{L_b%^qB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
