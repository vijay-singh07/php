<?php 
session_start();

if((!isset($_SESSION['login_user'])) || ($_SESSION['login_user']!== true ))
{
	header("location: index.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
	<head></head>
		<body>	
			<center>YOU ARE LOGGED IN</center>
		</body>
</html>

