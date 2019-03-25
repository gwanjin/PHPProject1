<?php
include '../database/dbconnect.php';
session_start();
unset($_SESSION['user']);
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    try {
        $sql = $dbconn->prepare('SELECT * FROM member where id=? and password =?');
        $sql->execute([$_REQUEST['email'], $_REQUEST['password']]);
        
        foreach ($sql as $row){
            $_SESSION['user'] = [
                'email'=>$row['id'], 'name'=>$row['name']];
        }
        
        if(isset($_SESSION['user'])){
            echo $_SESSION['user']['email'];
            echo $_SESSION['user']['name'];
            header("location: ../index.php");
        } else {
            header("location: login.php");
        }
    } catch (Exception $e) {
        header("location: login.php");
        echo $e ->getMessage();
    }
}
?>