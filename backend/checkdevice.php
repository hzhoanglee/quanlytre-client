<?php
$url = "https://project-d478b.firebaseio.com/.json";
$limit = 20;
while(1 == 1) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    //echo $output;
    curl_close($ch);
    $obj = json_decode($output);
    $tvstate = $obj->DeviceState->TV;
    $comstate = $obj->DeviceState->Computer;
    $t=0;
    while($t<$limit){
    if($tvstate==0){
        echo ('TV dang tat');
    } else {
            $t = $t+1;
            $left = $limit - $t;
            sleep(1);
            echo ('Thoi gian con lai: '. gmdate('H:i:s', $left). "\n");
        }
    }
    echo "\n";
}
