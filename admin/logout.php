<?php
if($_SESSION["status"]){
    header("location:index.php");
}

session_start();
$_SESSION=[];
session_unset();
session_destroy();

header("location:index.php");

?>