<?php
$word=$_POST['search_word'];
	$connect=mysqli_connect("mysql6.000webhost.com","a7086519_mart","myaz290d","a7086519_mart");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM  `keys`");
			if(!$result)
					echo "SDF";
			while($row=mysqli_fetch_array($result)) 
			{	
				$tagkeys=$row['keywords'];
				if(strpos($tagkeys,$word) !== false)
				{
					$ta=$row['tag'];
					break;
				 }
				
	  		}
	}
	mysqli_close($connect);
?>		