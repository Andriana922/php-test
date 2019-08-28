<?php 

session_start();

$host='localhost';
$username='root';
$password='';
$db='form';
$db = mysqli_connect($host,$username,$password,$db);
if($db){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

?>