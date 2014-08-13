<?php
define ('HYP_IPC_MODE',"mysql");
$IPC_mod_path       =  dirname(__FILE__).'/../IPC/';
$mysql_ini = array ( 
       'address'  => 'localhost',
	      'username' => 'root',
	      'password' => 'root',
	      'basename' => 'borg',
	      'prefix'   => 'db_',
);
$srv_block_ini = array(
    'sleep'         => 2,
    'breath_delay'  => 15,
    'db_living'     => 3 * 60,
);
$queen_srv_ini = array(
    'buff'     => 160,
    'addr'     => '127.0.0.1',
    'host'     => '127.0.0.1',
    'path'     => '/queen/Queen-master/public_html/srv/',
);
$runtime = array(
    'max_response_unit' => 1024 * 1024,
    'max_request_size'  => 1024 * 1024,
    'max_response_size' => 0,
);
$repo_path = dirname(__FILE__).'/../repo/';
$log_file_path  = false;
$tplrefresh = 0;
$max_clients = 100;
$ssl_valid = false;
$repo_closed = true;
$hash_salt = 'borg_';
$stream_path       =  dirname(__FILE__).'/../stream/';
$stream_path_level =  2;
$gc_lock_file      = $stream_path.'gc.lock';
$gc_frequency      = 7 * 24 * 60 * 60;
$cookiepre = 'Borg_';
$cookiedomain = '';
$cookiepath = '/';
?>