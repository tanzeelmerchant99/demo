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
define( 'DB_NAME', 'wu7f576U35' );

/** MySQL database username */
define( 'DB_USER', 'wu7f576U35' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wHZ667VK2o' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'mb_;ja8uC&ZD$jpq8lex5yyJ9gO)Ul.(E891T^PTS^kriL|t 3oFtm}11k=;.Rni' );
define( 'SECURE_AUTH_KEY',  'mK4:^NXJ]=K:M`rYdqMEY!;GN)hldhZw$zdI%A^56a8dT73HwvYLZ9F?>eJ;ES_~' );
define( 'LOGGED_IN_KEY',    '|;y=W1U.]& 1D_{IY.xvvkwVl6u+tbW3Q.o&a3A/ZM9!Y8r-;)g1zGjE?}t?KlLX' );
define( 'NONCE_KEY',        'gJ#Y~LSHR[,^l9jwCk&TJjjue:Aq.wf:hvuF~=WC}l$^x3FT(|O( DoXV,dF5Q[X' );
define( 'AUTH_SALT',        '`X!sws,B<p3P~H2H`PNT:atIyVn4tMF:)%{sYFn0@R5.G#3V;_;W4`jq5]4Yh@D4' );
define( 'SECURE_AUTH_SALT', '!wQ&.SS8 A*c@AV3dLDgM#T:,6%zz_a`[q[u!<FUQ]=r_-pvi=7cDgWQ]f<8b$!0' );
define( 'LOGGED_IN_SALT',   'XVDJ:;K8WkW%9|?bFdIb)!b,v&oV9m;TJA#H-^-kaK00~KBSAJ@<.2nD)#>~TR$U' );
define( 'NONCE_SALT',       'j5Cb;.G+[DJx9FPD5K8BGjw( O(c z]-,6;h5B{3YMGrpQ)a_ft5E{S Xq3mCmt~' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
