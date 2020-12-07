<?php
include("../config.php");
$url = $config['firebase_url'] . "/Sensor/.json";
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
//$distance = $obj->Distance;
if ($_GET['func'] == 'temp'){echo $temperature;}
if ($_GET['func'] == 'humid'){echo $humidity;}
if ($_GET['func'] == 'distance'){
    $url = $config['firebase_url'] . "/DeviceState/TVTimeleft.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($output);
    $distance = $obj;
    echo gmdate("H:i:s", $distance);

}

?>