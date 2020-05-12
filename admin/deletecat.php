<?php
if(isset($_REQUEST['x'])){ 
	
$cid=$_REQUEST['x'];


$obj=mysqli_connect("localhost","root","","housejoy");

$del="DELETE FROM category WHERE c_id=$cid";

$result=mysqli_query($obj,$del);
if($result>0)
{
header("location:managecat.php?x=del");
}	
mysqli_close($obj);
}
else{
	
	header("location:managecat.php");
}

?>