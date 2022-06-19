<?php

session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];






header('location:sevenwinterss.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');


$dss4 = $_POST['dss4'];
$dss3 = $_POST['dss3'];
$dss2 = $_POST['dss2'];
$dollarssp1 = $_POST['dollarssp1'];
$dollarsspent1 = $_POST['dollarsspent1'];
$ds2 = $_POST['ds2'];
$ds3 = $_POST['ds3'];
$ds4 = $_POST['ds4'];
$ds5 = $_POST['ds5'];
$storename = $_POST['storename'];



$query = "UPDATE yerr SET dollarsspent1='$dollarsspent1', dollarssp1='$dollarssp1', dss2='dss2', dss3='$dss3', dss4='dss4', storename='$storename' where name = '$name' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{
  header("Location: sevenwinter.php");
}
  else {
    $_SESSION['status'] = "not updated";
    header("Location: sevenwinterss.php");
  }

