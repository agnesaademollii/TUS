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
define( 'DB_NAME', 'wordpressDatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Vetegesen1@gesanesa' );

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
define( 'AUTH_KEY',         '2KWmt0C!ny{9i|Fe7{nJg @U_2i^B9cg]2_k((<Wy|bFUp%OMAYY>~YO|x?lR=Fy' );
define( 'SECURE_AUTH_KEY',  'hpv~MqPfF!K@2x:Y F6yZ?gdc9U}NzhSG]rHEz)s_O9JWXyzJK*ShQTzgzSxcb1U' );
define( 'LOGGED_IN_KEY',    'O{fGfc;}7{):2sM[<N42aig>NWZep[!w5/~JyMG<3Afb^x_MN.V]qgo$/5VqTg*%' );
define( 'NONCE_KEY',        'mJcXVi#Y2o_(2=W~krg,:eU9X=Ot7__r*`8 %]pjNkV[^K,VuUwqD%F)#x[s-oDS' );
define( 'AUTH_SALT',        'iHoA*{=P+o,O%[u0f #FW!W4h3ex:GzI|8,Q##q8*U%Auc&?{KiBY~G[YizZJxOq' );
define( 'SECURE_AUTH_SALT', '-B~4sG_g2zI%iyXqe:BUF,n]PALGkdNQEo<OY,=t0ozX9-m<fz48%ae*~j+4NFdD' );
define( 'LOGGED_IN_SALT',   'w+V=nmf^W]-<1wi7rB+)|rUqIs&f}Ffqun)%Rd ~W{~{o)&l Y<UxfeJ1jKpw+1!' );
define( 'NONCE_SALT',       'eGkX8hv;4=!= >:f8VFc/M]tukK/I3vp7U{6QkE&IpLs(l0yWqQ:%4S-]Kuj8=xJ' );

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
