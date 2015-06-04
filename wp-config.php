<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cakesite_db');

/** MySQL database username */
define('DB_USER', 'cakesite_db');

/** MySQL database password */
define('DB_PASSWORD', '9PFBrZa7isOp');

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
define('AUTH_KEY',         '(0v[DU(>7o6q{oK._hi-tocsJD@IE4|Yq=G,|-:fUbu_&w)ZH^o0G&o`>E(k|S$:');
define('SECURE_AUTH_KEY',  'OZ5+ 4]f7a-hLEAtbO.B+}x`x]xk$.7&4K^aMk&6pet;NYcnQM({[9FQZ6nRhx%N');
define('LOGGED_IN_KEY',    ',s{t6iE.4><UCPSS>x#^8S*&jXA*(z,W%S]?}5g0Byv-,@5M .7Qhxb](tH!+vgm');
define('NONCE_KEY',        'OxVS 4BPp?}1 &V]Rg2hu;Ly8js3cm(RapP$@?fS5+XFy@A8j:!w3o2W#i2K):9!');
define('AUTH_SALT',        '}>Ua*U**uL:6Hczu+@n>j:otRa?cU0?M+K_[E`mz8+$u=hpZk8$`Ks;dM$DeqI%M');
define('SECURE_AUTH_SALT', 'l@g{&o]*(-[r+JINze:bT&@Lz>~/Dgs]]_R03TsE+8Ss|KF&p#jzA}?2ku7>|$qp');
define('LOGGED_IN_SALT',   'hydo;Ncv6kZrN6Zu.YUbrG{T|tjm23GO16`T@k~VB5hNp{2. xx%/}x+MbuD ,k>');
define('NONCE_SALT',       '-C!3YxvCT<L%<~$4nL$va+VfZeuba`}Yd?c*:-8bWdkM|aTrJ}{<2dLw-[U,?4=i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
