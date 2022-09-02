<?php
$db_server_name = "localhost";
$user_name = "root";
$password = "Truth@66567";
$db_name = "e_hosp_php";
date_default_timezone_set('Asia/Kolkata');
if (!$conn = mysqli_connect($db_server_name,$user_name,$password,$db_name))
    {
    die("Failed to Connect!");
    }
?>
