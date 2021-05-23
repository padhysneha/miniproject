<?php

$server_name="localhost";
$db_username="root";
$db_password="123456";
$db_name="cart_system";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    "Database Connected";
}
else {
    echo "Database connection failed";
}
?>