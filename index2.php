<?php
	$conn=mysqli_connect("mysql6.000webhost.com","a7086519_search","myaz290d","a7086519_search");
	$query="SELECT a . * , b.totalCount AS DUPLICATE FROM dictionary a INNER JOIN (SELECT words, COUNT( * ) totalCount FROM dictionary
		GROUP BY words) b ON a.words = b.words WHERE b.totalCount >=2";
	$result= mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result)
	
		$word=$row['word'];
		while($row=mysqli_fetch_array($result))
		{
			$word2=$row['word'];
			if($word===$word2)
			{
				
			}
		
		}
	
	  /*
				if(row1) 
				{					
					$id=$row1['id'];
					echo $id;
					$tid=$row1['tag_id'];
					$tid.=" ".$tag_id;	
					echo $tid . "<br>";
					$flag=0;
					$i=0;
					$len2=count($tid);
					for($i=0;$i<$len;$i++)
					{
						if($id===$tid1)
						{
								echo "ASDF";
								$flag=1;
						}
					}
					if($flag)
					{
						$q="UPDATE dictionary SET tag_id='$tid' WHERE words='$keyword[$i]'";
						$update=mysqli_query($conn,$q);
						echo "UPDATED !!!!!";
					}
				}*/
?>