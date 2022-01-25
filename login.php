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

<?php include 'menu.php'; ?>

     <section>
        <div class="contain">

         <div class="w-50 m-auto">
         <p style="font-size: 22px;"> LOGIN HERE </p>
         <form action="" method="post" name="login">

          <div class="form-group">
          <?php
                    include("init.php");
                                session_start();

                    if (isset($_POST["userid"],$_POST["password"]))
                    {
                     $username=$_POST["userid"];
                     $password=$_POST["password"];
                     $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
                     $result=mysqli_query($conn,$sql);

                    // $row=mysqli_fetch_array($result);
                     $count=mysqli_num_rows($result);
        
                   if($count==1) {
                    $_SESSION['login_user']=$username;
                    header("Location: dashboard.php");
                    } 
            
                   else {
                   echo '<script language="javascript">';
                   echo 'alert("Invalid Username or Password")';
                   echo '</script>'; 
                    }
              }
         ?>

                    <input type="text" name="userid" placeholder="Email" autocomplete="off"> <br> <br>
                    <input type="password" name="password" placeholder="Password" autocomplete="off"> <br> <br>
                    <button type="submit" class="btn btn-success">Login</button>

        </div>

         </form>
        </div>

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