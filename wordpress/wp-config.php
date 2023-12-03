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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baseSnooze' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'x5kXw)RL5!UU,CE+OQlSQ=%DE_mXmY2)%VB_#4v]~(j![]:K{<zgKWRo8DS&^dl:' );
define( 'SECURE_AUTH_KEY',  'eo2IaN Z@PJ^ver_8wId1MSux/j./oBe^`VU_Rc2~U{o-yw]|`4D}-.g|5;>)`aD' );
define( 'LOGGED_IN_KEY',    '}9FXmgDYBw^8|c068=,Eg.9uV3=nm`,dHQ~KJ^o5e^_gYH!$Y*WduE_0 |>Hf|,I' );
define( 'NONCE_KEY',        'B?9(N7aU8A5`Yv!z#glt{pU00)CWo-PvY`d[[JcKJ/R0jU%.ny`,C2=Geq^XZO.N' );
define( 'AUTH_SALT',        'A~S6([OUafg1cY&s87@Pz+whE[H;?NGyW_;@%G62%G/pDS=.MN6 q?teR^@{<yIl' );
define( 'SECURE_AUTH_SALT', '|G^kRd`XipZ7,*3FbkXd0w;Xu%JJ4&GC20N>r_Elw2xAG&G0%?u_E~mN&,,%vfvE' );
define( 'LOGGED_IN_SALT',   '%Hwl?GRk%,_e@X{7Cn~GPq}2=VI?n$nto%[w5&Ydnf;%:kk2 Q?!W-V27XeBiC?|' );
define( 'NONCE_SALT',       '7RY4zx}o>-AtJqGD9Mxj%X!v=rmc$[D?yR!IigKJi+/ <xXB=Ouhg;;x2cYXPm&M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
