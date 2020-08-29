<?php
$connect_mysql=mysqli_connect("localhost","root","","cse480");

echo("Hello");

if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$name=$_POST['first'];
$mail=$_POST['mail'];
$password=$_POST['pwd1'];

$sql="INSERT INTO user(name,mail,password) values('$name','$mail','$password')";

if(mysqli_query($connect_mysql,$sql))
{
        header("Location:Sign in.php");
}
else {
	header("Location:Signup.php?msg=Email ID already exist! Please try again");
}

?>