<?php
/*Get user ip address*/
$ip_address=$_SERVER['REMOTE_ADDR'];

/*Get user ip address details with geoplugin.net*/
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

/*Get City name by return array*/
$city = $addrDetailsArr['geoplugin_city']; 

/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];

/*Comment out these line to see all the posible details*/
/*echo '<pre>';
print_r($addrDetailsArr);
die();*/

if(!$city){
   $city='Not Define';
}if(!$country){
   $country='Not Define';
}
echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
echo '<strong>City</strong>:- '.$city.'<br/>';
echo '<strong>Country</strong>:- '.$country.'<br/>';

require_once('IP2Location.php');

// Standard lookup with no cache
$loc = new IP2Location('databases/DB24.BIN');

/*
   Cache whole database into system memory and share among other scripts & websites
   WARNING: Please make sure your system have sufficient RAM to enable this feature
*/
//$loc = new IP2Location('databases/DB24.BIN', IP2Location::SHARED_MEMORY);

/*
   Cache the database into memory to accelerate lookup speed
   WARNING: Please make sure your system have sufficient RAM to enable this feature
*/
//$loc = new IP2Location(ROOT . 'databases/DB24.BIN', IP2Location::MEMORY_CACHE);

$ip = $_SERVER['REMOTE_ADDR'];
$record = $loc->lookup($ip, IP2Location::ALL);

echo 'IP Address: ' . $record->ipAddress . '<br />';
echo 'IP Number: ' . $record->ipNumber . '<br />';
echo 'ISO Country Code: ' . $record->countryCode . '<br />';
echo 'Country Name: ' . $record->countryName . '<br />';
echo 'Region Name: ' . $record->regionName . '<br />';
echo 'City Name: ' . $record->cityName . '<br />';
echo 'Latitude: ' . $record->latitude . '<br />';
echo 'Longitude: ' . $record->longitude . '<br />';
echo 'ZIP Code: ' . $record->zipCode . '<br />';
echo 'Time Zone: ' . $record->timeZone . '<br />';
echo 'ISP Name: ' . $record->isp . '<br />';
echo 'Domain Name: ' . $record->domainName . '<br />';
echo 'Net Speed: ' . $record->netSpeed . '<br />';
echo 'IDD Code: ' . $record->iddCode . '<br />';
echo 'Area Code: ' . $record->areaCode . '<br />';
echo 'Weather Station Code: ' . $record->weatherStationCode . '<br />';
echo 'Weather Station Name: ' . $record->weatherStationName . '<br />';
echo 'MCC: ' . $record->mcc . '<br />';
echo 'MNC: ' . $record->mnc . '<br />';
echo 'Mobile Carrier Name: ' . $record->mobileCarrierName . '<br />';
echo 'Elevation: ' . $record->elevation . '<br />';
echo 'Usage Type: ' . $record->usageType . '<br />';
?>


