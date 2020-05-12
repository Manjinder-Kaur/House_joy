<?php session_start();
$id=$_REQUEST['id'];
$v=$_REQUEST['vender'];
$vp=$_REQUEST['vp'];
$exp=$_REQUEST['exp'];
$fee=$_REQUEST['fee'];
$work=$_REQUEST['work'];
include "config.php";

//$result=mysqli_query($obj,"select * from register ('$u','$p')");

$q="UPDATE `order` SET `vendor_proposal`='1',`v_email`='$v',`v_profession`='$vp',`v_fee`='$fee',`working_per`='$work' WHERE `oid`='$id'";
echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{
	
	header("location:approved.php?x=done");
	
}
else
{
	echo mysqli_error($obj);
	//header("location:login.php?x=nocorrect");
}

mysqli_close($obj);

?>