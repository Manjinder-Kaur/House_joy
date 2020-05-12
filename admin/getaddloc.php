<?php session_start();

if(isset($_REQUEST['sub']))
{
$c=$_REQUEST['scity'];
$t=$_REQUEST['town'];
include "config.php";
$result=mysqli_query($obj,"insert into town values('','$c','$t')");

if($result>0)
{
move_uploaded_file($ftmp,$path);
header("location:addloc.php");
}
else
{
echo mysqli_error($obj);
}
mysqli_close($obj);
}
?>