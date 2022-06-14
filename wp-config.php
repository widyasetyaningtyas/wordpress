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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belajarwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ahpxVoec+XfkAg`;5wC*kFVWiItJ`O>l7ca(,P2d0|b@r!U$uhR&NsRP1ab+mD-h' );
define( 'SECURE_AUTH_KEY',  '@J0x)tSseYSX3~Wq!8mvdw$;fjju}ac*qP1ayg=l!37hhXGah1ZvE|2l^~/a {&x' );
define( 'LOGGED_IN_KEY',    '1!yCX]^o^DQR4:Gdv5L@qpmB<B9FJ}c)VKeb-p_Bd*!x=46jJ3quYr>fYp<Y=.dZ' );
define( 'NONCE_KEY',        '#*9:l3/ZZ90a3.OpNOHU@0ch@SPTa[!E$FNF]2OI*vp>l1ULK4>k!$}j rKn[{|C' );
define( 'AUTH_SALT',        'KKkg8sW*TKvq(ic`PUcFX9gl;kW#.$c])N_o(0%6k]uKMvSEhe7ALOOLgU2@rTs}' );
define( 'SECURE_AUTH_SALT', '7t/FhL=lU+C:G,`@1OAoO&?W/,un@y52}x?gr%[NEyiZDW>X-z|F4H6apsB?Hq=;' );
define( 'LOGGED_IN_SALT',   '08YNY5Pn-ZpW}7*g~YrBLU!k?!I*OV<ZztH6#T!Z%YYQ! aPyX2X3AO/BSGnWF3 ' );
define( 'NONCE_SALT',       'K4@p]nMXrmgOxR?IuXj>pAHv+ N|=*AZc?+N*:G(Vy$W==%`{5z6jAswzzYn#i/f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
