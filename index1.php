<title>HELLO</title>
<?php
	require "configure.php";
	$conn=mysqli_connect("mysql6.000webhost.com","a7086519_search","myaz290d","a7086519_search");
	
  		$qry="SELECT * FROM `keys`";
		$res=mysqli_query($connect,$qry);
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)) 
		{
			$keywords=$row['keywords'];
			$id=$row['id_no'];
			$d = array(" ","\n",",", ".", "-","  ","\0");
        	$keyword = explode($d[0],strtr($keywords,array_combine(array_slice($d,1),array_fill(0,count($d)-1,array_shift($d)))));
			$len=count($keyword);
			for($i=0;$i<$len;$i++)
			{
				$q1="INSERT INTO dictionary (words,tag_id) VALUES('$keyword[$i]','$id')";
				$r=mysqli_query($conn,$q1);
			}
			
		}

	mysqli_close($connect);
	mysqli_close($conn);
	require "index2.php" ;

?>