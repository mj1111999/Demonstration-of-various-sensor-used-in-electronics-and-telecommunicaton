<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='99mohitjain@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		
		mail($email,$subject,$message,$headers);
		if(mail($to, $subject, $message, $headers)){
			echo "<script type='text/javascript'>alert('Mail Sent. Thank you " . $name . ", we will contact you shortly.');
			</script>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>