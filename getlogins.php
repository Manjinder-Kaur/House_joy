<?php session_start();
if(isset($_SESSION['email']))
{
$e=$_REQUEST['email'];
$p=$_REQUEST['pass1'];
$pp=$_REQUEST['pass2'];
$ip=$_SERVER['REMOTE_ADDR'];
$date=date('d/m/y');

if($pp==$p)
{
	echo "<h1>Your Email Match</h1>";
}
else
{
	echo "<h1>Your Email is Not Match</h1>";
	mysqli_error($obj);
}

include "config.php";

$q="INSERT INTO `forget`(`f_id`, `email`, `password`, `conform_password`, `ip`, `date`) VALUES ('','$e','$p','$pp','$ip','$date')";
//echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{		
		$q1="UPDATE `register` SET `password`='$p' WHERE email='$e'";
		$res=mysqli_query($obj,$q1);
		if($res>0)
		{
			header("location:login.php");
		}
		else
		{
			echo "<h1>Your New Password is Not Update</h1>";
		}
		echo "<h1>And Properly Insert</h1>";
	
}
else
{
	echo "<h1>Not Insert</h1>";
}
}
?>