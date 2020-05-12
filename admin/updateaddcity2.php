<?php
$x=$_REQUEST['x'];

mn$=$_REQUEST['mname'];



$con=mysqli_connect("localhost","root","","housejoy");

	
$m="UPDATE `addcity` SET `city_name`='$mname' WHERE `c_id`='$x'";	
echo $m ;
//$m="update items set product_name='$Dsname',price='$Fees',product_detail='$Discount'
//,product_pic='' where product_id=$Did ";



$result=mysqli_query($con,$m);
echo $m;
if($result>0)

{
header("location:manageaddcity.php?x=done");
}
echo mysqli_error($con);	
mysqli_close($con);


?>