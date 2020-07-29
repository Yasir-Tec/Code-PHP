<?php

session_start();?>
<?php
echo "welcome",$_SESSION['email'];
echo "logout <a href='logout.php'>LOGOUT</a>";
?>