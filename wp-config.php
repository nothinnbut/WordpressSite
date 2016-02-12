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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%28 *Q,rM]&1(_5^ycixW]?}2@;M=[m9Xn5|q{?,2:Y+<#5#.L.1r>p;,nN>a#Mt');
define('SECURE_AUTH_KEY',  '>*#E9J^teG],!f2]d2@zpsCdiIJe+=tnl~9Z[5]QELL7`We|()uMli[m?)}B1sQ-');
define('LOGGED_IN_KEY',    '6KpzmGW  b_OuI  S77;}1xSH+|SYi6vu 2apk1sOWE4zgEb@qcS+E38n|B XBm*');
define('NONCE_KEY',        'O5<k5_lnBI_eM3TyDRF,td?wPON}jSnt6yJ-7c?*2F>?+^$xZBUwr3kL1l{@F8jM');
define('AUTH_SALT',        'zZ/YubM`BU-G~o)F`kpIDwukkKDGN_poe8*wJhHGA?G3sV0Yuzi<,0- G0},)J[{');
define('SECURE_AUTH_SALT', 'I8qKyEHHx@ l3u^D1wovrE!|.h&!qj}aL%>lO>!((+6JZPiy7^uxEA-|wEyGyj*!');
define('LOGGED_IN_SALT',   'g$$L Q}1]=;qb-ebhG*d?g{Ss989_qz2lMeR)!+@lgR~pbdnfp9XV^Am_hQIy[ys');
define('NONCE_SALT',       '[g[+~<P Lc+i&S-3mHG0qLMN0:;ZuF[SkY>fjA`8^)Q-j/>8[^yLG2;kZ`Kc-5mr');

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
