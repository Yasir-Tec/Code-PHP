
<head>
<style type="text/css">
				.button {
		  background-color: #4294D1;
		  border: none;
		  color: white;
		  padding: 5px 8px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 2px 1px;
		  cursor: pointer;
		}
</style>
</head>
<?php

$getname = $_POST["details"];


//$conn = mysqli_connect("localhost","root","Yasir@4633","mydb");

$conn = mysqli_connect('localhost','root',"Yasir@4633",'upload');

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
else
{

	$sql = "select * from alldata where proname='$getname'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$nameimg = $row["img_name"];
			?><h2 style="text-align:center;font-weight:bold;margin-top:4%"><?php echo $nameimg ?></h2><?php
			
			$path = $row["img_path"];
			$desc = $row["subject"];
			$price = $row["proprice"];
?>
			<center>
			<img src="<?php echo $path ?>" style="width:20%" >
			<p style="text-align:center "><?php echo "Rs ".$price ?></p>
			<div class="button">
		 		<button class='button' name='details' value='BYnow' >BY NOW</button>
			</div></center>
			<?php

		}
	}
	else
	{
		echo "NO data found";
	}
}
?>