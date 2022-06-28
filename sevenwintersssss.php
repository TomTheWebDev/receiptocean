<center>
<?php
session_start();
require('connectme.php');


?>
<?php
echo $_SESSION['name'] . "<br />";
?><h1><FONT COLOR="green">
<?php

$strSQL = "SELECT storename5, dollarsspent1, ds2, ds3, ds4, ds5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo '|Property Receipts| Total:$'; echo $row['dollarsspent1'] + $row['ds2'] + $row['ds3'] + $row['ds4'] + $row['ds5'] . "<br />";
}
?></FONT><hr>
</h1>
<div style="position: relative; width: 250px;">
        <div style="position: absolute; bottom: 100; right: 250; width: 100px; text-allign:left;"><button><a href="sevenwinter.php"><h1>Home</h1></button>
        </div></div></a>
<h1><button><h1><a href="sevenwinterssss.php">4</a></button>5<button><h1><a href="sevenwinterssssss.php">6</button></h1></a></h1><hr>
<h3>
<?php

$strSQL = "SELECT storename5, ds5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo 'Store:'; echo $row['storename5'] . "<br />";
  echo 'Amount: $'; echo $row['ds5'] . "<br />";
}
?></h3>
<div style="position: relative; width: 250px;">
        <div style="position: absolute; bottom: -50; right: 210; width: 100px; text-allign:left;"><img src="https://i.ibb.co/H4yqqxn/Yt-Mu3vr-white-numeral-5-centered-inside-black-circle-clipart.png" width="60" height="60" alt="number-1-design-hi" border="0">
        </div></div></a><br>
<?php
        $strSQL = "SELECT image_url5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);
while($row = mysqli_fetch_array($rs))

    echo "
    <img src=\"{$row['image_url5']}\"
                width=\"100\"
                height=\"100\" />";
?></center>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .image-preview {
    width: 300px;
    min-height: 100px;
    border: 2px solid #dddddd;
    margin-top: 15px;
  }

  .image-preview__image {
    display: none;
    width: 50%;

  }

  </style>
</head>
<body>

  <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<center>
      <h2>Submit Receipt #5:</h2>
      <h4>Upload Image First</h4>
      <form action="imghelp5.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="inpFile">
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__defualt-text"></span>
        <input id="text" type="text" name="ds5">$0.00 Amount<br><br>
        <input id="text" type="text" name="storename5">Store Name<br><br>
        <button id="submit" type="submit" name="submit value="submit" class="btn btn-primary">Submit</button></div></form>
        
</center>
     <br><br>
     
<script>
const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefualtText = previewContainer.querySelector(".image-preview__defualt-text");

inpFile.addEventListener("change", function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    previewDefualtText.style.display = "none";
    previewImage.style.display = "block";

    reader.addEventListener("load", function() {
      console.log(this);
      previewImage.setAttribute("src", this.result);
    });

    reader.readAsDataURL(file);
  }
});
</script>


</body>
</html>
