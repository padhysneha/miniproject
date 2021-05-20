<?php
session_start();

$connection=mysqli_connect('localhost','root','123456');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'csv_db6');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:mainpage.php');
}
else
{
    header('location:login.php');
}
?>