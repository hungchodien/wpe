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
define('DB_NAME', 'testwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')Z&1bp2x9]!l10[n8py{q<]t&0,H)vj^IDDV}Y{h)(0DcF 0}c4^=Wrk}SOW%X c');
define('SECURE_AUTH_KEY',  'b>,Eq3N{z PgB#{NIP(_C2N%ooPeMIx17_c7TF7W;_DlpCz9-b(IfJ~.iv5Wwt%%');
define('LOGGED_IN_KEY',    'A1<+A[!7OB{QZ+v7dG~AgRGk7NG&rC`Jm5Q?WU*/kGTFFmQ14QM.p;]OHV6PBujx');
define('NONCE_KEY',        'eY@7}LKCT3(ypU0tb@0-P(%i-/*d/_L)%WmZak]be| @H(_nA$!CKkiP@WFA18mg');
define('AUTH_SALT',        '6|qv6j6FVB!%:6(j$7=N euq,dv$t`#ow?h}2|]L,zwTFh}&qwGX5>cITj&xxT(s');
define('SECURE_AUTH_SALT', 'Ege7<YSUZV&QrXx6ji33QAv%AXr&C#b3aIH:NxoDi;w4%=hR-Wpj1ALF3#4Yr0t_');
define('LOGGED_IN_SALT',   ')_Y,L1|2Rw`#_x9mp;lb^iVx|%WDtJ7hb3dSTS+, pKZ$-iy#M@d$Sa:zz5<!$OC');
define('NONCE_SALT',       '$*4j(2zg;+*,}kDs[US<Q{Ipdbe8;@vvD)a#zy/|]m#TWXVsBWc3K(w[G4/QSI_1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jb_';

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
