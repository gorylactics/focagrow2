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
define( 'DB_NAME', 'focaGrow2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'bxZx8[b~]D*ZUNgE[:>+vXA5hM<`:)fr)Twe3I=Tt~kc8;$UmLth**)iaO3C7fq ' );
define( 'SECURE_AUTH_KEY',  'Qz+~_5z:L=Ojg(%<(eo_0qtLj9V~9]{reN!<* KY]ew}Vyf<D<eo|O1M.|Q%;8OQ' );
define( 'LOGGED_IN_KEY',    '8xC]mpA?VzYa4k7^O:_zM{I]gmJXL%v_pM:Aek/DMecFWdvn|QA-P+1R$]m~tI<(' );
define( 'NONCE_KEY',        '<2_TRLh8Ujq2-T)$om@5<ob>Z6U(^A(_Dk4:Sa_J;x=V($t9od {2re{q!W-x`;*' );
define( 'AUTH_SALT',        'zc6wQC$,M%~*slSU#GEjJO`N$%VXXwV9n09tUGsP1H`RC~h4.70OPq$_}$H^;m=>' );
define( 'SECURE_AUTH_SALT', 'v{x.$&HWjdKz9vC%}%5^F9IIMcQ=}@HCjaeDt!mi=iA}+bs>ecGGoe9BlUCVKgHu' );
define( 'LOGGED_IN_SALT',   'YI+|a)%!]~UT3>TSx*<M+/Fsoqt;cF&q_,e V->(`txWGoGo(e;|JmwAly-hJb8n' );
define( 'NONCE_SALT',       '(|8c,cY<[C^fKWQxnM3C`M(etM7w/ !Glh+haeSkyZHoT&DG?*(j67ZJ~!wFBwKO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fg_';

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
