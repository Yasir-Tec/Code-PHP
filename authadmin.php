

<?php

$adminusername ="yamin@gmail.com";
$adminpassword = "yamin123";

$username = $_POST["Email"];
$pass = $_POST["password"];


if($username == $adminusername && $pass==$adminpassword)
{
	echo "authorized";
	header("location:dup.php");
}
else
{
	echo "wrong username or password";
}





?>