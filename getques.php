<?php
if(isset($_POST['go']))
{
$q=$_REQUEST['q'];
$a=$_REQUEST['answer1'];
$qu=$_REQUEST['qq'];
$an=$_REQUEST['answer2'];
$ip=$_SERVER['REMOTE_ADDR'];
$date=date('d/m/y');

include "config.php";

$q="INSERT INTO `forget`(`f_id`,`email`,`password`,`ip`,`date`)
VALUES ('$q','$a','$qu','$an','$ip','$date')";
echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{
	$q1="UPDATE `register` SET `password`='$p' WHERE `email`='$pass'";
	echo $q1;
	$res=mysqli_query($obj,$q1);
	if ($res>0)
	{
		echo "updated";
	}
	else
	{
	echo "no update";
	}
	header("location:login.php?msg=done");
	
}s
	echo "insert";
		
}
else
{

mysqli_error($obj);
echo "not insert";
}

?>