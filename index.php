<?php
session_start();
require('connectme.php');

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
      $name = $_POST['name'];
      $password = $_POST['passes'];

      if(!empty($name) && !empty($passes) && !is_numeric($name))
      {

          $user_id = random_num(20);
          $query = "insert into users (user_id,name,passes) values ('$user_id','$name','$passes')";

          mysqli_query($con, $query);

          header("Location: indexlog.php");
          die;

      }else
      {
        echo "please enter valid information";
      }
    }

  ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Signup</title>
   <link rel="stylesheet" href="style.css">
    </head>
 <body>
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
     <?php
    if(@$_GET['Empty']==true)
  ?>
      <div class="hero"><div class="topright"><h2><p style="color:yellow" border="2px">Receipt Ocean</p></h2></div>
      <br>
        <button><a href="indexlog.php"><h1>LOGIN</h1></a></button>
    <br><br>
<center>
    <br>
    <img src="" height="80px" width="100%" alt="" border="0"></center>
   <div id="box">
     <center>
     <form action="registernow.php" method="post">

       <input id="text" type="text" name="nameit" placeholder="username"><br><br>
       <input id="text" type="password" name="passes" placeholder="password"><br><br>

       <button id="button" type="submit" value="Signup" name="Signup" class="btn btn-primary"> <h2>Create Account</h2> </button>
       <br><br>
     

     </form>
   </center>
   </div>
   <center><h1><p style="color:yellow">Save Money<br>Make Tax Time Easy</p></h1></center>
 
    <center>
   <img src="https://i.ibb.co/m4JJbLw/stoppwm.jpg" height="40%" width="70%" alt="stoppwm" border="2px"></center><br>
     <center><h1><p style="color:black">Upload Receipts Easily</p></h1></center><br><center>
     <img src="https://i.ibb.co/QrXdH6V/stoppwm2.jpg" height="220px" width="35%" alt="stoppwm2" border="2px"> <img src="https://i.ibb.co/vcSkwMD/stoppwm3.jpg" height="220px" width="35%" alt="stoppwm3" border="2px"></center>
       <center><h1><p style="color:black">Take A Picture</p></h1></center><br>
   </div>
 </body>
 </html>
