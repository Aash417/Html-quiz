<?php
	$name=$_POST['name'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$email=$_POST['email'];
	$conn=mysqli_connect("localhost","root","","mouse");
	$sql="insert into signup(Username,Email,Password,Cpassword) values('$name','$email','$password','$cpassword')";
	if (mysqli_query($conn,$sql)) {
		header("location:Quiz_page.php");
	}
	else{
 		header("location:failed.php");
	}
		mysqli_close($conn);
?>