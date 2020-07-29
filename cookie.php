


<html>
<head>
	<title>Session and cookies</title>
	<style type="text/css">
	th{
		text-align: right;
	}
	h3{
		text-align: center;
	}
	</style>
</head>
<body>
<table cellpadding="5" cellspacing="10" align="center">
<h3>Login form using session and cookies</h3>
<form action="check.php" method="POST">
<tr><th>Email</th><td><input type="text" name="email" id="email"></td></tr>
<tr><th>Password</th><td><input type="password" name="password" id="pass"></td></tr>
<tr><td align="center" colspan="2"><input type="checkbox" name="remember"  value="1">Remember me</td></tr>
<tr><td align="right" colspan="2"><input type="submit" value="login"  name="login"></td></tr>
</form>
</table>	
<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['pass']))
{
	$email = $_COOKIE['email'];
	$pass = $_COOKIE['pass'];
	echo "<script>
		document.getElementById('email').value = '$email';
		document.getElementById('pass').value = '$pass';

	</script>";
}
?>
</body>
</html>