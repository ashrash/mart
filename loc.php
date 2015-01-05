<?php
$ip =$_SERVER['REMOTE_ADDR']; // the IP address to query
echo $ip;
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') 
{
  $country=$query['country'];
	$city=$query['city'];
	echo $country;
	echo $city;
} else {
  echo 'Unable to get location';
}
?>