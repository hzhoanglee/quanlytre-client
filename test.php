<?php
session_start();
include("config.php"); //include the config
?>
<?php
//create database connection
include ('includes/db.php')
?>
<?php
$username = "";
$password = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5(md5($_POST['password']));
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);
    $num_rows = $result->num_rows;
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
    }
    if (($username == $row[1]) && ($password == $row[6])) //checking the username and password if right
    {
        //Header("location:'https://hz319.com/'");
        $_SESSION['username'] = $username;
        //echo "<script>window.location='/index.php';</script>";
        echo 'OK';
    } else {
        Header("location:'https://google.com/'");
        echo 'Error';
    }
} else
{
    echo 'false';
}
