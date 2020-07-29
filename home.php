

<?php

session_start();
?>
<?php

	unset($_SESSION["name"]);
	if(isset($_SESSION["naame"]))
	{
		header("location:signup.html");
	}
	else
	{
		echo "empty";
	}


?>


