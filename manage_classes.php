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
  <p style="font-size: 22px;"> MANAGE CLASS </p>
        <?php
            include('init.php');
            $db = mysqli_select_db($conn,'lgmdb');

            $sql = "SELECT `name`, `id` FROM `class`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               echo "<table>
                <caption></caption>
                <tr>
                <th>ID</th>
                <th>NAME</th>
                </tr>";

                while($row = mysqli_fetch_array($result))

                  {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
    
                  echo "</tr>";

                  }

                echo "</table>";
            } else {
                echo "0 results";
            }
        ?>
        
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

