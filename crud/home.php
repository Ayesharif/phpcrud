<?php
include 'database_con.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        header{

            background-color: cyan;
        }
        .logo{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
        }

    
        .nav-bar{
            display: block;
            justify-content: start;
            background-color: black;
        }
        .nav-bar ul{
            list-style-type: none;
            

        }
        .nav-bar ul li{
            display: inline-flex;
            padding: 30px;
            font-size: 22px;
        }
        .nav-bar a{
            text-decoration: none;
            color: white;
        }
        main{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        table{
            width: 700px;
        }
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px 30px;
        }
        .td{


            /* border: none; */
            border-collapse: collapse;

        }
        .td a{
            display: block;
            text-align: center;
            width: 80px;
            height: 25px;
            background-color: red;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            padding: 5px;
        }
        .td a:first-child{
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>CRUD</h1>

        </div>
        <nav>
            <div class="nav-bar">
                
                <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="add.php">Add</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
        </div>
        </nav>
    </header>
    <main>
        <h1>All Record</h1>

        <?php
        $connection or die("Connection failed");
        $qury= "SELECT * FROM phpcrud";
        $result=mysqli_query($connection, $qury) or die("Qurey Erorr");

        if(mysqli_num_rows($result) >0 ){

        

        ?>
       <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CLASS</th>
            <th>CITY</th>
            <th>PHONE</th>
            <th>ACTION</th>
        </tr>
<tbody>
<?php
while($row= mysqli_fetch_assoc($result)){


?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["class"]; ?></td>
        <td><?php echo $row["city"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td class="td"> 
            <a href="edit.php?phone= <?php echo $row['phone']?>">Edit</a>
            <a href="delete1.php?id= <?php echo $row['id']?>">Delete</a>
    </td>
        </tr>

    <?php } ?>
    </tbody>
        </table> 

        <?php } else{
            echo"<h2> data not found !!</h2>";
        }
        mysqli_close($connection);
        ?>
    </main>

    
</body>
</html>