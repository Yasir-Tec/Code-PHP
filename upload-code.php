<?php

	/*-- we included connection files--*/
	include "connection.php";

	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$uploadOk = 1;

		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];

		//image directory where actual image will be store
		$file_path = "photo/".$file_name;

		$target_file = $file_path . basename($file_name);	

	/*---------------- php textbox validation checking ------------------*/
	if($image_name == "")
	{
		$error = "Please enter Image name.";
	}

	/*-------- now insertion of image section has start -------------*/
	else   
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$file_name."</b> image already exist.";
			$uploadOk = 0;
		}
			else
			{
				$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error());
				mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
				mysqli_query($result,"update alldata set img_name='$image_name',img_path='$file_path' where proname='$image_name'");
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
			}
		}
	}
?>
