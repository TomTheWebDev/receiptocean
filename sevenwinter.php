<center>
<?php
session_start();
if(empty($_SESSION['name'])) {
    header('Location: index.php');
    die();
}
require('connectme.php');



?>

<!DOCTYPE html>
<html><head><link rel="stylesheet" href="stylee.css"><div class="hero"><div class="topright"><br><h2><p style="color:yellow" border="2px">Receipt Ocean</p></h2></div><body></body></head></html>
<h4>
    <br><br>
<?php
echo $_SESSION['name'] . "<br />";
?>
<?php
$strSQL = "SELECT storename, dollarsspent1 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs))

?></h4>
<h2><FONT COLOR="green">
<?php

$strSQL = "SELECT storename, dollarsspent1, ds2, ds3, ds4, ds5, dollarssp1, dss2, dss3, dss4, dss5, dollarsssp1, dsss2, dsss3, dsss4, dsss5, dollarssssp1, dssss2, dssss3, dssss4, dssss5, dollarsssssp1, dsssss2, dsssss3, dsssss4, dsssss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);
while($row = mysqli_fetch_array($rs))
{
  echo 'Overall Dollar Amount: '; echo '$'; echo $row['dollarsspent1'] + $row['ds2'] + $row['ds3'] + $row['ds4'] + $row['ds5'] + $row['dollarssp1'] + $row['dss2'] + $row['dss3'] + $row['dss4'] + $row['dss5'] + $row['dollarsssp1'] + $row['dsss2'] + $row['dsss3'] + $row['dsss4'] + $row['dsss5'] + $row['dollarssssp1'] + $row['dssss2'] + $row['dssss3'] + $row['dssss4'] + $row['dollarsssssp1'] + $row['dsssss2'] + $row['dsssss3'] + $row['dsssss4']. "<br />";
}
?></h2></FONT>
</center>

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
<body style="background-color: white">
    <div style="position: relative; width: 250px;">
        <div style="position: absolute; bottom: -600; right: 80; width: 100px; text-allign:left;"><button><a href="https://www.receiptocean.com"><h1>LOGOUT</h1></button>
        </div></div></a>
        <br><br><br>
  <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<br><br><br><br>
<center>
      <div style="position: relative; width: 250px;">
        <div style="position: absolute; top: -20; left: -65; width: 100px; text-allign:right;"><hr><h3>Property Receipts <FONT COLOR="green"><h2><?php $strSQL = "SELECT storename, dollarsspent1, ds2, ds3, ds4, ds5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs)) { echo '$'; echo $row['dollarsspent1'] + $row['ds2'] + $row['ds3'] + $row['ds4'] + $row['ds5']. "<br />"; } ?></h2></FONT></h3><h4> (insurance, property tax, ect...)</h4>
      <button><a href="sevenwinters.php"><h1>Receipts</h1></a></button>
      <hr></div></div>
      <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<center>
      <div style="position: relative; width: 250px;">
        <div style="position: absolute; top: -20; right: -70; width: 100px; text-allign:right;"><hr><h3>Medical Bills <br><FONT COLOR="green"><h2><?php $strSQL = "SELECT storename, dollarsssp1, dsss2, dsss3, dsss4, dsss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs)) { echo '$'; echo $row['dollarsssp1'] + $row['dsss2'] + $row['dsss3'] + $row['dsss4'] +row['dsss5']. "<br />"; } ?></h2></FONT> </h3><h4> (dental, co pay, ect...)</h4><br>
      <button><a href="sevenwintersa.php"><h1>Receipts</h1></a></button>

      <hr></div></div>
      <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<center>
      <div style="position: relative; width: 250px;">
        <div style="position: absolute; top: -20; right: 75; width: 100px; text-allign:right;"><hr><h3>Business Expenses <FONT COLOR="green"><h2><?php $strSQL = "SELECT storename, dollarssp1, dss2, dss3, dss4, dss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs)) { echo '$'; echo $row['dollarssp1'] + $row['dss2'] + $row['dss3'] + $row['dss4'] + $row['dss5']. "<br />"; } ?></h2></FONT> </h3><h4> (gas, supplies, ect...)</h4>
      <button><a href="sevenwinters1.php"><h1>Receipts</h1></a></button>
      <hr></div></div><br>
</center>
      <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<center>
      <div style="position: relative; width: 250px;">
        <div style="position: absolute; top: 200; right: 75; width: 100px; text-allign:right;"><h3>Misc <br><FONT COLOR="green"><h2><?php $strSQL = "SELECT storename, dollarsssssp1, dsssss2, dsssss3, dsssss4, dsssss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs)) { echo '$'; echo $row['dollarsssssp1'] + $row['dsssss2'] + $row['dsssss3'] + $row['dsssss4'] + $row['dsssss5']. "<br />"; } ?></h2></FONT> </h3><h4> (uncategorized receipts, ect...)</h4>
      <button><a href="sevenwinterss1.php"><h1>Receipts</h1></a></button>
      <hr></div></div></center>
         <?php
  if(isset($_SESSION['status']))
  {
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  } ?>
<center>
      <div style="position: relative; width: 250px;">
        <div style="position: absolute; top: 200; right: 215; width: 100px; text-allign:right;"><h3>Donations <FONT COLOR="green"><h2><?php $strSQL = "SELECT storename, dollarssssp1, dssss2, dssss3, dssss4, dssss5 FROM yerr WHERE name = '".$_SESSION['name']."'";

$rs = mysqli_query($con, $strSQL);

while($row = mysqli_fetch_array($rs)) { echo '$'; echo $row['dollarssssp1'] + $row['dssss2'] + $row['dssss3'] + $row['dssss4'] + $row['dssss5']. "<br />"; } ?></h2></FONT> </h3><h4> (charity, ect...)</h4><br>
      <button><a href="sevenwintersss1.php"><h1>Receipts</h1></a></button>
      <hr></div></div></center>
<br><br><br>
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
