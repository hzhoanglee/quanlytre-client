<?php
//Get config
include ('../config.php');
$curtime = time();
echo $curtime;
$query = "INSERT INTO `logs` (`id`, `type`, `time`, `data`) VALUES (NULL, 'TV', " . $curtime . ", 'TV off');";
if ($db->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: "  . $db->error;
}