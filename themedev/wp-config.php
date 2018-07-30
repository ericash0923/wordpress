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
define('DB_NAME', 'themedev');

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
define('AUTH_KEY',         '(f,p~HzD)58[qp}5xentll~Kwx7/q&qG0Pq@5bANk4KUA)FXD&hm-p4l*qsM9dr8');
define('SECURE_AUTH_KEY',  '$y>COH[|qp1w@^Je`F*3]AdaFJn3XUuBi!4Qz`p&bk8t?_5X9:|@9$7dV3bQz!?/');
define('LOGGED_IN_KEY',    'LkgA;l4@In>lEI0FP%&~5[409s9:^p}:Y58Tp:+-}RD|sL+]OW`UrR-,~y}:.ott');
define('NONCE_KEY',        'j qAdrErRk0C9M[=zNlr5^u<Xl;e$BHF5(Z#N+%NvY[p?guaL[MT&O7vN|U0+{.l');
define('AUTH_SALT',        'J0xn%n%(?Lw3F}Smb47~%)Wxi2,dko ;->eZvS>Lc1+wy$<e$w{~r}p1/kP-{A]I');
define('SECURE_AUTH_SALT', 'j2sh[(;yuCDk53>;fhR=m_MwAD2ei}vl[IWjs(/&+z*z8}w3YyDQfYaWjnO4jDZu');
define('LOGGED_IN_SALT',   'p>wWJ:_8?Nl(5@vAp.QlLR?A{ctbGZsRCM1YvSkPrag?GkO?AL&eg~ww?N`<0feD');
define('NONCE_SALT',       'Z5CGRVK]-%D9op<( (RL>*hk^]c0L<KOSx+,Qc=rgPBwN&^+1/JU]Y$fMGT_ Fd4');

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
