<?php session_start();
//$id = $_REQUEST['x'];
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
{
	unset($_SESSION['cart']);
}
header("location:checkout.php");
?>