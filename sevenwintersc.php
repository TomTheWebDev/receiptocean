<center>
<?php
session_start();
require('connectme.php');


?>
<?php
echo $_SESSION['name'] . "<br />";
?><h1><FONT COLOR="green">
<?php

$strSQL = "SELECT storenameee3, dollarsssp1, dsss2, dsss3, dsss4, dsss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo '|Property Receipts| Total:$'; echo $row['dollarsssp1'] + $row['dsss2'] + $row['dsss3'] + $row['dsss4'] + $row['dsss5']. "<br />";
}
?></FONT><hr>
</h1>
<h2>
<?php

$strSQL = "SELECT storenameee3, dsss3 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo 'Store:'; echo $row['storenameee3'] . "<br />";
  echo 'Amount: $'; echo $row['dsss3'] . "<br />";
}
?></h2>

<?php
        $strSQL = "SELECT image_urlll3 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);
while($row = mysqli_fetch_array($rs))

    echo "
    <img src=\"{$row['image_urlll3']}\"
                width=\"100\"
                height=\"200\" />";
?></center>
<hr>
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
      <h2>Submit Receipt #3:</h2>
      <h4>Upload Image First</h4>
      <form action="imghelppp3.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="inpFile">
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__defualt-text"></span>
        <input id="text" type="text" name="dsss3">$0.00 Amount<br><br>
        <input id="text" type="text" name="storenameee3">Store Name<br><br>
        <button id="submit" type="submit" name="submit value="submit" class="btn btn-primary">Submit</button></div></form>
        
</center>
    <br>
     <center>
     <span style="display: inline;">
     <h1><button><h1><a href="sevenwinter.php">Home</a></button><button><h1><a href="sevenwintersb.php">2</a></button>3<button><h1><a href="sevenwintersd.php">4</button></h1>
     </span>
     <br>
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
