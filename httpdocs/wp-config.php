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
define('DB_NAME', 'fd11187831_wrd1');

/** MySQL database username */
define('DB_USER', 'fd11187831_wrd1');

/** MySQL database password */
define('DB_PASSWORD', 'ULA9BlwkeA');

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
define('AUTH_KEY',         'fAg2xFmp40ZtIOVEwBg6jZpLIDbyvmXTWGRQpD1QJ7crUnE0WqSP0ZHbJK5p19HQ');
define('SECURE_AUTH_KEY',  'x12wXjCRlL2cEt0v3ZVIcFYseYw7QiMz07WdfeeJuWSRrEBxeqqVLJ00HmfpdtyP');
define('LOGGED_IN_KEY',    '8qM6AaIJFSgaMFH7Jb1bvWGHZkRfS7LMapk8wGBsEiDau3WxMIdpuqAIxNDmNvVm');
define('NONCE_KEY',        'iQZvs2USbDjNpHEFx0aLAzrmJ92zQbOnvoYHBdXCujwiJNbtYfAtwAPMHLyJ8T78');
define('AUTH_SALT',        'RM1ZNgVaprIGy5qv2ylo33XXoP9CF8I5dl7Cy49sUgE0hy5PSCIvdzkd6Mbp9eJl');
define('SECURE_AUTH_SALT', 'jW1HeXFYi8yduqrJWyAfo7riUKQl2zqELjHHY0NUYPyi93wN9Lv0jCZQhfiux8pa');
define('LOGGED_IN_SALT',   '2VngNGSeCsVroVc3F5twIRVH97QpcTqIpPDgkKbnFn699FzY3aIzNdPj1WDZajoG');
define('NONCE_SALT',       'Po0TVPMQmtdl66cQRbcTeKpZuOocpZAN9nTtm3jRIaj3FwyUoDRslhWw7MawDrtM');

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
