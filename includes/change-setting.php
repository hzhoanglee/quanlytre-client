<?php
require ('../config.php');
require ('db.php');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


if($_POST['part'] == 'hethong'){
    //$sql = "UPDATE `settings` SET `value` = '" . $_POST['firebase-url'] . "' WHERE `settings`.`type` = 'firebase_url';UPDATE `settings` SET `value` = '" . $_POST['site-url'] . "' WHERE `settings`.`type` = 'site_url';";
    $sql = "UPDATE settings 
            SET  value= CASE WHEN type = 'system_firebase_url' THEN '" . $_POST['firebase-url'] . "'
            WHEN type = 'system_site_url' THEN '" . $_POST['site-url'] . "'
            END;
            WHERE type IN ('system_firebase_url', 'system_site_url')";
    if ($db->query($sql) === TRUE) {
        echo $_POST['part'];
        echo "<script>window.location.replace(\"/setting.php?value=hethong\");</script>";
    } else {
        echo "\nError updating record: " . $db->error;
    }
}

if($_POST['part'] == 'canhbao'){
    $sql = "UPDATE settings 
            SET  value= CASE 
				WHEN type = 'alert_cooldown' THEN '" . $_POST['cooldown'] . "'
            	WHEN type = 'alert_phone_1' THEN '" . $_POST['phone1'] . "'
				WHEN type = 'alert_phone_2' THEN '" . $_POST['phone2'] . "'
				WHEN type = 'alert_phone_3' THEN '" . $_POST['phone3'] . "'
				WHEN type = 'alert_tempMax' THEN '" . $_POST['Slider_Max'] . "'
				WHEN type = 'alert_tempMin' THEN '" . $_POST['Slider_Min'] . "'
            END
            WHERE type IN ('alert_cooldown', 'alert_phone_1', 'alert_phone_2', 'alert_phone_3', 'alert_tempMax', 'alert_tempMin')";
    echo $sql;
    if ($db->query($sql) === TRUE) {
        echo $_POST['part'];
        echo "<script>window.location.replace(\"/setting.php?value=canhbao\");</script>";
    } else {
        echo "Error updating record: " . $db->error;
    }
}

if($_POST['part'] == 'gioihan'){
    $sql = "UPDATE settings 
            SET  value= CASE 
				WHEN type = 'limit_tv' THEN '" . $_POST['tv-limit'] . "'
            END
            WHERE type IN ('limit_tv')";
    echo $sql;
    if ($db->query($sql) === TRUE) {
        echo $_POST['part'];
        echo "<script>window.location.replace(\"/setting.php?value=gioihan\");</script>";
    } else {
        echo "Error updating record: " . $db->error;
    }
}
$db->close();
?>
