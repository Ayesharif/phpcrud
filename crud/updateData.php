<?php
 include 'database_con.php';
 $Sid=$_GET['id'];
 
     
     $qury= "DELETE FROM phpcrud WHERE id={$Sid}";
     $result=mysqli_query($connection, $qury) or die("Qurey Erorr");
 
     header("location: https://localhost/php programms/crud/home.php");
     mysqli_close($connection);
 
 
?>