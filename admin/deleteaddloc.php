<?php
if(isset($_REQUEST['x'])){ 
	
$cid=$_REQUEST['x'];


$obj=mysqli_connect("localhost","root","","housejoy");

$del="DELETE FROM town WHERE t_id=$cid";

$result=mysqli_query($obj,$del);
if($result>0)
{
header("location:manageaddloc.php?x=del");
}	
mysqli_close($obj);
}
else{
	
	header("location:manageaddloc.php");
}

?>