<?php
session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');

$dollarsspent1 = $_POST['dollarsspent1'];
$storename = $_POST['storename'];
$file = $_POST['file'];

$query = "UPDATE yerr SET dollarsspent1='$dollarsspent1', storename='$storename' where name = '$name' ";
$query_run = mysqli_query($con, $query);
($query_run);

  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 10000000) {
        $fileNameNew = uniqid("img". true).".".$fileActualExt;
        $fileDestination = 'imguploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        
       $con = mysqli_connect('', '', '');
       
        mysqli_select_db($con, '');
        
        $query = "UPDATE yerr SET image_url='$fileDestination' where name = '$_SESSION[name]' ";
        $query_run = mysqli_query($con, $query);
                
            header("Location: sevenwinters.php?Image Uploaded");
      } else {
        echo "your file is too big!";
      }
    } else {
      echo "there was an error uploading your image";
    }
  }else {
    echo "you cannot upload files of this type!";
  }


 

