<center>
<?php
session_start();
require('connectme.php');


?>
<?php
echo $_SESSION['name'] . "<br />";
?>
<h1><FONT COLOR="green">
<?php

$strSQL = "SELECT storenameeeee2, dollarsssssp1, dsssss2, dsssss3, dsssss4, dssss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo '|Misc| <br />Total: $'; echo $row['dollarsssssp1'] + $row['dsssss2'] + $row['dsssss3'] + $row['dsssss4'] + $row['dsssss5']. "<br />";
}
?><hr></FONT>
</h1>
<h2>
<?php

$strSQL = "SELECT storenameeeee2, dollarsssssp1, dsssss2, dsssss3, dsssss4, dsssss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))
{
  echo 'Store:'; echo $row['storenameeeee2'] . "<br />";
  echo 'Amount: $'; echo $row['dsssss2'] . "<br />";
}
?></h2>

<?php
        $strSQL = "SELECT image_urlllll2 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);
while($row = mysqli_fetch_array($rs))

    echo "
    <img src=\"{$row['image_urlllll2']}\"
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
      <h2>Submit Receipt #2:</h2>
      <h4>Upload Image First</h4>
      <form action="imghelppppp2.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="inpFile">
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__defualt-text"></span>
        <input id="text" type="text" name="dsssssp2">$0.00 Amount<br><br>
        <input id="text" type="text" name="storenameeeee2">Store Name<br><br>
        <button id="submit" type="submit" name="submit value="submit" class="btn btn-primary">Submit</button></div></form>
        
</center>
    <br>
     <center>
     <span style="display: inline;">
     <h1><button><h1><a href="sevenwinter.php">Home</a></button><button><h1><a href="sevenwinterss1.php">1</a></button>2<button><h1><a href="sevenwinterss3.php">3</button></h1>
     </span>
     <br>
     </center>
    <br>
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
