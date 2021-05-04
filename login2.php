<?php
	session_start();
	$name=$_POST['name'];
	$password=$_POST['password'];
	$_SESSION['name']['password'];
	$conn=mysqli_connect("localhost","root","","mouse");
	
	$sql="select * from signup where username='$name'and password='$password'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		header("location:Quiz_page.php");
	}
	else{
		header("location:failed.php");
		
	}
	mysqli_close($conn);
?>