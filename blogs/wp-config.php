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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u378357486_WSgCw' );

/** Database username */
define( 'DB_USER', 'u378357486_JEsr5' );

/** Database password */
define( 'DB_PASSWORD', 'm5xHJIZbOQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')fwvK!^4]OYLFV}u9liws*?_yup!1Tg]Yw0l]^%4XW/02bGwE/|>m}cu2q3-n!o%' );
define( 'SECURE_AUTH_KEY',   'Pxby#S|T5}+EL3ti]0s8S^m%i>@nP9:e3)(m(@{N?@AV|)lQJn%J;[8E/0.`Pcte' );
define( 'LOGGED_IN_KEY',     '+%?oCmb <N;?7%Mp=Um9VEENUn%h2jR|Y=[`lG|@`[5K{V<0<4}/RY(hy,GQ1}6n' );
define( 'NONCE_KEY',         '?7J@ia{.G@L.0?imN{sn AWtFV1Pn{Jhmtd&{#)KD+F5QF| !B.~2?J4j^aVPz`H' );
define( 'AUTH_SALT',         '2RE.a*joE2KaYz-Wq{-A3cc6*+s:c|B%&<HG&|8- /?R:9cD~!>mraj[y#?K9koD' );
define( 'SECURE_AUTH_SALT',  ']2.G^]*^{c+a,!/(Lrd`.Q.3NRxQ(fp)aFX62T-_n%BLSOaNrP3br(sTyX2xwkJn' );
define( 'LOGGED_IN_SALT',    '{Gd$m<lUqrR`N92ek6l(}ph*ALc 90X a{,[(U4f0<j:=i5qv~Q%~2/55PR[EYlv' );
define( 'NONCE_SALT',        'w^JZ=F`1cC`**M}`;;lUg4`!lCIvu$,l<hhj[!w#A{0t+6U{r<u).zJ:(YshmN&h' );
define( 'WP_CACHE_KEY_SALT', ')f%KE$C*Y3LPMdC<cR3iDt(Fe~/r#3SDL;A6%xqQF=cZVbA1hT;;39~c#5,y.nmH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
