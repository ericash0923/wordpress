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
define('DB_NAME', 'woodev');

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
define('AUTH_KEY',         '5k(`kPPz=r,Uu:~ndh.Uim{pG7Y>D)%@v((!yDLl3#a3RvDMbM#[P|v&K]-s` kk');
define('SECURE_AUTH_KEY',  '@dEA^r)A*)ME#GPF.|s*%Fbp*fwkh_~p~aHaQ 0uB Lh4B,=%-UpGQ1.KRPAtjr7');
define('LOGGED_IN_KEY',    'B%ATmoo//-ST@yi6MU4*t$zfevH5ls!Yt3|Q`,ig8-0`qWp/ 9oHH,R$~cd.jxcn');
define('NONCE_KEY',        '0/m_wsZfB!39lG.e:@,j{a/y+*>G2FQ`fvk84(LAHSIrS9Wp?q-isL_15j.e,Ee)');
define('AUTH_SALT',        'Do!~:e~)ugZIh5.La`apRtn!T^oRG}ZJ}O!S%j_Z%G;MrX-v2m3<JZ@vC4D8RMuS');
define('SECURE_AUTH_SALT', '|K`D}n5bWV{Nyj=!Tcy8<_%5u3FQ^0a^:4`O[NQ(;+@9yruuZu:,8C:(^)+}SY$ ');
define('LOGGED_IN_SALT',   '(zhYLoQC9(*t?lFaOx5}gilqmI~L7vB+qO- VV#S^7)9x_g)Pv%VYR!N|A!0*}uR');
define('NONCE_SALT',       'HbndBdvc<.tb_$0c %08%pu4Nc([R3+V~=EioZ@<B}NY{k8*H$vW!PL|iFaJpfIj');

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
