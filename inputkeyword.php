<?php
$start_time = microtime(TRUE);

session_start(); 
$tag=$_POST['tag'];
$keywords = $_POST['keyword'];
    $keywordfinal = "";
	$connect=mysqli_connect("mysql6.000webhost.com","a7086519_mart","myaz290d","a7086519_mart");
	if (mysqli_connect_errno()) 
    {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    else
    {	
        $keywords = strtolower($keywords);
        echo $tag;
        echo "<br>";
        echo $keywords;
            $res="INSERT INTO qwe(tag,keywords) VALUES('$tag','$keywords')";		
			
        echo "<br>";
    	$a=mysqli_query($connect,$res);
		
	}
	if($a)
	{
			echo "ASDFASDF";
	}
	mysqli_close($connect);
$end_time = microtime(TRUE);

echo $end_time - $start_time;

?>	
