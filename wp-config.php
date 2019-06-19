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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '0eec94fe2f666ef9c8f6673df4c4c5aec81578fd19c28718');

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
define('AUTH_KEY',         '$YrkkqBg*kAp/JF3wP.rDu)/E^w%*XRo%apa(ICWk?q7|zP|U;Xvq-8<H_>njnu@');
define('SECURE_AUTH_KEY',  '-g0!BgjcG|ElDOWp/!r/L8ZMnRy!!$C>c@8[`1m&C|a+_c`f`ox/?L#GNMEwqJv8');
define('LOGGED_IN_KEY',    '5A:Q7Ygj-#$c%*?cKp 9lLgU:;x@wxF*STUdes]kRx,jHbWma=Ua62a(YK35}!2Q');
define('NONCE_KEY',        '(|-jbA5z&>of+fM2a!%b-S>E_)fFDNLGY@uw^}Mp<t*xh3t*>A/+oP0CZa>W[NM`');
define('AUTH_SALT',        'UtOII$HY}!|c;I09H)]&]EY8]z:L+F[AYmdQFabSi2:Vux?;*&pMMf(,/7dEM+;]');
define('SECURE_AUTH_SALT', '/^-i#_muT6tXosbDO]~mP?bw21UXgol0b)P/egzUPfw!m%,)>My<Ix0ytY{]G5wp');
define('LOGGED_IN_SALT',   'gx:(RkBejgS,7:5PyW|2WTwNq$5KL-Bk&P[KL<z1H,U{?H-HC_b}zH#uX[$!`i(X');
define('NONCE_SALT',       ')h}J1k>=FxbeU!Wz!/D/T~Sh8Kcu:,0jV<M@(QLoI4s!nv,,:N;nxYVc]%vrAw_Y');

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
