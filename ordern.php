<?php session_start();
if(isset($_SESSION['email']))
{
	$e=$_SESSION['email'];
}

$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$l=$_REQUEST['loc'];
$v=$_REQUEST['vill'];
$s=$_REQUEST['street'];
$p=$_REQUEST['pin'];
$a=$_REQUEST['add'];

include "config.php";

$q="INSERT INTO `order`(`oid`, `name`, `email`, `location`, `town`, `street_no`, `pin_code`, `address`, `status`) VALUES ('','$n','$e','$l','$v','$s','$p','$a','pending')";

$result=mysqli_query($obj,$q);
if($result>0)
{
//echo "insert";
header("location:checkout.php");
}
else
{
mysqli_error($obj);
}
mysqli_close($obj);

?>

<?php 
include "config.php";
$q1="select * from `order` where email='$e'";
$result=mysqli_query($obj,$q1);
while($row=mysqli_fetch_array($result))
{
	$o=$row['oid'];
	$_SESSION['oid']=$o;
	//echo $o;
	
}

?>