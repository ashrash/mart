<?php
$word=$_POST['search_word'];
	$connect=mysqli_connect("mysql6.000webhost.com","a7086519_mart","myaz290d","a7086519_mart");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM keys");
			while($row=mysqli_fetch_array($result)) 
			{
				
				$tagkeys=$row['keywords'];
				if(strpbrk($word,$tagkeys) !== false)
				{
					$tag=$row['tag'];
                    
				 }
	  		}
			echo $tag;
			
		
	}
	mysqli_close($connect);
?>		