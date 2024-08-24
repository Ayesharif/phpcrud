
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
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
        }
        form{
         background-color: lightblue;   
         border-radius: 10px;
        
padding: 20px;
         display: flex;
            justify-content: center;   
            flex-wrap: wrap;
            flex-direction: column;
            margin-bottom: 50px;
        }
        .field{
            display: flex;
            justify-content: center;   
            flex-wrap: wrap;
            flex-direction: column;
            /* align-items: center; */
        }
        .field input{
width: 300px;
height: 25px;
margin: 10px;

        }
        button{
            width: 100px;
            height: 30px;
            /* margin: 20px; */
            border: none;
            border-radius: 10px;
            color: white;
            background-color: black;
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
<h1>Delete Record</h1>

<?php 

if(isset($_POST['btn'])){
    include 'database_con.php';

    $Sphone=$_POST['phone'];
// echo $Sphone;
    
    $qury= "DELETE FROM phpcrud WHERE phone={$Sphone}";
    $result=mysqli_query($connection, $qury) or die("Qurey Erorr");

    header("location: https://localhost/php programms/crud/home.php");
    mysqli_close($connection);

}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<div class="field">
    <label for="">Phone</label> <input type="tel" name="phone"><br>
</div>
            
<button name="btn" type="submit">DELETE</button>
</form>
    </main>
</body>
</html>