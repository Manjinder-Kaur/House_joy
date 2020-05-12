<?php session_start();
	$q = 	$_REQUEST['q'];
	$id = 	$_REQUEST['x'];
	echo $id;
	if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']) ){
	$_SESSION['cart'][$id] = $q;
	//echo $_SESSION['cart'][$id];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else{
		$_SESSION['cart'][$id]=1;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


?>