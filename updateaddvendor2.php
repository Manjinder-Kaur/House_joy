<?php
$x=$_REQUEST['vpic'];

$mven=$_REQUEST['mven'];
$memail=$_REQUEST['memail'];
$mcontact=$_REQUEST['mcontact'];
$mpro=$_REQUEST['mpro'];
$mxp=$_REQUEST['mexp'];
$madd=$_REQUEST['madd'];
$mexp=$_REQUEST['mexp'];
$mmst=$_REQUEST['mst'];

$con=mysqli_connect("localhost","root","","housejoy");

$path="";
$vpic=$_REQUEST['vpic'];

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

$m="UPDATE `vendor` SET `v_name`='$mven',`v_email`='$memail',`v_contact`='$mcontact',`v_professional`='$mpro',`v_experience`='$mexp',`v_address`='$madd',`v_pic`='$path',`v_status`='$mmst' WHERE `v_id`='$x'";	
echo $m ;
//$m="update items set product_name='$Dsname',price='$Fees',product_detail='$Discount'
//,product_pic='' where product_id=$Did ";



$result=mysqli_query($con,$m);
//echo $m;
if($result>0)

{
	

header("location:manageaddvendor.php?x=done");
}
echo mysqli_error($con);	
mysqli_close($con);


?>