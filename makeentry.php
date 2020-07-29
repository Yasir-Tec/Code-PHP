<?php

$protype = $_POST["protype"];
$proprice = $_POST["proprice"];
$procname = $_POST["procname"];
$proquantity = $_POST["proquantity"];


$conn = mysqli_connect("localhost","root","Yasir@4633","entry");

if(!$conn)
{
	die("connection failed ".mysqli_connect_error());
}
else
{
	echo "connection establised";
	$sql = "insert into makeentry(protype,proprice,procname,proquantity) values('$protype',$proprice,'$procname',$proquantity)";
	if(mysqli_query($conn,$sql))
	{
		echo "data saved";
	}
	else
	{
		echo "failed";
	}
}
	/*$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)
	{		
		while($row = mysqli_fetch_assoc($result))
		{
			echo "name".$row["protype"];
			echo "price".$row["proprice"];
		}
	}
	else
	{
		echo "Due to server problem data is not beed saved..Thanks";
	}*/



?>
