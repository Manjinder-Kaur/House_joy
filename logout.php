<?php
session_start();

unset($_SESSION['vender']);
header("location:../index.php");
 
?>