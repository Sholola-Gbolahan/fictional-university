<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tmx%bV]ZRzuD$E %QKP&9}E*Dh6mU`A[2ZaX4<nFdVL3+fF[JONwwI7,;D$+b@hY' );
define( 'SECURE_AUTH_KEY',   '~f0p#G_AxN%Z`;n_9Bh$}I<xYd[&LI/2!-[`*=9;cA=m~(>SZJceDyy>lfipTsdh' );
define( 'LOGGED_IN_KEY',     '9)@4)n`3TZ$KdmHjL 4HK>cL.*QBeO7;wCu~-z0u`iTLQ<a_pEt(jG/F-r,yN/<x' );
define( 'NONCE_KEY',         'W.uWZkw Wt[eLnQ5kkXqSWRx03p_/>tcNDD^G^u$-M_W0}9-7z*U24YK,dW}yXz,' );
define( 'AUTH_SALT',         'O}duT:.h]r9F5`5!9@n*cN&O<GB_frjfhXBoCB=ct_]0fd/3+}(AVMr5^>7UE6bK' );
define( 'SECURE_AUTH_SALT',  '49W`)PM_%V-4d s9vst<m-6IXcJBnG[?t+QwL7&N`9><{a.s<^7Fk6nM@21M#1x+' );
define( 'LOGGED_IN_SALT',    '!R(FKEa%Fo0KM!dRR5Vk_zo/8H|}<]IX|QLQ3E|<`B=iM}M6@!b;:eNTARQe[%D>' );
define( 'NONCE_SALT',        '@v^C8 ?[?@ }{uOgG#!,y!J`f{#FsmW)a,8E$ e=z4j-}G0p[NNd?%*3$iselC)7' );
define( 'WP_CACHE_KEY_SALT', '}R]nD`u`-Di:bumzwN^yl1hH9s@M@f:&eP1@pu@MA>*pU#.=QP]~x~4u)-#L^7@9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
