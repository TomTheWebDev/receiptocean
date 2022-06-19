<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwinters.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');




$ds2 = $_POST['ds2'];
$storename2 = $_POST['storename2'];



$query = "UPDATE yerr SET ds2='$ds2', storename2='$storename2' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwintersss.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwintersss.php");
  }

