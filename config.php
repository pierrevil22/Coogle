<?php
ob_start();

try {
// Orginal DB
    // $con = new PDO("mysql:dbname=coogle;host=localhost", "root", "");
    // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//New Sequel Pro to connect to ClearDB

// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);

// $config = array(
//     'host' => "us-cdbr-iron-east-01.cleardb.net" ,
//     'user' => "b32bdfcf89ec70" ,
//     'pw' => "9edd9180",
//     'db' => "heroku_01494fa3d0a4192" 
// );

// combined methods 

    $con = new PDO("mysql:dbname=heroku_01494fa3d0a4192;host=us-cdbr-iron-east-01.cleardb.net", "b32bdfcf89ec70", "9edd9180");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);




}
catch(PDOExeption $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>

