<?php


}

//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["us-cdbr-iron-east-01.cleardb.net"];
$cleardb_username = $cleardb_url["b32bdfcf89ec70"];
$cleardb_password = $cleardb_url["9edd9180"];
$cleardb_db       = substr($cleardb_url["https://git.heroku.com/coogle.git"],1);





$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'us-cdbr-iron-east-01.cleardb.net',
    'username' => 'b32bdfcf89ec70',
    'password' => '9edd9180',
    'database' => 'heroku_01494fa3d0a4192',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
?>