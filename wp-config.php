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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'NcvDEDJ/FX6uRYK9Gyi+0yBMl6G5riF3A+yLDuWmkIQtsYUJWrvdgb0txe/rLy7OnGTERY1Z1WlIC9hpo3cUEQ==');
define('SECURE_AUTH_KEY',  'fnvDH2bW7DaHalwdMSfLP7MJfRLagAvYXSg1jcAwO3yDQ2hGNEsQMKR9W6xElXtghVwn4/8MnAvNTNR2WtNmuw==');
define('LOGGED_IN_KEY',    'hRTEw1ysvuM/QHoz60hbsrep2ek7A4Yi0VQWLuPBvH5ld5Mu9bd1J87Ea7VMUKjqLt4id9MMxkA9fx0CGS1BBg==');
define('NONCE_KEY',        '9ku+co+Vy+GD6CsTU5LVYrXfwIn8379go44LY9TPFVn2eIlKZrntEdNfAGM4gC1cW2mpgI0364uyYJeu7AcUmQ==');
define('AUTH_SALT',        'KLn1OTkS7W9aTlHP8E280DCBoJ6JV/kkw+Dx8uSbnGvhn432JGpc4mkc8x55E4Iesr7b2ovMcKtk9MSGazkKCg==');
define('SECURE_AUTH_SALT', 'AL/C8kPZclCnIKPBpedvZE8ymq+dkTxI3gcGWcterQAg6mPmaGl8cIBmOz0K59DlDIKPfsF0lJB8dbDszkN8GQ==');
define('LOGGED_IN_SALT',   '3LXBJQaIdZy62hGLyebfuyqpbZNPhA54TeUTUO2972EbY89tLrdaA2ffWSLmyGl0xhLCcHDzKHg2F/dsS8t32A==');
define('NONCE_SALT',       's7uZdVVt27AUjkV8utONPIulVdspZf88Qa1qTo5lcEC2Y5/DVJF99nEgqX5NSOmWW0/D1lPYpO5vrvPP8QUB8A==');

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
