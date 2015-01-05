<?php
	session_start();
	require "config.php";
	require "template.html";
	$error['alert']=' ';
	$error['email']= ' ';
	$error['pass']= ' ';	
	$error['email']= ' ';
	$error['pass']= ' ';	
	$salt='J2?H23';
if(isset($_GET['unauth']))
{
		echo "<h2>Login to View the content..</h2>";
}
if(isset($_POST['submit']))
{
	// get and clean data from form
		$email =$_POST['email'];
		$pass = $_POST['pass'];
		$p=md5($pass.$salt);
		$q="SELECT * FROM account WHERE email='$email' AND pass='$p'";
		$res=mysqli_query($connect,$q);
		$row=mysqli_fetch_array($res);
		if($row['email']==$email && $row['pass']==$p)
		{
			$_SESSION["email"]=$email;
			$_SESSION["pass"]=$pass;
			$_SESSION['EXPIRES'] = time() + 3600;
			header('Location: member.php');
		}
		else
		{
			echo "<h2>Worng password</h2>";
		}
}
?>