<?php
include ('../config.php');
$url = $config['firebase_url'] . "/Danger/.json";
echo "Program started: " . $url . "\n";
$count = 0;
$break = 5;
$open = 0;
$through = 0;
$breaktime = $break;
while(1 == 1){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($output);
    $door = $obj->OutOfRange;
    $pass = $obj->DoorPassed;
    $count = $count + 1;
    echo '[' . $count . '] ';

    if($door == 0){
        echo ("Trong pham vi");
        sleep(1);
        $open = 0;
    }
    if($door == 1){
        echo ("Ngoai pham vi. ");
        if ($open==0){
            $open = 1;
            if ($open == 1){
                $send = curl_init();
                curl_setopt($send, CURLOPT_URL, 'http://vslim.io/backend/send.php?title=Tr%E1%BA%BB%20%C4%91%C3%A3%20v%C6%B0%E1%BB%A3t%20ph%E1%BA%A1m%20vi%20quan%20s%C3%A1t&message=H%C3%A3y%20ki%E1%BB%83m%20tra%20ph%C3%B2ng');
                curl_exec($send);
                curl_close($send);
                $curtime = time();
                echo $curtime;
                $query = "INSERT INTO `logs` (`id`, `type`, `time`, `data`) VALUES (NULL, 'Range', " . $curtime . ", 'Out Range');";
                if ($db->query($query) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: "  . $db->error;
                }
            }
        }
        elseif ($open == 1) {
            echo ' - Da thong bao truoc do. Khong thong bao lai';
        }
    }
    sleep(1);
    echo "\n";
}