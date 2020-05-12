<?php
$e=$_REQUEST['name'];
$p=$_REQUEST['email'];
$ph=$_REQUEST['phone'];
$m=$_REQUEST['msg'];

$ip = $_SERVER['REMOTE_ADDR'];
 $dd = date('d/m/y');
	



include "config.php";

//$result=mysqli_query($obj,"select * from register ('$u','$p')");

$q="INSERT INTO `contactus`(`c_id`, `name`, `email`, `phone`, `address`, `ip`, `date`) VALUES('','$e','$p','$ph','$m','$ip','$dd')";
echo $q;
$result=mysqli_query($obj,$q);
if($result>0)
{
	echo "insert";
    header("location:contactus.php");
}
else
{
echo "not inserted";
}

mysqli_close($obj);

?>