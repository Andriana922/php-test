<?php 
session_start();
require('server.php');
if((!isset($_SESSION['username']) != '')){
    header ("Location: login.php");
}
?>


            
