<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud');

try{
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';dbuser=' . DB_USER . ';dbpass=' . DB_PASS . ';');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}