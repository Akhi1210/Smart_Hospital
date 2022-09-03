<?php
$db_server_name = "host = ec2-44-207-126-176.compute-1.amazonaws.com";
$user_name = "wqujkwoxfevzar";
$password = "eebf86c32af3c380deadd3de8a0e016c9af31e6714985169d9a49f48272bc969";
$db_name = "dbname = dbtv8t53sqhdco";
$credentials = "user = wqujkwoxfevzar password=eebf86c32af3c380deadd3de8a0e016c9af31e6714985169d9a49f48272bc969";
$port = "port = 5432"
date_default_timezone_set('Asia/Kolkata');
if (!$conn = pg_connect("$db_server_name $port $db_name $credentials")
    {
    die("Failed to Connect!");
    }
echo "This is connection.php";
?>
