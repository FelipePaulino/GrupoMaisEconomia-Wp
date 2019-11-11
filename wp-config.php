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
define('DB_NAME', 'grupo-economia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dzn!-f8[pua]ds@ JJ.%?QO6.02PL l5}/sIeI!u,RnbC./J]w s0JA(oCE *}A*');
define('SECURE_AUTH_KEY',  '}XI%,tbi2}mMc8i6oT)H5]L^]~C|oE-]j8!e[nLa[?:NZ#T0#@YCwr/^mb{8]AA6');
define('LOGGED_IN_KEY',    'Squ=(T0 6)_JUAc:)%[:uVh>JKtvWv-[IGiX6a*{9!g~Gg}yp@!!x19ft}>Evb8_');
define('NONCE_KEY',        'C&Cs8vq;:jh@/)K%*JEx2=HEkXSA37mBL@.TjJjSW`z>_JRDiV=G]b-cU)#=m#ys');
define('AUTH_SALT',        'FNekD)ntnr~;pu)2wE`Ol`Zg%mAV,1?6^S7Obp! QSA8@r`=~Eeoa#c!^go9! q/');
define('SECURE_AUTH_SALT', '.(QMO-zHddZ;qr?`SU*jt+{&y:&AUH&S0.PZhEm!ZOt[0y ^K4`<E rm{f*%!Wl[');
define('LOGGED_IN_SALT',   'FjC/X:.iRA[VcNaJ}fnlDp+NI}Cw2awOpL4cK$Gm&>;ZUX5/@+ qS830mlQTPV~3');
define('NONCE_SALT',       ':gYAyv1vUv;5~Cun(YT9xqzIbQO!O`34Y4,PZMEtgW CIa(H$.UP*AIJDe l+@Q0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
