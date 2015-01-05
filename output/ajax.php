<?php
//q[0] -- rating
//q[1] -- id
	session_start();
	if(!empty($_SESSION['email']))
	{
	$q = explode(" ",$_REQUEST["q"]);
	require "config.php";
//Selection
	$qu="INSERT INTO rating(rat,add_id) VALUES('$q[0]','$q[1]')";
	mysqli_query($connect,$qu);
//total Rating
	$query2="SELECT SUM(rat) AS count FROM rating WHERE add_id='$q[1]'";
	$res1=mysqli_query($connect,$query2);
	$row=mysqli_fetch_array($res1);
	$tr=$row['count'];
//Number of rating
	$query2="SELECT COUNT(id) AS count FROM rating WHERE add_id='$q[1]'";
	$res1=mysqli_query($connect,$query2);
	$row=mysqli_fetch_array($res1);
	$c=$row['count'];
//	new rating
	$newr=$tr/$c;
// insert query 
	//echo $newr;
	$query="UPDATE ads SET rating='$newr' WHERE id='$q[1]' ";
	$res1=mysqli_query($connect,$query);
	mysqli_close($connect);

	}
?>