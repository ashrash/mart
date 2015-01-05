<?php
$start_time = microtime(TRUE);

session_start(); 
$keywords="";
$keywordfinal = "";
$keyset =array("sundar", "ashwin");
$temp;
	$connect=mysqli_connect("mysql6.000webhost.com","a7086519_mart","myaz290d","a7086519_mart");
	$conn=mysqli_connect("mysql6.000webhost.com","a7086519_search","myaz290d","a7086519_search");
	if (mysqli_connect_errno()) 
    {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    else
    {
        $query = "SELECT * FROM `keys`";
        $result=mysqli_query($connect,$query);
		$i=0;
		while($row=mysqli_fetch_array($result))
		{
			$keywords=$row['keywords'];
			$tag_id=$row['id_no'];
			$delimiters = array(" ","\n",",", ".", "-","  ","\0");
        $keyword =   explode($delimiters[0],strtr($keywords,array_combine(array_slice($delimiters,1),array_fill(0,count($delimiters)-1,array_shift($delimiters)))));
			$lim=count($keyword);
			$j=0;
			for($i=0;$i< $lim;$i++)
			{
				if($keyword[$i]!="")
				{
					$query="SELECT * FROM dictionary WHERE words='$keyword[$i]'";	
					$result1=mysqli_query($conn,$query);
					$data=mysqli_fetch_array($result1);
				}
				if($data)
				{
					
					
					$id=$data['id'];
					$tid=$data['tag_id'];
					$tid.=" ".$tag_id;	
					$flag=0;
					$tid1=explode(" ",$tid);
					$l=count($tid1);
					for($j=0;$j <$l ;$j++)
					{
							if($tag_id===$tid1)
							{
								$flag=1;
							}
					}
	
					if($flag)
					{
						
						$q="UPDATE dictionary SET tag_id='$tid' WHERE words='$keyword[$i]'";
						$update=mysqli_query($conn,$query);
						echo "UPDATED !!!!!";
					}
					
				}
				else
				{
						
						$query="INSERT INTO `dictionary`(words,tag_id) VALUES('$keyword[$i]','$tag_id')";
						$r=mysqli_query($conn,$query);
				}	
			}
			
		}
	}
	if($a)
	{
			echo "ASDFASDF";
	}
	mysqli_close($connect);
$end_time = microtime(TRUE);

echo $end_time - $start_time;

?>	
