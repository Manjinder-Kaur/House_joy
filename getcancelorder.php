<?php
$o=$_REQUEST['oid'];
$e=$_REQUEST['email'];
$d=$_REQUEST['drop'];

$date=date('d/m/y');
$ip=$_SERVER['REMOTE_ADDR'];
include "config.php";

$q="insert into cancelorder values ('','$o','$e','$d','$ip','$date')";
$result=mysqli_query($obj,$q);
if($result>0)
{
	$q1="UPDATE `order` SET `status`='cancel by user' WHERE `oid`='$o'";
	$res=mysqli_query($obj,$q1);
	if($res>0)
	{
	echo "update";
	}
	else
	{
	echo "not update";
	}
	header("location:myorder.php");
	echo "insert";
		
}
else
{

mysqli_error($obj);
echo "not insert";
}

?>