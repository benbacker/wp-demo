<?php
define( 'WP_CACHE', true ) ;

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

define( 'DB_NAME', "u524968492_bagstore" );


/** MySQL database username */

define( 'DB_USER', "u524968492_bagstore" );


/** MySQL database password */

define( 'DB_PASSWORD', "admin123@" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '*ZuURL?Co62Rp2;iqIHYS47_Oz=[E(46*Yi3D`&EY+k+3){mrqmV6p@$qI!g/z1(' );

define( 'SECURE_AUTH_KEY',  'x~;Mj}1Tc)9JMJH!_#HvFr-XDJ-1x+|n!/Kfk:Kq`ET-UTZ.cH;v2:#t^8gCB1VN' );

define( 'LOGGED_IN_KEY',    'dCl33NJ3<lZ2YB- lL {:?Z+>F_C+UB|0a*!05Y;j0j!ZMI*9+gOEo$72/HSmbCz' );

define( 'NONCE_KEY',        'Ub{qg@tgFX_/>|FwLoq*R&y/~-(_qfv>+Gf}p=K@q0CH4|~2!Hb*$M 0RbCWm+ku' );

define( 'AUTH_SALT',        'Lf9b{I+<>)m&<Jw9wxJnlv%k(q9u#n7CP<Zq`H]R0#EZXg(d~.P`*K5>@Zw<A_m0' );

define( 'SECURE_AUTH_SALT', 'fJ85z4Lo%nA.#&D$XqovR1b#263;<$@}=/bL:INGIsd-q/|gsC^{hIaFqj,F=(=p' );

define( 'LOGGED_IN_SALT',   '}<8xR #jb1qhxi9TvPI*Eed2Bvr%yO~Qb/R?0`su9d[~y6hvnW;ys@PRZf[]5Af$' );

define( 'NONCE_SALT',       'h$%%IDNB9xz/|8qgf<98{&xH]x-(NGLxp%L: E~Z!Ik/]Iqw5,|!-$m=u+p`3Cgx' );


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

