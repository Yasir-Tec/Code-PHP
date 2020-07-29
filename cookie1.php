<?php

setcookie("username","yasir",time()+60,"/");

?>

<?php

if(isset($_COOKIE["username"]))
{
	echo "username is".$_COOKIE["username"];
}
else
{
	echo "expired";
}
?>