<?php

$cid=$_REQUEST['subcat'];
	
$con=mysqli_connect("localhost","root","","housejoy");

$cname=$_REQUEST['subcat1'];
$path="";
$pic = $_REQUEST['pic'];
if($_FILES['file']['error']>0)

{
	$path=$_REQUEST['oldpic'];
	}
	else
	{
		
		$fn=$_FILES['file']['name'];
		$ft=$_FILES['file']['type'];
		$fz=$_FILES['file']['size'];
		$ftmp=$_FILES['file']['tmp_name'];


$arr=explode(".",$fn);
$extension=end($arr);
$newname=md5($cname).".".$extension;
$path="images/".$fn;



	}
$m="UPDATE `subcategory` SET `s_name`='$cname',`pic`='$path' WHERE `s_id`='$cid'";	
echo $m ;
//$m="update items set product_name='$Dsname',price='$Fees',product_detail='$Discount'
//,product_pic='' where product_id=$Did ";



$result=mysqli_query($con,$m);
//echo $m;
if($result>0)

{
	
move_uploaded_file($ftmp,$path);
header("location:managesubcat.php?x=done");
}
else
{
	
echo mysqli_error($con);
}	
mysqli_close($con);


?>