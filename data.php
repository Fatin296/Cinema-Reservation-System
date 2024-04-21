<?php
	$con=mysqli_connect("localhost","root","","cinema_db");
if (mysqli_connect_error())
	echo "Something went wrong";
else
{
	$a=$_POST['UserName'];
	$b=$_POST['Password'];

	
	
	$sql="INSERT INTO `admin`(`UserName`, `Password`) VALUES ('$a','$b')";
	mysqli_query($con,$sql);
header('Location:Login.php');
}

?>