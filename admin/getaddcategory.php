<?php session_start();

if(isset($_REQUEST['sub']))
{
$c=$_REQUEST['cat'];

$fn=$_FILES['file']['name'];
$ft=$_FILES['file']['type'];
$fs=$_FILES['file']['size'];
$ftmp=$_FILES['file']['tmp_name'];
$arr=explode(".",$fn);
$extension=end($arr);
$newname=md5($c).".".$extension;
$path="images/".$fn;



include "config.php";
$result=mysqli_query($obj,"insert into category values('','$c','$path')");

if($result>0)
{
move_uploaded_file($ftmp,$path);
header("location:addcat.php");
}
else
{
echo mysqli_error($obj);
}
mysqli_close($obj);
}
?>