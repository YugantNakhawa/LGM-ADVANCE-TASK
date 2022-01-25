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
    <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn'];

        // validation
        if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
            if(empty($class))
                echo '<p class="error">Please select your class</p>';
            if(empty($rn))
                echo '<p class="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$rn))
                echo '<p class="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>

<section>
  <div class="contain">
    <div class="container">
        <div class="details">
            <span>Name:</span> <?php echo $name ?> &nbsp;
            <span>Class:</span> <?php echo $class; ?> <br> <br>
            <span>Roll No:</span> <?php echo $rn; ?> <br> <br>
        </div>

        <div class="main">
            <div class="s1">
                <p>Subjects With Marks</p> 
                <p>Paper 1  &nbsp; <?php echo '<p>'.$p1.'</p>';?></p>
                <p>Paper 2  &nbsp; <?php echo '<p>'.$p2.'</p>';?></p>
                <p>Paper 3  &nbsp; <?php echo '<p>'.$p3.'</p>';?></p>
                <p>Paper 4  &nbsp; <?php echo '<p>'.$p4.'</p>';?></p>
                <p>Paper 5  &nbsp; <?php echo '<p>'.$p5.'</p>';?></p>
            </div>
        </div>

        <div class="result">
            <?php echo '<p>Total Marks:&nbsp;'.$mark.'</p>';?>
            <?php echo '<p>Your Percentage:&nbsp;'.$percentage.'%</p>';?>
        </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
    </div>
</section>

<footer class="page-footer font-small bg-dark text-light">
    <div class="footer-copyright text-center py-3"> Copyright © Yugant Nakhawa (LGM) </div>
</footer>  
</body>
</html>