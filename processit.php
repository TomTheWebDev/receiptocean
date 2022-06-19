<?php
session_start();
require_once('connectme.php');

  if(isset($_POST['login']));
  {
    if(empty($_POST['name']) || empty($_POST['passes']))
    {
      header("location:indexlog.php?Empty=Please fill in the blanks");
    }
    else {
      $query="select * from yerr where name='".$_POST['name']."' and passes='".$_POST['passes']."'";
      $result=mysqli_query($con,$query);
      if(mysqli_fetch_assoc($result))
      {
        $_SESSION['name']=$_POST['name'];
        header("location:sevenwinter.php");
      }
      else 
      {
        header("location:indexlog.php?Empty=Incorrect Login Information");
      }
    }
  }
 ?>
