<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$database ="pet";   

$pswd = $_POST['pswd'];
$email = $_POST['email'];
$conn=mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT Password,Fname FROM user WHERE email ='".$email."' LIMIT 1";
echo $sql;
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    
    $row=mysqli_fetch_array($result);
   
   if(password_verify($pswd,$row["Password"])){
       $url ='index.php?user='.$row["Fname"];
        header('Location: '.$url);

    }else{
         header('Location: '.'check.php?');
    }
}

?>