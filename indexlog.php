<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="style.css">
  <style>
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
</style>
<style type="text/css">
  #text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
  }

  #button{

    padding: 10px;
    width: 100px;
    color: white;
    background-color: darkblue;
    border: name;

  }

  #box{

    background-color: transparent;
    margin: auto;
    width: 300px;
    padding: 20px;
  }

  </style>
</head>
<body>
  <?php
    if(@$_GET['Empty']==true)
  ?>
  <div class="hero"><div class="topright"><h2><p style="color:yellow" border="2px">Receipt Ocean</p></h2></div>
  <br>
     <button><a href="index.php"><h1>Create Account</h1></a></button>
    <div class+"alert-light text-danger text-center my-3"></div>
<br><br>
<center>
    <img src="https://i.ibb.co/6DptD6G/newimgfornewer.jpg" height="80px" width="100%" alt="firstapic" border="0"></center>
  <div id="box">
    <center>
    <form action="processit.php" method="post">
      <p>
        <input type="text" id="text" name="name" placeholder="username" />
        
      </p><br>
      <p>
        <input type="password" id="text" name="passes" placeholder="password" />
        
      </p></center>
        <br>
      <center><button class="btn btn-success mt-3" id="button" name="login"><h2>LOG IN</h2></button></center>
        <br></form></div>
        <br>


      <center><h1><p style="color:yellow">Save Money<br>Make Tax Time Easy</p></h1></center>
 
    <center>
   <img src="https://i.ibb.co/m4JJbLw/stoppwm.jpg" height="40%" width="70%" alt="stoppwm" border="2px"></center><br>
     <center><h1><p style="color:black">Upload Receipts Easily</p></h1></center><br><center>
     <img src="https://i.ibb.co/QrXdH6V/stoppwm2.jpg" height="220px" width="35%" alt="stoppwm2" border="2px"> <img src="https://i.ibb.co/vcSkwMD/stoppwm3.jpg" height="220px" width="35%" alt="stoppwm3" border="2px"></center>
       <center><h1><p style="color:black">Take A Picture</p></h1></center><br>
  </div>
</body>
</html>
