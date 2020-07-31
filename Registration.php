<!doctype html>
<html>
<head>
<title>User Registration</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightblue;">
<center>
<div class="form-group w-50">
<form action="" method="post" class="text-center border border-dark p-5 m-5">
<h1>User Registration Form</h1>
<form action="" method="post" class="text-center border border-dark p-5 m-5">
<label for="Full_name">Full Name:</label>
<input type="text" id="Full_name" name="Full_name" value="John" required><br><br>
<label for="email">Email ID:</label>
<input type="email" id="email" name="email" required><br><br>
<input type="radio" id="male" name="Gender" value="male" required>
<label for="male">Male</label><br>
<input type="radio" id="female" name="Gender" value="female" required>  
<label for="female">Female</label><br>
<label for="Country">Country:</label>
<select id="Country" name="Country">
    <option value="Australia">Australia</option>
    <option value="Canada">Canada</option><br>
    <option value="USA">USA</option><br>
    <option value="India">India</option><br>
    <option value="Nepal">Nepal</option><br>
    <option value="Japan">Japan</option><br>
    <option value="China">China</option><br>
    <option value="Sri Lanka">Sri Lanka</option><br>
</select>
<br>
<label for="Password">Password:</label><br>
<input type="password" id="Password" name="Password" minlength="8" required><br>
<br>
<input type="submit" value="Register" name="submit" class="form-control btn btn-success"><br/><br/>
<a href="login.php" class="form-control btn btn-danger">Login</a>
</form>
<?php
if(!empty($_POST['Full_name']) && !empty($_POST['email']) && !empty($_POST['Gender']) && !empty($_POST['Password']) && !empty($_POST['Country']))
{
    $Full_name=$_POST['Full_name'];
    $email=$_POST['email'];
    $Gender=$_POST['Gender'];
    $Password=$_POST['Password'];
    $Country=$_POST['Country'];
    $conn = new mysqli('localhost', 'root', '') or die (mysqli_error());
    $db = mysqli_select_db($conn, 'sensor') or die("DB Error");
    $query = mysqli_query($conn, "SELECT * FROM registration WHERE email='".$email."'");
    $numrows = mysqli_num_rows($query);
    if($numrows == 0)
    {
        $sql = "INSERT INTO registration(Full_name,email,Gender,Password,Country) VALUES('$Full_name','$email','$Gender','$Password','$Country')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script type='text/javascript'>alert('Account Created !!');</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('That email id already exists!');</script>";
        }
    }
}
else
{
    ?>
    <script>alert('Required all felds');</script>
    <?php
}
?> 
</center>
</body>
</html>