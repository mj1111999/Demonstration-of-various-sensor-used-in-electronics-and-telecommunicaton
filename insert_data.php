<!doctype html>
<html>
<head>
<title>Sensor Details</title>
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
<h1>Sensor Types</h1>

<label>Sensor Name:</label><input type="text" name="sensor_name" class="form-control"></br>
<label>Description :</label><textarea class="form-control" rows="5" name= "description"></textarea><br/>
<label>Application</label><textarea class="form-control" rows="5" name= "application"></textarea><br/>

<input type="submit" value="Add Sensor" name="submit" class="form-control btn btn-danger"><br/><br/>
</div>
</form>
<?php
if(isset($_POST["submit"]))
{
    if(!empty($_POST['sensor_name']) && !empty($_POST['description']) && !empty($_POST['application']))
    {
        $sensor_name=$_POST['sensor_name'];
        $description=$_POST['description'];
        $application=$_POST['application'];
        $conn = new mysqli('localhost', 'root', '') or die (mysqli_error());
        $db = mysqli_select_db($conn, 'sensor') or die("DB Error");
        $sql = "INSERT INTO sensor_type(sensor_name,description,application) VALUES('$sensor_name','$description','$application')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script type='text/javascript'>alert('Sensor added successfully !!');</script>";
        }
        else
        {
            echo "Failure!";
        }

    }
    else
    {
        ?>
		<!--Javascript Alert -->
        <script>alert('Please fill all details');</script>
        <?php
    }
}
?>
</center>
</body>
</html>