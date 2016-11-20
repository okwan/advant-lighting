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
define('DB_NAME', 'advant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q^6>osR!j~[]}oS |TLo-~neSRfa8xc~dU:orvxLyLEW%sB-o%F`L)&slD6z;PEi');
define('SECURE_AUTH_KEY',  'y4;pw1GdJaPmm5sSy[*|Jn<JB3G5/uI 5uA^{j`9Y%8ElBK~@D(>5*F8#;f|FB,O');
define('LOGGED_IN_KEY',    ' ?@S?~}`{eR5r;*O|@BVB^LZP!SA0MW-;N9sFbW&511G7Jp:pdp a<a( $~5TK8|');
define('NONCE_KEY',        'Hy[TT_T;68zP1(PO[B08nLF o=(d3W]J[m^x+5gKCpJhM pUr(3t*`okK@EW%ytr');
define('AUTH_SALT',        '%2r+[p_pMg5uPDzc3xY>l/B2@.~8JR-4F`us>t5]lyO0({,HxYhPSk&Ep^-we|=S');
define('SECURE_AUTH_SALT', 'b6:%06I6P^Vvj@88_.Yo{[{wk/LnQ.fX4gUMTW.N>_VJ9!u]a2vtS{9Bsb4FwvyF');
define('LOGGED_IN_SALT',   'i8Lq$G,;1:QLH`,zU49gH&E3RzMm$p[d133n>()]&@+bVIm@l*y1;4>5!-V/$-A/');
define('NONCE_SALT',       'eD+8W<9WiH*^Y^W6>O&J)cK~^.Xw@q&h3,y|wW,hFZ mS1iF0%48Ji _Le*!LV,z');

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
