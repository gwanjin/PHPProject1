<?php
include '../database/dbconnect.php';
session_start();
unset($_SESSION['user']);
try {
    $sql = $dbconn->prepare('SELECT * FROM member where id=? and password =?');
    $sql->execute([$_REQUEST['email'], $_REQUEST['password']]);
    
    foreach ($sql as $row){
        $_SESSION['user'] = [
            'email'=>$row['id'], 'name'=>$row['name']];
    }
    
    if(isset($_SESSION['user'])){
        echo '11';
    } else {
        echo '22';
    }
} catch (Exception $e) {
    echo $e ->getMessage();
}
?>