<?php
session_start();
if(count($_POST)>0){
	$connect_mysql=mysqli_connect("localhost","root","","cse480");

	if(!$connect_mysql)
	{
	    alert("Connection Failed" . mysqli_connect_error());
	}

	$mail=$_POST['mai'];
	$password=$_POST['pwd'];
	$msg="";


	$ret=mysqli_query( $connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
			$row = mysqli_fetch_assoc($ret);
			if(is_array($row)) {

				$_SESSION["mail"] = $mail;
				$_SESSION["password"] = $row[password];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (20*3660) ;
				/*echo "<script type='text/javascript'>alert('$message');</script>";
				header("Location: Inc(Signin).php");*/
			}
			else{
				$message = "Invalid Username or Password!";
				header("Location:tour(inc).php");
			}
		}
			if(isset($_SESSION["mail"])) {
				setcookie('mail', $_POST['mai'], time()+3660);
	            setcookie('password', $_POST['pwd'], time()+3660);
	            

				header('location: tour.php');
		}
?>