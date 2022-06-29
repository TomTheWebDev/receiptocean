<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwinter.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');




$dsss2 = $_POST['dsss2'];
$storename2 = $_POST['storename2'];



$query = "UPDATE yerr SET dsss2='$dsss2', storename2='$storename2' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwinter.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwinters2.php");
  }

