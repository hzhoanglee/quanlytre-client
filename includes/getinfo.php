<?php
$url = "https://project-d478b.firebaseio.com/.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
//echo $output;
curl_close($ch);
$obj = json_decode($output);
$temperature = $obj->Temperature;
$humidity = $obj->Humidity;
$distance = $obj->Distance;
if ($_GET['func'] == 'temp'){echo $temperature;}
if ($_GET['func'] == 'humid'){echo $humidity;}
if ($_GET['func'] == 'distance'){echo $distance;}
?>