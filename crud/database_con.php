<?php 


$host="localhost";
$user="root";
$pass="";
$database="student";
$connection=mysqli_connect($host, $user,$pass, $database)or die("Connection failed");
if($connection){
    // echo "ok";
}
else{
    echo"error";
}
?>