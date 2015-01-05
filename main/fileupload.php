<?php

	$target_dir = "uploads/";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if (file_exists($target_file)) 
	{
		echo "Sorry, file already exists.";
    	$uploadOk = 0;
	}
	
	if ($_FILES["fileToUpload"]["size"] > 50000000) 
	{
    	echo "Sorry, your file is too large.";
    	$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
	{
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOk = 0;
	}
	

	if ($uploadOk == 0) 
	{
    	echo "Sorry, your file was not uploaded.";
	}
	else 
	{
		$loc=md5(uniqid(rand())).".".$imageFileType;
		$c=$target_dir.$loc;
    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$c)) 
		{
        	$k=1;
    	} 
		else 	
		{
        	$k=0;
    	}
	}

?>