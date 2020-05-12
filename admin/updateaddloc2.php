<?php
$x=$_REQUEST['x'];
$ml=$_REQUEST['mloc'];
$tn=$_REQUEST['tname'];



$con=mysqli_connect("localhost","root","","housejoy");

	
$m="UPDATE `town` SET `c_id`='$ml',`t_name`='$tn' WHERE `t_id`='$x'";	
echo $m ;
//$m="update items set product_name='$Dsname',price='$Fees',product_detail='$Discount'
//,product_pic='' where product_id=$Did ";



$result=mysqli_query($con,$m);
echo $m;
if($result>0)

{
header("location:manageaddloc.php?x=done");
}
echo mysqli_error($con);	
mysqli_close($con);


?>