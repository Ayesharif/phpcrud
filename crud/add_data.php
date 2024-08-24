<?php
include 'database_con.php';
$Sname=$_POST['Sname'];
$Sclass=$_POST['Sclass'];
$Scity=$_POST['Scity'];
$Sphone=$_POST['Sphone'];

    $qury= "INSERT INTO phpcrud(name, class, city, phone) VALUES('{$Sname}', '{$Sclass}', '{$Scity}', '{$Sphone}')";
    $result=mysqli_query($connection, $qury) or die("Qurey Erorr");

    header("location: https://localhost/php programms/crud/home.php");
    mysqli_close($connection);



    ?>