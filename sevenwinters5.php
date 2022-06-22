<center>
<?php
session_start();
require('connectme.php');


?>
<?php
echo $_SESSION['name'] . "<br />";
?><h1><FONT COLOR="green">
<?php

$strSQL = "SELECT storenamee5, dollarssp1, dss2, dss3, dss4, dss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo '|Business Expenses| <br />Total: $'; echo $row['dollarssp1'] + $row['dss2'] + $row['dss3'] + $row['dss4'] + $row['dss5'] . "";
}
?></FONT><hr>
</h1>
<h2>
<?php

$strSQL = "SELECT storenamee5, dss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo 'Store:'; echo $row['storenamee5'] . "<br />";
  echo 'Amount: $'; echo $row['dss5'] . "<br />";
}
?></h2>

<?php
        $strSQL = "SELECT image_urll5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);
while($row = mysqli_fetch_array($rs))

    echo "
    <img src=\"{$row['image_urll5']}\"
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
      <h2>Submit Receipt #5:</h2>
      <h4>Upload Image First</h4>
      <form action="imghelpp5.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="inpFile">
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__defualt-text"></span>
        <input id="text" type="text" name="dss5">$0.00 Amount<br><br>
        <input id="text" type="text" name="storenamee5">Store Name<br><br>
        <button id="submit" type="submit" name="submit value="submit" class="btn btn-primary">Submit</button></div></form>
        
</center>
    <br>
     <center>
     <span style="display: inline;">
     <h1><button><h1><a href="sevenwinter.php">Home</a></button><button><h1><a href="sevenwinters4.php">4</a></button>5<button>
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
