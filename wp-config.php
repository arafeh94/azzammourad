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
define('DB_NAME', 'azzammourad');

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
define('AUTH_KEY',         'id#Ix@USIvB3b!$Q(/S)XyKgLQ9,F[Dd.Qi6K,p/vEYY{k()TWc@05M^:s63CmT]');
define('SECURE_AUTH_KEY',  'Tj~n,VtXmJu%L?vhZLugptJGAL~-?u;4E}uU>Hw`4e]3xX=d!9teqU9*ZF/<p38=');
define('LOGGED_IN_KEY',    '#9b](:G%>38h]DI.JdRaSvzg+UD95rzZo6707P218~)4^z[of*#LfGtQO )4:=[i');
define('NONCE_KEY',        '-&YUOBm,=k6r)K>y@>?U(NYJ>LCr:a]I(<(ulV&&9G+nBAH->T7d9KQhtq|tEz2?');
define('AUTH_SALT',        'J/)I!&rK[ ),~hh;m@eU|$LpA()eY/p!wvv*6=.cnPjb`d(8.ti6!kce|?gbG]=_');
define('SECURE_AUTH_SALT', '$t6fKVnZ/RE&Ps-A/NW9&&*1~n-mu]e zPTx4bHwndZ2{A/SIQGMId$ol4-PX(ZE');
define('LOGGED_IN_SALT',   '7kA7[LG^#(7[[bv;cH.PKh9r5r)BHFf ,~KLlKhXxEw|l5]k)lt+ p{*h3xyK+Rt');
define('NONCE_SALT',       'A>A>Ff[&8UD)3`,qDz<<8g.Lwr%4}YC/X(m?f{ceTB`t0Yi3NJ*qCc!db0=FYBaA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_azzammourad';

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
