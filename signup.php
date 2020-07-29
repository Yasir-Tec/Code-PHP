<?php

header('location:signup.html');

$username = $_POST["username"];
$password = $_POST["password"];

echo "username is" .$username;




$conn = mysqli_connect("localhost","root","Yasir@4633","mydb");


if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
else
{

	echo "connection established";
	$sql = "insert into signin(username,password)values('$username','$password') ";
	if(mysqli_query($conn,$sql))
	{
		echo "data inserted succesfully";
	}
	else
	{
				echo "error";
	}
}
mysqli_close($conn);

?>
