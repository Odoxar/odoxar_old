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
define('DB_NAME', 'wp-millidesign');

/** MySQL database username */
define('DB_USER', 'odoxar');

/** MySQL database password */
define('DB_PASSWORD', '635362');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'FuAN2<}4SRF2;!W,%6-YAl6G]wHl^a,2S/@^}vefV`oSWQ<uZt4CQTRqwHK6Z-Pf');
define('SECURE_AUTH_KEY',  '_nB_Rm1G?;s~v|<(Vr/d~1+dl`Obmo#m;w1JTdAmrTXSP^(E1x/2Te%{8TC+2|)+');
define('LOGGED_IN_KEY',    'd`%:L)%/pzL[85%9@d/Qz:%Wl6R$fZ60z+z+F]C_-~s#FmY^P!dA9U,+z.gI?XjV');
define('NONCE_KEY',        'GF(^V*l&NG=-o0O809_UZFN!(G![a`|qjFc/1l<i0du,mAJR9,z(9xYxj[v]%j,A');
define('AUTH_SALT',        '4q*P*eIU0`-YLE}SM/KfoXe[u;4)C$Ms7j;0=>wMCT8VBfr%;$,cA+s]6P(T{2nw');
define('SECURE_AUTH_SALT', '7IRxS9M6O?XuwAwroVOdKldKkm08rxYUrbSw$hrA`*aXJ|e,fiof$aW<2F[Jyt?o');
define('LOGGED_IN_SALT',   '9rgS{Hnck&>Ew2r63J6%,jPGT?.yyNP)=X}GU->Q.=Gga>t4}n6eXP8cMXQfx:#q');
define('NONCE_SALT',       'n;q;duU(P#8fv><hv@bl$>jr6Tg/haU>i0,^S$hd{Ww>}PI]pdRw&oKz:^^Rq,c+');

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
