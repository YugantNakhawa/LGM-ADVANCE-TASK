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
  <p style="font-size: 22px;"> ADD RESULT </p>        
  <form action="" method="post">
    
                <?php
                    include("init.php");

                    $select_class_query="SELECT `name` from `class`";
                    $class_result=mysqli_query($conn,$select_class_query);
                    //select class
                    echo '<select name="class_name">';
                    echo '<option selected disabled>Select Class</option>';
                    
                        while($row = mysqli_fetch_array($class_result)) {
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';                      
                ?>

                <input type="text" name="rno" placeholder="Roll No">
                <input type="text" name="p1" id="" placeholder="Paper 1">
                <input type="text" name="p2" id="" placeholder="Paper 2">
                <input type="text" name="p3" id="" placeholder="Paper 3">
                <input type="text" name="p4" id="" placeholder="Paper 4"> &ensp; <br> <br>
                <input type="text" name="p5" id="" placeholder="Paper 5"> &ensp;
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
    if(isset($_POST['rno'],$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],$_POST['p5']))
    {
        $rno=$_POST['rno'];
        if(!isset($_POST['class_name']))
            $class_name=null;
        else
            $class_name=$_POST['class_name'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(int)$_POST['p3'];
        $p4=(int)$_POST['p4'];
        $p5=(int)$_POST['p5'];

        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;

        // validation
        if (empty($class_name) or empty($rno) or $p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0 ) {
            if(empty($class_name))
                echo '<p class="error">Please select class</p>';
            if(empty($rno))
                echo '<p class="error">Please enter roll number</p>';
            if(preg_match("/[a-z]/i",$rno))
                echo '<p class="error">Please enter valid roll number</p>';
            if(preg_match("/[a-z]/i",$marks))
                echo '<p class="error">Please enter valid marks</p>';
            if($p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0)
                echo '<p class="error">Please enter valid marks</p>';
            exit();
        }

        $name=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rno' and `class_name`='$class_name'");
        while($row = mysqli_fetch_array($name)) {
            $display=$row['name'];
            echo $display;
         }

        $sql="INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES ('$display', '$rno', '$class_name', '$p1', '$p2', '$p3', '$p4', '$p5', '$marks', '$percentage')";
        $sql=mysqli_query($conn,$sql);

        if (!$sql) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }
?>