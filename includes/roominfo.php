<?php
include("../config.php");
$func = $_GET['func'];
switch ($func){
    case 'DoorOpen':
        $url = $config['firebase_url'] . "/Danger/DoorOpen.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 0){
            echo '<h5 class="green-text m-b-0">Cửa đóng</h5>';
        } else {
            echo '<h5 class="red-text m-b-0">Cửa mở</h5>';
        }
    break;
    case 'DoorPassed':
        $url = $config['firebase_url'] . "/Danger/DoorPassed.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 0){
            echo '<h5 class="green-text m-b-0">Chưa qua cửa</h5>';
        } else {
            echo '<h5 class="red-text m-b-0">Đã qua cửa</h5>';
        }
    break;
    case 'OutOfRange':
        $url = $config['firebase_url'] . "/Danger/OutOfRange.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 0){
            echo '<h5 class="green-text m-b-0">Trong phạm vi quan sát</h5>';
        } else {
            echo '<h5 class="red-text m-b-0">Không trong phạm vi quan sát</h5>';
        }
    break;
    case 'Temp':
        $url = $config['firebase_url'] . "/Danger/TempTooHigh.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 1){
            echo '<h5 class="red-text m-b-0">Nhiệt độ quá cao</h5>';
        } else {
            $url = $config['firebase_url'] . "/Danger/TempTooLow.json";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            if ($output == 1) {
                echo '<h5 class="red-text m-b-0">Nhiệt độ quá thấp</h5>';
            }
                else {
                    echo '<h5 class="green-text m-b-0">Nhiệt độ ổn định</h5>';
                }

        }
        break;
    case 'TVLight':
        $url = $config['firebase_url'] . "/DeviceState/TVLight.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 1){
            echo '<h5 class="green-text m-b-0">TV đang bật</h5>';
        } else {
            echo '<h5 class="red-text m-b-0">TV đang tắt</h5>';
        }
        break;
    case 'TVState':
        $url = $config['firebase_url'] . "/DeviceState/TV.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if ($output == 1){
            echo '<h5 class="green-text m-b-0">TV đang cho phép bật</h5>';
        } else {
            echo '<h5 class="red-text m-b-0">TV đang bắt buộc tắt</h5>';
        }
        break;
        //code to be executed if n is different from all labels;
}

?>