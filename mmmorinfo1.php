<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

//header('location:sevenwinters1.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');




$dollarsssp1 = $_POST['dollarsssp1'];
$storename2 = $_POST['storename2'];



$query = "UPDATE yerr SET dollarsssp1='$dollarsssp1', storename2='$storename2' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{

  header("Location: sevenwinters2.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwinters1.php");
  }

