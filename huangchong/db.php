<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="pet";   

$connection =mysqli_connect($servername,$username,$password,$database);
if(!$connection){
    die("connection error : ".mysqli_connect_error());
}
?>