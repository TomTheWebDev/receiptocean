<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwintersb.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');




$dollarssp1 = $_POST['dollarssp1'];
$storename2 = $_POST['storename2'];



$query = "UPDATE yerr SET dollarssp1='$dollarssp1', storename2='$storename2' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwintersb.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwintersa.php");
  }

