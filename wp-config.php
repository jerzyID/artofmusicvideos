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
define('DB_NAME', 'artofmusicvideos');

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
define('AUTH_KEY',         '6_`0/R`T/Z~R(xZy3^`.`T|4qc0zDCQfX<._$7Of)T_U1nf:I_G89y_Gpo]w&iF_');
define('SECURE_AUTH_KEY',  '}II,R~~aXv:U6G*,WMynv%sq]h[6Q|~weF} BA:d18O?Q^wFMo2n1x@-zh7>FMcu');
define('LOGGED_IN_KEY',    '+/Wa)3%@+VPGNh.>C-NNJ[5Z+7sI{lu0%;^We_zgf9sj>a!P;jA9d*fMfJ[yFPZp');
define('NONCE_KEY',        't<BsoA~zwsO`1he{fZ[sx?G]C;l@F 41TZku+P8^>6#=8bmK]yIGh>`3UG%Px_u7');
define('AUTH_SALT',        'H+bjhI>Ji+wAwa)pq|lo3!dmmr(o;3x1$m*cLhw:6(NGAw*)6LE!A9%8r7~kne{Y');
define('SECURE_AUTH_SALT', 'g$^h<&3K|.wio4VhWNd*8mekV]S!eI6/R,,0cT(c_|IH:O#V??e6n|LdJa/V~yID');
define('LOGGED_IN_SALT',   ' ^R0[MQc/kP:WW6MqMJ}h2NxoV-DJB9!aM#p)cHh.j+{ep{&K;)gpk:-yBG$sJyw');
define('NONCE_SALT',       '_u8L[eQ,LpNy`g&)#X8cL$j+Y>M4ifIeJR;rZ-zVg`NOp`dd&6[<ouPlvkIUMYAl');

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
