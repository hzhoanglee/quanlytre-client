<?php
//Database
$dbhost="127.0.0.1"; //hostname
$dbuser="";  //mysql acc/ username
$dbpass="";  //mysql scc/ password
$dbname=""; //mysql database name


//require('includes/db.php');
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

//System Config
$config['site_url'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'system_site_url'")-> fetch_assoc()['value'];
$config['firebase_url'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'system_firebase_url'")-> fetch_assoc()['value'];
//Alert Config
$config['alert_cooldown'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_cooldown'")-> fetch_assoc()['value'];
$config['alert_phone_1'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_1'")-> fetch_assoc()['value'];
$config['alert_phone_2'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_2'")-> fetch_assoc()['value'];
$config['alert_phone_3'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_phone_3'")-> fetch_assoc()['value'];
$config['alert_tempMax'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_tempMax'")-> fetch_assoc()['value'];
$config['alert_tempMin'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'alert_tempMin'")-> fetch_assoc()['value'];
//Limit Config
$config['limit_tv'] = $db->query("SELECT * FROM `settings` WHERE `type` = 'limit_tv'")-> fetch_assoc()['value'];

?>
