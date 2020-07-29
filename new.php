
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" Content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<?php

include "connection.php";

	$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select img_name,img_path from alldata");?>

	<?php
	while($rows = mysqli_fetch_array($image_query))
	{
		$img_name = $rows['img_name'];
		$img_src = $rows['img_path'];
	?>


		
					<div class="container " ><div class="row">
			
				<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
					<div class="card">
						<img src="<?php echo $img_src; ?>" class="card-img img-fluid">
						<div class="card-body">
							<h2 class="card-title"><?php echo $img_name; ?></h2>
							<p class="card-text">For better and faster</p>
						</div>
					</div>
				</div>
	

<?php
	}
	?>		</div>
		</div>
