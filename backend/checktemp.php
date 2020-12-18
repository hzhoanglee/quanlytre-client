<?php
require('../config.php');
$url = "https://project-d478b.firebaseio.com/Sensor.json";
$break = 10;
$breaktime = $break;
while(1 == 1){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
$obj = json_decode($output);
$temperature = $obj->Temperature;
$humidity = $obj->Humidity;
switch (TRUE) {
case $temperature == 'nan':
    echo ("Cam bien loi");
        sleep(1);
        break;
case $temperature >= 30:
    echo 'Nhiet do cao! ';
    if ($break == $breaktime){
        $hightemp = curl_init();
        curl_setopt($hightemp, CURLOPT_URL, $config['site_url'] . 'http://vslim.io/backend/send.php?title=C%E1%BA%A3nh%20b%C3%A1o!&message=Nhi%E1%BB%87t%20%C4%91%E1%BB%99%20trong%20ph%C3%B2ng%20qu%C3%A1%20cao!%20H%C3%A3y%20%C4%91%E1%BA%BFn%20%C4%91i%E1%BB%81u%20ch%E1%BB%89nh%20nhi%E1%BB%87t%20%C4%91%E1%BB%99%20ph%C3%B2ng.');
        curl_exec($hightemp);
        curl_close($hightemp);
        $curtime = time();
        echo $curtime;
        $query = "INSERT INTO `logs` (`id`, `type`, `time`, `data`) VALUES (NULL, 'temp', " . $curtime . ", 'Temp high');";
        if ($db->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: "  . $db->error;
        }
    }
    $break = $break - 1;
    if ($break == 0){
        $break = $breaktime;
    }
    echo ('Canh bao sau: '.$break);
    break;

case $temperature <= 20:
    echo 'Nhiet do thap! ';
    if ($break == $breaktime){
        $hightemp = curl_init();
        curl_setopt($hightemp, CURLOPT_URL, $config['site_url'] . 'http://vslim.io/backend/send.php?title=C%E1%BA%A3nh%20b%C3%A1o!&message=Nhi%E1%BB%87t%20%C4%91%E1%BB%99%20trong%20ph%C3%B2ng%20qu%C3%A1%20thấp!%20H%C3%A3y%20%C4%91%E1%BA%BFn%20%C4%91i%E1%BB%81u%20ch%E1%BB%89nh%20nhi%E1%BB%87t%20%C4%91%E1%BB%99%20ph%C3%B2ng.');
        curl_exec($hightemp);
        curl_close($hightemp);
        $curtime = time();
        echo $curtime;
        $query = "INSERT INTO `logs` (`id`, `type`, `time`, `data`) VALUES (NULL, 'temp', " . $curtime . ", 'Temp low');";
        if ($db->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: "  . $db->error;
        }
    }
    $break = $break - 1;
    if ($break == 0){
        $break = $breaktime;
    }
    echo ('Canh bao sau: '.$break);
    break;
default:
    echo 'Nhiet do on dinh! ';
    break;
}
    sleep(1);
    echo "\n";
}