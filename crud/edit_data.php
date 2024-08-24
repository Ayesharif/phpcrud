<?php 

include 'database_con.php';
 $Sid=$_POST['Sid'];
 $Sname=$_POST['Sname'];
$Sclass=$_POST['Sclass'];
$Scity=$_POST['Scity'];
$Sphone=$_POST['Sphone'];

 $qury= "UPDATE phpcrud SET name = '{$Sname}', class= '{$Sclass}', city= '{$Scity}', phone= '{$Sphone}' WHERE  id ='{$Sid}'";
 $result=mysqli_query($connection, $qury) or die("Qurey Erorr");

 header("location: https://localhost/php programms/crud/home.php");
 mysqli_close($connection);
?>