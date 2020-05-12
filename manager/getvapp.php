<?php
if(isset($_REQUEST['approved']))
{

$a=$_REQUEST['approved'];
foreach($a as $t)
{
include "config.php";
$q="UPDATE `vendor` SET `v_status`='1' WHERE  `v_id`='$t'";
//echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{
	echo "update";
header("location:allvendor.php");
}
else
{
	mysqli_error($obj);
}
mysqli_close($obj);
}
}
else{
	echo "ki e";	
	header("location:vapproved.php");
}
?>