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
define('DB_NAME', 'db699624708');

/** MySQL database username */
define('DB_USER', 'dbo699624708');

/** MySQL database password */
define('DB_PASSWORD', '8332omg!gmo2338T');

/** MySQL hostname */
define('DB_HOST', 'db699624708.db.1and1.com');

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
define('AUTH_KEY',         'q@drWDT+2BG,!D)3h4+U5TPY:}.RFZ;8PrF0#93W2]}?moXe&f/~$z3 K-@?tmI-');
define('SECURE_AUTH_KEY',  'uNCC_{=0?N+_/<WnLKCMTK*|e+c+07[|=I~Rtir*RB*JrW+wp`2$/=H:wpfSu*9@');
define('LOGGED_IN_KEY',    'cL|fGBGfx;`rXnozpg1?;?yhUl>rO,+t@ELmMg ,|3hHsr,30M9LeA&zj<muJ!#%');
define('NONCE_KEY',        '@dmUs+[DJO1DX~i!8pf+!sF>5N[~>EnPsOKpP$;RY-t:Jmy0+c>dbI{/l#i oBJ0');
define('AUTH_SALT',        'kj+5C<md1aJ?v=!&5:{S|:8XZEcddQx)nc7H:<`(p4G?Rf,6N6vtR8/s0~GWm3R]');
define('SECURE_AUTH_SALT', '%Y_^&D<>^%Uj 3T0`4T]b,W]P8+y}n;1LWmB&vPnun-ZSEQ_1eBk*oK{4Ex4/c~0');
define('LOGGED_IN_SALT',   ',yiQV;6meFg9ylNL|oL+*;t+Z[X=4PUsl|i%>l{C/@IP* YD}:4PpiA#u8ZfXmFP');
define('NONCE_SALT',       '||Z+3!1a-XsbVF7A|Q/P2m-zP$9kjX0?=xp+e|EhPmPoO:@+qyeDz2T@Y3nVf|yH');

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
