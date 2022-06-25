<?php
session_start();
$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];

$con = mysqli_connect('', '', '');

mysqli_select_db($con, 'elmst');

$dollarsssp2 = $_POST['dollarsssp2'];
$storenameee2 = $_POST['storenameee2'];
$file = $_POST['file'];

$query = "UPDATE yerr SET dollarsssp2='$dollarsssp2', storenameee2='$storenameee2' where name = '$name' ";
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
        
       
        mysqli_select_db($con, 'elmst');
        
        $query = "UPDATE yerr SET image_urlll2='$fileDestination' where name = '$_SESSION[name]' ";
        $query_run = mysqli_query($con, $query);
                
            header("Location: sevenwintersb.php?Image Uploaded");
      } else {
        echo "your file is too big!";
      }
    } else {
      echo "there was an error uploading your image";
    }
  }else {
    echo "you cannot upload files of this type!";
  }
