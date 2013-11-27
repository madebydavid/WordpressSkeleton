<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'DiverseDigitalWordpress' );
	define( 'DB_USER', 'DiverseDigital' );
	define( 'DB_PASSWORD', 'CdVe_7+hHneJ%n8aryO=!38a5Se!pz' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
	define('WP_HOME', 'http://www.diversedigital.org');
	define('WP_SITEURL', 'http://www.diversedigital.org');
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '+?!OB^vr nj3]Q_bUBRBUgl%q9kux.KkmJc@q;3Tv8f]g9]/5 |Y=5MC#B|9TbK ');
define('SECURE_AUTH_KEY',  'q9Am|Yk)]?PF0=p%n/ab~%+[Il{8+D YT,B%[%/JbK,`kQ9Z##`jaMkun$kq7qgg');
define('LOGGED_IN_KEY',    '@>y/@MISY_q3w- !2<Km*C>Ny8=]htFhxCKIzrjCf7NBgH@>=PPgbb<h3rPBTo`i');
define('NONCE_KEY',        '&+hHD*aZgyEi7$0&Bc]+X)``7I~;HKajduUU+-f%d`obk+BWlE`/_OSpT;Oo^{i!');
define('AUTH_SALT',        '3vdc/NzbDrSi8.MbkZI%H<|B{qz!UtPYim}CAf^:2o2G,h#rCdwLR[9QY<)yNH);');
define('SECURE_AUTH_SALT', 'KdTI2PaB[4X/=FzLP;8w[UZRW#_7-x-+iO[YsZ-[TFn6zBqKK#NxB fvwCJA$|xm');
define('LOGGED_IN_SALT',   'T5L4Tsy@/ w|)eD[1yvq!fA/v.1bjW}iBqHXFv$%.~0ONzQS+.a?E?tBXP@|H=+Q');
define('NONCE_SALT',       'i!8[eT>1)[c7jBz~7)3%dH~$[H4bY-CslW, dBna^DwhBR=mjP;b+`7@_6Tn+gKI');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
require_once( ABSPATH . 'wp-settings.php' );
