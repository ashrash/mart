<?php
	require "template.html";
	require "config.php";
	session_start();
	if(!isset($_SESSION['email']))
	   {
		   	header('Location: login.php?unauth');
	   }
	   	header('Location: http://mart.comyr.com/main/index.php');
		
?>