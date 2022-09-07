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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'f1project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8NjDTr`yR5_@,=o$)yGplSY*Hjaa3y`/bPBZq4lfGOhVSm+5BLIngJC7keiT+67E' );
define( 'SECURE_AUTH_KEY',  '>$.04Bve|UFv_$L~;?O;!HU&+.e>y[J`~hmg37+PJiy&3FKvpV/lEUzkzcoEHR>*' );
define( 'LOGGED_IN_KEY',    'MFeJ<2,gL j@R,Zv2[<+IvXB{mC#K=*.`v&7_(rU|Km_i~TW1)BK5ja@|&m>B/8!' );
define( 'NONCE_KEY',        'E}{VXm5xU.St*bd[2zf3;1XfEvvwVs!y[DLx.VkoGOEvM6*sMnLWXp1*8M/j*/$r' );
define( 'AUTH_SALT',        '**@1~mL]6|u`54R!##7;^GlQPt5PwHS?|&05lOY<5TU<`vo;(ggP}Qy&/L Q7:g6' );
define( 'SECURE_AUTH_SALT', 'REFr[qTx(U*x$$(>PdSOJtd=(?6Pm3A$Y|b>rO?gXK44r^<N+22)((_^DF}*8a7{' );
define( 'LOGGED_IN_SALT',   '.>7li.GwQ?a>X2=Bt-(Ef..5yjp^=:ZBvgy8Ao,F^puR!16<)OPcOoWr^=;%ZaN1' );
define( 'NONCE_SALT',       'V=&-g>=&_X}d3ho8l^?_a7n]:Tl%YW>=^1[%4</v-fdJ~ ,>|:aV*nXF(rAxIYzf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
