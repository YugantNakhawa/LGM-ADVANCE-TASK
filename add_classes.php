<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="imgused/h1.png">
    <title>Student Result Management System</title>
<style>
        .contain{
            background: #084ca0;
            background-size: cover;
            padding: 100px 40px;
            text-align: center;
            color: #fff;

               }

        .contain p{

            max-width: 600px;
            margin: 40px auto;
            font-size: 15px;
            font-weight: 300;

              }
</style>
</head>
<body>

<?php include 'menu1.php'; ?>

<section>
  <div class="contain">
  <p style="font-size: 22px;"> ADD CLASS </p>
        <form action="" method="post">
                <input type="text" name="class_name" placeholder="Class Name">
                <input type="text" name="class_id" placeholder="Class ID">
                <button type="submit" class="btn btn-success">Submit</button>     
        </form>
  </div>
</section>

<section>
  <div class="contain">
  </div>
</section>

<section>
  <div class="contain">
  </div>
</section>

<footer class="page-footer font-small bg-dark text-light">
    <div class="footer-copyright text-center py-3"> Copyright © Yugant Nakhawa (LGM) </div>
</footer>  
</body>
</html>

<?php 
	include('init.php');

    if (isset($_POST['class_name'],$_POST['class_id'])) {
        $name=$_POST["class_name"];
        $id=$_POST["class_id"];

        // validation
        if (empty($name) or empty($id) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter class</p>';
            if(empty($id))
                echo '<p class="error">Please enter class id</p>';
            if(preg_match("/[a-z]/i",$id))
                echo '<p class="error">Please enter valid class id</p>';
            exit();
        }

        $sql = "INSERT INTO `class` (`name`, `id`) VALUES ('$name', '$id')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid class name or class id")';
            echo '</script>';
        } else{
            echo '<script language="javascript">';
            echo 'alert("Successful)';
            echo '</script>';
        }
    }

?>