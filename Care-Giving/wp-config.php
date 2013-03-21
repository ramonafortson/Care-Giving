<?php

/**

 * The base configurations of the WordPress.

 *

 * This file has the following configurations: MySQL settings, Table Prefix,

 * Secret Keys, WordPress Language, and ABSPATH. You can find more information

 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} Codex page. You can get the MySQL settings from your web host.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'democent_caregiving');



/** MySQL database username */

define('DB_USER', 'democent_caregiv');



/** MySQL database password */

define('DB_PASSWORD', '.4MGU7QqDhuV');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



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

define('AUTH_KEY',         '@H#D;G#-A9J`ui!v{Z,+0cB|9qEp{mua2U}Q+_C@l8pcQcb]wpD?2}xk@Tlq{tBH');

define('SECURE_AUTH_KEY',  'T4BRhV/YXuf)Uu>,{4iFgaRI^4|,p-NedAv_$N!k@@x#[-w@1|hYDh,]D9f1[|t+');

define('LOGGED_IN_KEY',    'l3@./?S!f<c9%@-z<pq;vY=4#sncSo,d1^6;2#-ZSD,`]6+VH]#/v<dq4n }|:^>');

define('NONCE_KEY',        '5cU Ik;42cT.=!>7U3quP5&KjE=g?dm@RfN3)QeIG bK!xX.lx^gXrVPPuCWNmzv');

define('AUTH_SALT',        'K4;r=+=G=;,ZW+uLRf$=]UM0OXK@GR~BoG!tb< G.{Uk/bZ-6as22`x=x`ximLBQ');

define('SECURE_AUTH_SALT', 'gR:?CYe.vs>gjU4V1p$&HSi$~qxaVx`1IMiZF8mClVwd:dx=:KTlyf/s#wBfYCq5');

define('LOGGED_IN_SALT',   't^)9jiKOYTT]^E:1C&<&d|3%,DON#L)@jm:?Wx8N9FN|AEGVZZcu[.enrX}gfq1D');

define('NONCE_SALT',       '7<Fw^]P9:#CPlcft+|~UQZ0W^DQ!2H_84euH{>Fn(3V#&_!y@k|3L31Tz0#WKQ5O');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * WordPress Localized Language, defaults to English.

 *

 * Change this to localize WordPress. A corresponding MO file for the chosen

 * language must be installed to wp-content/languages. For example, install

 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German

 * language support.

 */

define('WPLANG', '');



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 */

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

