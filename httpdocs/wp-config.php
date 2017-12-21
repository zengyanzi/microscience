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
define('DB_NAME', 'wordpress_2');

/** MySQL database username */
define('DB_USER', 'wordpress_1');

/** MySQL database password */
define('DB_PASSWORD', 'E0R6$Hk5hu');

/** MySQL hostname */
define('DB_HOST', 'microscience.com.au');

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
define('AUTH_KEY',         '-0.2n r=5`n-sp)ch7&}wuuyc (e`hJ^>{Swi.3~?.#er=U~_PpfA#8~Iu|)FQ^h');
define('SECURE_AUTH_KEY',  'pf3$GWwN241S&d.:)9i3FEH#fYrL%yYF^K|^_5pVW1bMeUG8RI[ 3> )%6^7dd-f');
define('LOGGED_IN_KEY',    'U${|GW2FX?g3O1RFGw_6]CW.:>zmO/A|d@q/#;UsQP|Yefigb+V0r13<)Qns,LlO');
define('NONCE_KEY',        '_4>en5>teK(/Uyi@Kmbc-@R1 r70kV2a7&w=C} ?Y0wbp&E6LA(w5Q~taN@-OM%x');
define('AUTH_SALT',        'HU$u/#=f*-/g,6jDES1l#~FdAD=1f<p.;=*<C#AYS[?*Iq:8g8By;yAAtbbz(UeQ');
define('SECURE_AUTH_SALT', '5fr8#,Km}3]UMnv>c=OObUMDJ&/C Jof?`/?3)|RV*I9S%{oV}#c@G]I3Pd[5k~w');
define('LOGGED_IN_SALT',   ':{>J;st?]!#SMiYXN!zTY:Qb)N2lod;w>L:(d.cEDH*:qzXQhZTATe3j_bd}rw 4');
define('NONCE_SALT',       '$ZVlJMh|Ii:@.v!lY;wDR?OU8u<)+e<_f_=M>@})9e{ooPUl9=o5Vu8Bbw~EukSj');

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
