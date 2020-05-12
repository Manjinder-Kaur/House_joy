<?php session_start();
$v=$_REQUEST['vender'];
$p=$_REQUEST['pass'];
include "config.php";

//$result=mysqli_query($obj,"select * from register ('$u','$p')");

$q="SELECT * FROM `vendor` WHERE `v_email`='$v' and `v_password`='$p'";
echo $q;
$result=mysqli_query($obj,$q);
if($row=mysqli_fetch_array($result))
{
	$_SESSION['vender']=$v;
	//echo "insert";
	header("location:vender/index.php");
	
}
else
{
	echo mysqli_error($obj);
	//header("location:login.php?x=nocorrect");
}

mysqli_close($obj);

?>