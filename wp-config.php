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
define('DB_NAME', 'wordpress_on_p3');

/** MySQL database username */
define('DB_USER', 'pshots');

/** MySQL database password */
define('DB_PASSWORD', 'psh0t$');

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
define('AUTH_KEY',         'sn-{!@y;6qoA_xC>6FC6;)7|figNA(c7:wkG],`]Jt,-|X4_8Bk@Y=oy}xW]FD4u');
define('SECURE_AUTH_KEY',  '?0B7?8qq3]yZ}i^L#fAeh&ufcdtdp+$tAe|D%6&{uFJI^GtIfGzpnq)y5ba@[RKM');
define('LOGGED_IN_KEY',    '~26Gp4]j<P&>o%N7<|Z_?R)/F4(iywP`QAK.$D,|On#er``0yAwJbFK5gLyq4a4@');
define('NONCE_KEY',        '3zch0W{L_S0~G!0eZG{yvAwlNJWbX6Ezpjx$=4(|n9LnLM$jU:$mv.z+w/gwm)<7');
define('AUTH_SALT',        '11mJfY5-Mv1{V*`Cp5`0kpJpM^1VN7(lJG*k{T%PKf`A)UGk#e$,{<N),_-7DQA]');
define('SECURE_AUTH_SALT', '1PF}NDFWg804*ap^w$X}|H_pTY.:2G|>Kya]@Fa8fMyCFhnj^E_(hi_l/b!f#a:>');
define('LOGGED_IN_SALT',   'cc<wf&ir]&r`&_!~!J2:/Z4d!,8!T-y:F#TVutEZHa5r%VTYml/>QX|SoEIDGxtJ');
define('NONCE_SALT',       'a.?Z$G:BcJi_Z;j_lVH{^zMC?zM8Ms NeAL=6<`Ej-s_u|,{T+-Aay(>2u6Pz1^V');

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
