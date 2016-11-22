<?php
//connect to database file
include 'database.php';
 ?>
 <?php
//server side validation
//using (isset) to see our php function is set
if (isset($_POST['name']) && isset($_POST['shout'])){//this line says if 'name' and 'shout' are set to php and filled out
//fuction bellow is going to scape any special charachter that is harmful to database
  $name = mysqli_real_escape_string($con, $_POST['name']);//variable con is defined in database.php for connecting to database so after conection it will pass name
  $shout = mysqli_real_escape_string($con, $_POST['shout']);//same thing I did for name variable
  $date = mysqli_real_escape_string($con, $_POST['date']);//same thing I did for name variable
}
