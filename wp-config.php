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
define( 'DB_NAME', 'e-bookinfosearch' );

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
define( 'AUTH_KEY',         '~t!V?E9fckn}*}2Ww)Jo*7*4.f,htE<wy{dxImbK+lH47E$6A(U,vRa/^j*-R(=O' );
define( 'SECURE_AUTH_KEY',  'Q>&tw!~{k<~;cHmeR4;Vwm4vxu)0+zKdV-&g_B1#e2i<jx2,_E5R<]R#-~i!5U#$' );
define( 'LOGGED_IN_KEY',    '$FgX4>0cd&ci$*n?jtgIk>L,Kf_H`,wpTrt>WN7+>FUZu]na1zpU4)m_n3D@Blmp' );
define( 'NONCE_KEY',        'NhQ~WH5Xt8t=T06lkLn@19CrxFhge77,g.VwHlK |$}D,0bhgw@X*w7!R}-v#L6=' );
define( 'AUTH_SALT',        '+VjOjX%_A5m[h2U(Z~U5g{Oj:_Zb&%^W>fpQmtAW=p!2lcqgA!53YzEt^#{xRk2.' );
define( 'SECURE_AUTH_SALT', '8R`*.Xm-O$$uQj{o.S9hJV8Ws6LK,,QJ&>4=pQW]xpU@T-BCTn{emb,%.x2(X(q&' );
define( 'LOGGED_IN_SALT',   'x$cnC$Q{sW?ynd%,)!VfV+iK~Qf+e#pae*UUhnWW+j!Zj%qzyE`cZ{|c2T(rwGCt' );
define( 'NONCE_SALT',       '<x8$@)i,Wkw-wm[5Uq*ASukqq[ptJ|jO=bvg9~/`<C9,jmR);FH9g/VXIUW*)wH3' );

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
