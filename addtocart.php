<?php session_start();
//unset($_SESSION['cart']);
	$id = 	$_REQUEST['x'];
	if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']) ){
	$_SESSION['cart'][$id] += 1;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
        //header("Location:checkout.php");
	}
	else{
		$_SESSION['cart'][$id]=1;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		//header("Location:index.php?x=hhh");
		
	}


?>