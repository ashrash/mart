<?php
	session_start();
	if(isset($_SESSION['email']))
	 {
			require "config.php";
			require "template.html";
			date_default_timezone_set('Asia/Kolkata');
        	$dat= date("F j, Y, g:i a");
			$title=$_POST['title'];
			$type=$_POST['type'];
			$phno1=$_POST['phno1'];
			$address=$_POST['addr'];
			$zip=$_POST['zip'];
			$des=$_POST['des'];
			$time=$_POST['time'];
			require('fileupload.php');
			$em=$_SESSION['email'];
			$q="SELECT * FROM account WHERE email='$em'";
			$res=mysqli_query($connect,$q);
			$row=mysqli_fetch_array($res);
			$uid=$row['id_num'];
			echo $uid;
			$query="INSERT INTO ads(user_id,date,title,type,phno1,address,zip,des,image,time) VALUES('$uid','$dat','$title','$type','$phno1','$address','$zip','$des','$loc','$time') ";
			$qu=mysqli_query($connect,$query);
			if($qu && $k==1)
			{	
				echo "<center><h2>Post Successful</h2></center>";
			
			}
			else
			{
				echo "<center><h1>Sorry, there was an error uploading your file.</h1></center>";
			}
 	}
	 else
			header('Location: http://mart.comyr.com');
	mysqli_close($connect);
?>