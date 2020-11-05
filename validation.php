<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userRegistration');

$username=$_POST['user'];
$Password=$_POST['password'];

$s= " select * from userform where username= '$username' && Password='$Password' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['username']=$username;
    header('location:home.php');
}
else
{
    header('location:login.php');
}
?>