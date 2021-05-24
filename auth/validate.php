<?php
session_start();

$connection=mysqli_connect('localhost','root','123456');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'cart_system');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    $reg="insert into login(email_id,password) values('$email','password');
    mysqli_query($connection,$reg);
    header('location:/index.php');
}
else
{
    header('location:login.php');
}
?>