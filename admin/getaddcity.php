<?php session_start();

if(isset($_REQUEST['sub']))
{
$ca=$_REQUEST['city'];

include "config.php";
$result=mysqli_query($obj,"insert into addcity values('','$ca')");

if($result>0)
{
header("location:addcity.php");
}
else
{
echo mysqli_error($obj);
}
mysqli_close($obj);
}
?>