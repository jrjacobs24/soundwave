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
define('DB_NAME', 'dev_soundwave');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'wordpress');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4QsRtnYE(Ufo5[2i+.~p6+{!46.g=%qh+@kH##@o{Y:CCt|=1 -(-|_LWAtVKH<K');
define('SECURE_AUTH_KEY',  'KMud-?pOx38YN-gzY4`P|N.<2iC}4tp.o.s6(lbsUn+?n^=cE]U(pRugAn9p-|eX');
define('LOGGED_IN_KEY',    '8teOA ,oM9x%:*kRtN(@WFyJuP=DPI7z@=m2*.j;$QIi*Evk|2.:1f-ds2~e`wjl');
define('NONCE_KEY',        'GJ>wL&.$$[xg?@!<-wxOpU`|*kp3MEj%>MhhOX?5>| q3~>`Nvt:&}U+uv2/ccTk');
define('AUTH_SALT',        ')*)[]&@mMkx3moMaTWe{;-~LitaqtO+RO$4XOmd7S,2}h>=ItOL|w-SS,TP~0BjF');
define('SECURE_AUTH_SALT', ' @A-h:{9HO.)E%XBgJHNA{=Xi>,XgfUn$qgh|e0]f;b`]mBpC!jzpamjKw|D[.Dc');
define('LOGGED_IN_SALT',   'e{fK]00XM-<4@~{gh2L+.%~iUV_d;+#V;:|i:-~{/^^++8%ku!r(tu(w-(}jX@$d');
define('NONCE_SALT',       '7#^(y|K#M9Hc8mVl?$UMr63.y$~/F]Y|<&qG`;hz@d2)tgRM,PxkxV:8#UoB<rN+');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsw_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
