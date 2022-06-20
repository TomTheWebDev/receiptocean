<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwinters.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');



$ds3 = $_POST['ds3'];
$storename3 = $_POST['storename3'];



$query = "UPDATE yerr SET ds3='$ds3', storename3='$storename3' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwinterssss.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwinterssss.php");
  }
