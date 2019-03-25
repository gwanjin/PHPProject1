<?php
include '../database/dbconnect.php';
session_start();
if(session_destroy()) {
    header("Location: login.php");
}

header("location: ../index.php");
?>

