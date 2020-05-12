<?php session_start();
		if(isset($_REQUEST['sub']))
		{
		$s=$_REQUEST['scat'];
		$sc=$_REQUEST['subcat'];
		$sn=$_REQUEST['sname'];
		$sp=$_REQUEST['sprice'];
		$d=$_REQUEST['descrip'];
		$fn=$_FILES['file']['name'];
		$fs=$_FILES['file']['size'];
		$ft=$_FILES['file']['type'];
		$ftmp=$_FILES['file']['tmp_name'];
		$path="images/".$fn;
		
		$dd = date('d/m/y');
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$obj=mysqli_connect("localhost","root","","housejoy");
		$q="insert into addservice values('','$s','$sc','$sn','$sp','$path','$d')";
		$result=mysqli_query($obj,$q);
		if($result>0)
		{
		echo "$q";	
		move_uploaded_file($ftmp,$path);
		echo "inserted"; 
		}
else
 {
	
echo mysqli_error($obj);
}
}
?>

		