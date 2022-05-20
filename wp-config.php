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
define( 'DB_NAME', 'id18947376_wp_4c849c8257058d1c478095a61021846a' );

/** MySQL database username */
define( 'DB_USER', 'id18947376_wp_4c849c8257058d1c478095a61021846a' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cff54c07bd503ec4506762e17e558be4a96915f7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'sb%B>0D@=vE?CTYVmf-LAlAhUyK*-`b=5*M.%o-ZyIG%h9lGqfTK>/G`[A-u6Jyy' );
define( 'SECURE_AUTH_KEY',   '{rPy2!xuKC_gWU1!iLBrFB1f0cCz1LYBIzKU!&;e`Z`zf(A%*/CjNX/lry-O[qVu' );
define( 'LOGGED_IN_KEY',     'kvX^<&h7~)%eyFt*7:b+miyB$-cy*Ha|d)tn/O!L<SOxb?~?wn`}?w>#r|hrO}oz' );
define( 'NONCE_KEY',         '>[/Q_)jse9cpqF9&y*$-^|>Eo{8_A1nA?7 fSC`VFY/}_*+eB*1fuNMa@Y<Lqq)I' );
define( 'AUTH_SALT',         '21/LgXRrh;gu7on>2ErB F!+z7Fm%(Y@fh1ECKe:~ztPc.E8<kw+>!0>kkF$%%+K' );
define( 'SECURE_AUTH_SALT',  '$`N:]U.>8cM`I-n7n9yt-n,2=Ss;y$yKWVMxrEOn4|YwX(lT_nkKFdXgs).7.Fnn' );
define( 'LOGGED_IN_SALT',    '=)|]V`hR@O$ZMR {jokdO35C*{b^|#XMN9)fii`MSM/0e?~I[a+>r*Tk2ksQ1s^7' );
define( 'NONCE_SALT',        'fw`bTxy1_8,J-/;_,[4cJoaEy#=ZOx*Xm)wC?/393TU.KcDs4R&`( ;VHmn(dpTU' );
define( 'WP_CACHE_KEY_SALT', 'xTXweobvzZ4N+UW/#`B;QMN+To}w4]N@4j6;,JXk%DF8jVUw Npg@1X(9i__{wGk' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
