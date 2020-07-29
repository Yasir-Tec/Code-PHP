<?php

	$myemail = "yasir@gmail.com";
	$mypass = "1234";

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$remember = $_POST['remember'];

	if($email == $myemail and $password == $mypass)
	{
		session_start();
		$_SESSION['email'] = $email;
		header("location:welcome.php");

		if(isset($_POST['remember']))
		{
			setcookie("email",$email,time()+360000);
			setcookie("pass",$password,time()+360000);

		}

		else
		{

		}
	}
	else
	{
		echo "Email or password is invalid.<br> Click here to <a href='cookie.php'>try again</a>";
	}
}
else
{
	header("location:cookie.php");
}
?>