<?php

$proname = $_POST["proname"];
$proprice = $_POST['proprice'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$watts = $_POST['watts'];
$cool = $_POST['cool'];

echo "name".$proprice."price".$proprice;



$conn = mysqli_connect("localhost","root","Yasir@4633","upload");


if(!$conn)
{	
	die("connection failed".mysqli_connect_error());
}
else
{

	echo "connection established";
	$sql =" INSERT INTO alldata(proname,proprice,country,subject,watts,cool)values('$proname','$proprice','$country','$subject','$watts',$cool) ";

	if(mysqli_query($conn,$sql))
	{
		header("location:dup.php");
	}
	else
	{
		echo "failed";
	}
}
mysqli_close($conn);
?>
