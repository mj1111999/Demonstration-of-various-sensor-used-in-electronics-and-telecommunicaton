<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<title>Welcome </title>
</head>
<center><h1><MARQUEE scrollamount = "20" >Welcome To MHPSV arena.</MARQUEE></h1>
<?=$_SESSION['sess_user'];?>!<a href="logout.php" class="btn btn-success">Logout</a>
<body>
<a href="Contact.php">Contact us</a>
&nbsp;

<a href="About us.php">About us</a>
<hr></hr>
<div class="container"></br>
  <div class="row">
  <div class="col">
  <div class="card" style="width:300px">
    <img class="card-img-top" src="sensor.jpg" alt="Card image" style="width:100%">
    <div class="card-body">Depth Sensor</div> 
    <h4 class="card-title">Sensor</h4>
      <p class="card-text">A <b>sensor</b> is a device or module, or subsystem whose purpose is to detect events or changes in its environment and send the information to other electronics,frequently to a computer processor. Just put cursor on sensor you will note the changes!!!</p>
      <a href="introduction.php" class="btn btn-danger">See More..</a>
  </br>
  </div>
  </div>
  
 
  

  </div>
</div>
</body>
</center>
</html>
<?php
}
?>