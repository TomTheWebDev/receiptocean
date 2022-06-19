<?php

session_start();
header('location:indexlog.php');

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');

$nameit = $_POST['nameit'];
$passes = $_POST['passes'];

$s = " select * from yerr where name = '$nameit'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if(isset($_POST['Signup']));
  {
    if(empty($_POST['nameit']) || empty($_POST['passes']))
    {
      header("location:index.php?Empty=Please fill in the blanks");
    }
  }

if($num == 1){
  $_SESSION['name'] = $nameit;
  echo" usename already taken";
}else{
  $reg= "insert into yerr(name , passes) values ('$nameit' , '$passes')";
  mysqli_query($con, $reg);
  echo" sign up completed";
}

 ?>
