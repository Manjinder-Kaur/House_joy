<?php session_start();

if(isset($_REQUEST['sub']))
{
$e=$_REQUEST['email'];
$p=$_REQUEST['pass'];
include "config.php";

$q="SELECT * FROM `vendor` WHERE `v_email`='$e' and `v_password`='$p'";

if($result>0)
{
move_uploaded_file($ftmp,$path);
header("location:vendor.php");
}
else
{
echo mysqli_error($obj);
}
mysqli_close($obj);
}
?>