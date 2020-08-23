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
define( 'DB_NAME', 'studentmanagement' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_^kuZH3|!U0OanmuaC9~!H-rCq-?e3@{Jc_*M=RYWe[OW/xuILe01jydO_i:#u,T' );
define( 'SECURE_AUTH_KEY',  'Z~[sbrUF>E!jNAXiL;ht|L5N(|0X!%e_fYJ_?Z|L7l[P4[J%=*p+thc_Oo;k5s0,' );
define( 'LOGGED_IN_KEY',    '4v>RC*?T!/6T6AMk_SOfINeNe7`h#3`oI-%C(?k3([e*z>>Go@%4nf9GNdIwGEcb' );
define( 'NONCE_KEY',        'xp$).^WS2=mnwW8_!P:E!!bXHg!gEK|=}4h+#tVL7[LtI:Hh:EUl@R{c]-M?W1|?' );
define( 'AUTH_SALT',        '% qS%Z$wM}C#7r:8X;<5H)+U|zTpo}Q=nmKiSK|8 FGWb*qlA!lpi02$[G7Lla08' );
define( 'SECURE_AUTH_SALT', '@0a5*:tT%@d`fdCy??ZGz:%[N2ke,;y+hPr/3jD(zh,F/<(2}0zSnmsge!~/1#iL' );
define( 'LOGGED_IN_SALT',   '3Ifrdp#rNJ9=0n>8U@?u/Rhydjx:y:~7UzxIwR9Or0[__/HZc<v[)^z;AI[D2uhe' );
define( 'NONCE_SALT',       '{1YefAP[onZG_)H$4ns>jGie1ZWGxoiJzXD{!{eRMmn:mFtM^a@W2nXSv;U@>iy-' );

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
