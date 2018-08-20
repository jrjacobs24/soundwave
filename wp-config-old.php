<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_soundwave' );
define( 'DB_USER', 'soundwave' );
define( 'DB_PASSWORD', 'S5ZMVrNtH0c7e55l' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wpsw_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'En.EMeU/4:1Do:b2_${0We<o#$a3z4Y=UuQyBz>xD)H4c&Jv@C>d2zfKu@fy|EMU');
define('SECURE_AUTH_KEY',  'QLVlI0;@-iY%?!`S+px| <bI-fC!vEaCMXBPf:@VeaWrU{fJRJt|BD~BDFhY^J&)');
define('LOGGED_IN_KEY',    '#_58w(zvmuhfdjUR=%^ zF-E/qm>ySYqh-H.+lrJ)nI@kI7d[fs>vyB;>GO3e-%k');
define('NONCE_KEY',        'uv4;lgSD1Y-_pcjs,HsEErs;muxv,d7|#]7 ;^`q4x}+|,Jrvum;([L`a0YJL4?<');
define('AUTH_SALT',        'i%PbEUq0:W26+ls,Ot4,]1c,S<= oY91m-RXcT=$t!c^};W>o|=c>ZMm?DB[|WvS');
define('SECURE_AUTH_SALT', '6D1>Sk$f>6L+VLnj$QuQ.wonH h>nmX91FMN|Mj%>h"~G74`j!c.7b]/RdY^qi?!');
define('LOGGED_IN_SALT',   'AtOrC<Y!yIgLtH+y--y3A`b{tHghZ5 fr:i0{G^?{K1$4_F0I+Ixx+5a`-B%8Hc?');
define('NONCE_SALT',       'tQI%6"CXM+OmB"KSr|HK7uq,h^FVR4SsfwSs+)`8Fe/za>VW~POo`W<3f_,]SPY]');


# Localized Language Stuff

define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);

define('WP_DEBUG_DISPLAY', false);

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'soundwave' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '0bbfb5b9341c6add764ea0fb22bb2f70f6c54139' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100611' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'soundwavecomics.com', 1 => 'www.soundwavecomics.com', 2 => 'soundwave.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100611', );

$wpe_special_ips=array ( 0 => '104.196.164.217', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );



define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WP_SITEURL', 'http://soundwave.staging.wpengine.com' );

define( 'WP_HOME', 'http://soundwave.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
