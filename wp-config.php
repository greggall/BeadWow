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
define('DB_NAME', 'beadwow_db');

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
define('AUTH_KEY',         'FT$A}:Sgomr;R]ZktJa`8Lm)tzC]C%@R8]$0h0p/h7iRKR0~a|21G[ZqX|Y#M5BL');
define('SECURE_AUTH_KEY',  'KFsH7]u3-k9h$T:{4T]QhaA;-@HM]R7Z;?qmDqSDy{}3n%-j{LALmuL$|kuCzGv;');
define('LOGGED_IN_KEY',    '/iW5BJ,#l}lEqQ_&m6 w.2B`LtW,9VlM&yWM.(NC,kuqcN3#,}F?a2eve4@.r5EL');
define('NONCE_KEY',        'L7&s1`p^@;WSLRfSO:]+sWa|by^S^aY#(_Q%Q:A+3GJ*62/o?4Sv![~e-z}gZ:B@');
define('AUTH_SALT',        ')_vDvnzM} ?ehRx<1*%^|+78*|px8N)gx?OTwWY*R7Y@/|(Q!r)Kg!OomZR{*o:4');
define('SECURE_AUTH_SALT', 'Ui*L5wf$H;Fs7e_s,<Lh{Htqs$n.`+>G>Ln4YdGfq/`nESl2+~7hYjO:,j?goPVn');
define('LOGGED_IN_SALT',   'kjiSSkUp.2Z$V].YlG.zK?GpxzLO60Z c~qdt_5zGZZeFdy,vm/2vFgF=D: RRtc');
define('NONCE_SALT',       'yu|7lpDqih#Fi;mni 0+xk9>WSo ?STEZ^FOOE%t|@MQqNXuAyQk9ePySKd7&I_N');

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
