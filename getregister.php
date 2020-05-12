<?php 
$u=$_REQUEST['username'];
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$g=$_REQUEST['gender'];
$m=$_REQUEST['mobile'];
$q=$_REQUEST['question1'];
$qu=$_REQUEST['answer1'];
$que=$_REQUEST['question2'];
$ques=$_REQUEST['answer2'];
$add=$_REQUEST['address'];

	$dd = date('d/m/y');
	$ip = $_SERVER['REMOTE_ADDR'];

include "config.php";

//$result=mysqli_query($obj,"insert into register values('$u','$e','$p','$g','$m','$q','$qu','$que','$ques','$add','$dd','$ip')");
$q="INSERT INTO `register`(`r_id`, `username`, `email`, `password`, `gender`, `mobileno`, `question1`, `answer1`, `question2`, `answer2`, `address`, `date`, `ip`)VALUES ('','$u','$e','$p','$g','$m','$q','$qu','$que','$ques','$add','$dd','$ip')";

$result=mysqli_query($obj,$q);
if($result>0)
{
	//$_SESSION['email']=$e;
	echo "insert";
	header("location:login.php");
	
}
else
{
	echo mysqli_error($obj);
}
mysqli_close($obj);

?>