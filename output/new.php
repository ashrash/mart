<?php

			require"config.php";	
			$pg=$_GET['page'];
			if($pg=="" || $pg=="1")
			{
				$page=0;
			}
			else
			{
				$page=($pg*10)-10;
			}
			$qry="SELECT * FROM ads ORDER BY id DESC LIMIT $page,9 ";
			$qry1="SELECT * FROM ads";
			$result= mysqli_query($connect,$qry);
			$res= mysqli_query($connect,$qry1);
			$c=mysqli_num_rows($res);
			$count=ceil($c/10);
?>