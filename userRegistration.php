<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userRegistration');

$username=$_POST['user'];
$Password=$_POST['psw'];
$name=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$mail=$_POST['Email'];
$dob=$_POST['dob'];
$add=$_POST['Address'];
$city=$_POST['City'];
$country=$_POST['Country'];

$s= " select * from userform where username= '$username' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num == 1)
{
    echo "Username Already Taken!";
}
else
{
    $reg= " insert into userform(username ,Password, FirstName , LastName , email , DOB , Address , City , Country)
    values ('$username','$Password','$name','$lastname','$mail','$dob','$add','$city','$country')";
    mysqli_query($con,$reg);
    echo "Registration Successfull!";
}
?>