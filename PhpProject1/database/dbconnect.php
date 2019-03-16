<?php 
include "dbinfo.php";

try {
    $dbconn = new PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'].';charset=utf8',$db['user'],$db['password']);
    $dbconn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e ->getMessage();
}
?>