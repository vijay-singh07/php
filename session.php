<?php
session_start();
include_once('index.php');
if((isset($_SESSION['login_user'])) ||  ($_SESSION['login_user']== true ))
{
	header("location: home.php");
	exit;
}
?>