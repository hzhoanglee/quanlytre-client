<?php
$url = "https://project-d478b.firebaseio.com/.json";
while(1 == 1){
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
if ($temperature>34){
    echo 'Nhiet do cao';
} else
{
    if ($temperature<20) {
        echo 'Nhiet do thap';
    } else {
        echo 'Nhiet do on dinh';
    }
}
sleep(1);
echo "\n";
}
?>