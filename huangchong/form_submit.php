<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pet";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed.".$conn->connect_error);
}
else{
    $FirstName=$_POST["Fname"];
    $LastName=$_POST["Lname"];
    $Email=$_POST["email"];
    $password=password_hash($_POST["pswd"],PASSWORD_DEFAULT);
    
    
    $query="INSERT INTO user(Fname,Lname,email,Password)VALUES(
'".$FirstName."','".$LastName."','".$Email."','".$password."')";
    echo $query;
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo"<p>something wrong with",$query,"</p>";
    }
    else{
        echo"<p>successfully added new record</p>";
    }
}
mysqli_close($conn);
header('Location:index.php');exit();
?>