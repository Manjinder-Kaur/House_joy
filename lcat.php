<?php  session_start();
if(isset($_SESSION['email']))
{
$e=$_SESSION['email'];
}
$c=$_REQUEST['city'];
$l=$_REQUEST['loc'];

include "config.php";
//$q="insert into register values('$c','$l')";
$q="update register set city='$c', location='$l'  where email='$e'";
//echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{
	//echo "insert";
	header("location:order.php");
}
else
{
mysqli_error($obj);
}

?>