<?php
require "config.php";
require "template.html";
	date_default_timezone_set('Asia/Kolkata');
    $dat= date("F j, Y, g:i a");	
	// Passkey that got from link 
	$passkey=$_GET['passkey'];

	// Retrieve data from table where row that match this passkey 
	$sql1="SELECT * FROM temp_user WHERE ccode ='$passkey'";
	$result1=mysqli_query($connect,$sql1);
	//while($row=mysqli_fetch_array($result)) 	
	// If successfully queried
	if($result1)
	{
			$rows=mysqli_fetch_array($result1);	
			$cname=$rows['cname'];//First name
			$dat=$rows['date'];//First name
		$email=$rows['email'];// EMail id 
		$user=$rows['username'];// description
		$type=$rows['type'];// type
		$addr=$rows['address'];// locality
		$phno1=$rows['phno1'];// phone number 1
		$phno2=$rows['phno2'];// phone number 1
		$des=$rows['description'];// description
		$pass=$rows['pass'];
			// Insert data that retrieves from "temp_members_db" into table "registered_members" 			
		$query="INSERT INTO account(cname,date,email,username,type,address,phno1,phno2,description,pass) VALUES('$cname','$dat','$email','$user','$type','$addr','$phno1','$phno2','$des','$pass')";
			$result2=mysqli_query($connect,$query);
	}
	// if not found passkey, display message "Wrong Confirmation code" 
	else 
	{
		echo "<center><h2>Wrong Confirmation code</h2><center>";
	}
// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
	if($result2)
	{
		echo "<center><h2>Your account has been activated</h2></center>";
		// Delete information of this user from table "temp_members_db" that has this passkey 
		
		$sql3="DELETE FROM temp_user WHERE ccode = '$passkey'";
		$result3=mysqli_query($connect,$sql3);
		$subject="Comfirmation Mail ";
			$header="from: rash <pepsi336@gmail.com>";
			$message="Your Account has been Activated!!! \r\n";
			$message.="Your account has been activated, and now you can start posting ads in SME MARKET \r\n";
			$sent_mail = mail($email,$subject,$message,$header); // Sending Email
	}
	?>