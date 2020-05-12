<?php
$e=$_REQUEST['email'];
$q=$_REQUEST['q'];
$a=$_REQUEST['answer1'];
$qu=$_REQUEST['qq'];
$an=$_REQUEST['answer2'];
$ip=$_SERVER['REMOTE_ADDR'];
$date=date('d/m/y');

include "config.php";

$q="SELECT * FROM `register` WHERE `email`='$e'";
//echo $q;
$result=mysqli_query($obj,$q);
if($row=mysqli_fetch_array($result))
{
	$answer1=$row['answer1'];
	$answer2=$row['answer2'];
	if( $answer1 == $a && $answer2 == $an )
	{
		echo "match";
		header("location:logins.php?msg=done");
	}
	else
	{
	mysqli_error($obj);
	//echo "notmatch"
	}
}
?>