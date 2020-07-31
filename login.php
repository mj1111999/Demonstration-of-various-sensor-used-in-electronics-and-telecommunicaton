<!doctype html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body style="background-color: lightblue">
<i class="fa fa-info-circle" aria-hidden="true"></i> <a href='about us 2.php'>About us</a>
<p><center><i class="fa fa-star-o" aria-hidden="true"></i> Video Tutorial on Sensors would look something like this:</center></p>

<p><center><i class="fa fa-film" aria-hidden="true"></i> Video Credits: Harshit Srivastav <i class="fa fa-check-circle-o" aria-hidden="true"></i></center></p> 
<center>
<video controls>
<source src="video.mp4" type="video/mp4">
</video>
</center>
<p><center>login/register to see full vidoes <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></center></p>
<center>
<div class="form-group w-50 ">
<form action="" method="post" class="text-center border border-dark p-5 m-5">
<h1>Login</h1>
<label>Email:</label><input type="email" name="email"class="form-control"><br/>
<label>Password:</label><input type="password" name="Password"class="form-control"><br/>
<input type="submit" value="Login" name="submit"class="form-control btn btn-danger"><br/></br>
<p><a href="Registration.php" class="form-control btn btn-success">New User? Register Here</a></p>
</form>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['email']) && !empty($_POST['Password'])){
        $email = $_POST['email'];
		$Password = $_POST['Password'];
		//DB Connection
		$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
		//Select DB From database
		$db = mysqli_select_db($conn, 'sensor') or die("database error");
		//Selecting database
		$query = mysqli_query($conn, "SELECT * FROM registration WHERE email='".$email."' AND Password='".$Password."'");
		$numrows = mysqli_num_rows($query);
		if($numrows !=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername=$row['email'];
				$dbpassword=$row['Password'];
			}
			if($email == $dbusername && $Password == $dbpassword)
			{
				session_start();
				$_SESSION['sess_user']=$email;
				//Redirect Browser
				header("Location:welcome.php");
			}
		}
		else
		{
			echo "Invalid Username or Password!";
		}
	}
	else
	{
		echo "Required All fields!";
	}
}
?>
</center>
</body>
</html>