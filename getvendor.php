<?php session_start();

if(isset($_REQUEST['sub']))
{
$v=$_REQUEST['vendor'];
$e=$_REQUEST['email'];
$pp=$_REQUEST['pass'];
$c=$_REQUEST['contact'];
$p=$_REQUEST['pro'];
$ex=$_REQUEST['exp'];
$a=$_REQUEST['add'];
$fn=$_FILES['file']['name'];
$ft=$_FILES['file']['type'];
$fs=$_FILES['file']['size'];
$ftmp=$_FILES['file']['tmp_name'];
$arr=explode(".",$fn);
$extension=end($arr);
$newname=md5($c).".".$extension;
$path="images/".$fn;

$p1="admin/".$path;
include "config.php";
$result=mysqli_query($obj,"insert into vendor values('','$v','$e','$pp','$c','$p','$ex','$a','$path','0')");

if($result>0)
{
move_uploaded_file($ftmp,$p1);
header("location:addvendor.php");
}
else
{
echo mysqli_error($obj);
//header("location:addvendor.php");
}
mysqli_close($obj);
}
?>	