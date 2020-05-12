<?php session_start();
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
include "config.php";

//$result=mysqli_query($obj,"select * from register ('$u','$p')");

$q="SELECT * FROM `register` WHERE `email`='$e' and `password`='$p'";
echo $q;
$result=mysqli_query($obj,$q);
if($row=mysqli_fetch_array($result))
{
	$_SESSION['email']=$e;
	//echo "insert";
	header("location:location.php");
	
}
else
{
	header("location:login.php?x=nocorrect");
}

mysqli_close($obj);

?>