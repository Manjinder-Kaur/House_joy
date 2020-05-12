<?php session_start(); 
		
	$pway = $_REQUEST['myhide'];
	$i_id =$_REQUEST['oid'];
	$e = $_SESSION['email'];
include "config.php";
	$q = "update `order` set `pay`='$pway', `vendor_proposal`='0' where `oid`='$i_id'";
	echo $q;
	$k = mysqli_query($obj , $q);
	unset($_SESSION['cart']);
	if($k>0)
	{
		
		header("location:myorder.php");
	}
	else
	{
		echo mysqli_error($obj);
	}

?>