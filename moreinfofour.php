<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwinters.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');



$ds4 = $_POST['ds4'];
$storename4 = $_POST['storename4'];



$query = "UPDATE yerr SET ds4='$ds4', storename4='$storename4' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwinter.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwinter.php");
  }

