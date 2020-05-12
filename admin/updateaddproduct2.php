<?php
$sid=$_REQUEST['spic'];

$mcat=$_REQUEST['mcat'];
$mscat=$_REQUEST['msub'];
$msname=$_REQUEST['msname'];
$msprice=$_REQUEST['msprice'];
$mdescrip=$_REQUEST['mdescrip'];
$con=mysqli_connect("localhost","root","","housejoy");

$path="";
$spic = $_REQUEST['spic'];

if($_FILES['file']['error']>0)
{
		$path=$_REQUEST['oldpic'];
	}
	else{
		
		$fn=$_FILES['file']['name'];
		$ft=$_FILES['file']['type'];
		$fz=$_FILES['file']['size'];
		$ftmp=$_FILES['file']['tmp_name'];


$arr=explode(".",$fn);
$extension=end($arr);
$newname=md5($msname).".".$extension;
$path="images/".$fn;

move_uploaded_file($ftmp,$path);

	}
$m="UPDATE `addservice` SET `s_cate`='$mcat',`s_subcate`='$mscat',`s_name`='$msname',`s_price`='$msprice',`s_pic`='$path',`description`='$mdescrip' WHERE `s_id`='$sid'";	
echo $m ;
//$m="update items set product_name='$Dsname',price='$Fees',product_detail='$Discount'
//,product_pic='' where product_id=$Did ";



$result=mysqli_query($con,$m);
//echo $m;
if($result>0)

{
	
header("location:manageaddproduct.php?x=done");
}
echo mysqli_error($con);	
mysqli_close($con);


?>