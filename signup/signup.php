<?php
	require"template.html";
	// connecting MySQL Database to php
	$connect=mysqli_connect("mysql6.000webhost.com","a7086519_mart","myaz290d","a7086519_mart");
	if (mysqli_connect_errno()) 
	{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}		
	else
	{
		date_default_timezone_set('Asia/Kolkata');//date stamp
    	$dat= date("F j, Y, g:i a");//date	
		$cname=$_POST['cname'];//First name
		$email=$_POST['email_id'];// EMail id 
		$sql="SELECT * FROM account WHERE email=$email";
		if(mysqli_query($connect,$sql)==TRUE)
			header('Location : http://mart.comyr.com/');
		$type=$_POST['type'];// type
		$user=$_POST['user_name'];// type
		$addr=$_POST['addr'];// locality
		$phno1=$_POST['phno1'];// phone number 1
		$phno2=$_POST['phno2'];// phone number 1
		$des=$_POST['des'];// description
		$user=$_POST['user_name'];// description
		$salt='J2?H23';
		$pass=md5($_POST['pass_word'].$salt);// encrypted password
		$ccode=md5(uniqid(rand())); // confirmation code
		//Inserting values into table "temp_user"
		$query="INSERT INTO temp_user(cname,date,email,username,type,address,phno1,phno2,description,pass,ccode) VALUES('$cname','$dat','$email','$user','$type','$addr','$phno1','$phno2','$des','$pass','$ccode')";
		$q=mysqli_query($connect,$query);
		//EMAIL !!
		if($q)//Checking for MySQL Query error
		{
			$subject="Comfirmation Mail ";
		$header="from: rash <pepsi336@gmail.com>";
		$message="Your Comfirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://www.mart.comyr.com/signup/confirm.php?passkey=$ccode";// The Activation link
		$sent_mail = mail($email,$subject,$message,$header); // Sending Email
		}
		else
			echo "HELLO , WORLD ... Something went wrong,,.. :( ";// Error reporting 
		// if  email succesfully sent
		if($sent_mail)
		{
			echo "Confirmation link Has Been Sent To Your Email Address.";
			echo "If you have not recived the conformation mail in the next 24 hours contact ADMIN";
		}
		else
		{
			echo "Cannot send Confirmation link to your e-mail address";
		}
	} 

?>
