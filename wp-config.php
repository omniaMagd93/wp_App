<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'os38');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'om@1993');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2)Pw$3$Dpb]Vli9co!2!Ca., SU#$_?x)y|CY+drLe/_E6AIu6}IMAe@:YUK=?])');
define('SECURE_AUTH_KEY',  ',[axl 5A2AsmI2c>1[bZVKd?_<={+/_tF*5^xu{kw_;;9l{qfeO]O(4Ed0Fz#$f5');
define('LOGGED_IN_KEY',    '%jA3q0KaygNeN0UadjA{3^d(7|K$[0T~183=fuFb3;~yah>awI2jDB@K`jP}FiE$');
define('NONCE_KEY',        '?L8Z^L^zL$k70Xsw*AGT hsw!-[Bj1%b.H`fV%_pc/YwAbA.Gx6*=7^vBGVNzB!?');
define('AUTH_SALT',        'G}%KbiIeU ,:4X,T;{29?JhlENuG3(KT4fb`+PU W=[L?9c=bc%=gufzij?mE_4l');
define('SECURE_AUTH_SALT', 'G]n+q>.Rm^um1S 1 ~Dw@s(v9 yg+^$Uk?(E3,@Ly|v8gY[d1Wb]F9ZC(r>jO<#d');
define('LOGGED_IN_SALT',   'M}t;Bn=Q2jKI^6.S,$4%HCSR%$B^dK,,ajLdt(v}n*6kbVxuYtj3ZRAAg/By~{hD');
define('NONCE_SALT',       'v0lX}0E}3{Hf3 <7_^_|fQYy_1s>gI8uFUn#o(a!IFGzq%6&` =BAIfqP4y}6.Sx');

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
