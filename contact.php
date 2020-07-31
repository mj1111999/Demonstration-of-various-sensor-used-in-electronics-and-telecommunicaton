<html>
<head>
	 <title>Contact Us </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<center>
	<div class="login-box">
	<img src="avatar.png" class="avatar">
	<h2>Contact Us </h2>
	<div class="form-group w-50">
		<form action="mail_handler.php" method="post" name="form" class="text-center">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="form-control" rows="5" placeholder="Enter Your Message Here..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="btn btn-warning">
		</form>
	</div>
	</div>
	
</center>
	
</body>
</html>