<?php session_start();
		if(isset($_REQUEST['sub']))
		{
		$n=$_REQUEST['name'];
		$p=$_REQUEST['pass'];
		
		$dd = date('d/m/y');
		$ip = $_SERVER['REMOTE_ADDR'];

		include "config.php";
		$q="select * from admin where username='$n' and password='$p'";
		$result=mysqli_query($obj,$q);
		if($row=mysqli_fetch_array($result))
		{
			// Insert into newtab va('$n',;$data ,aip)
			$q="insert into showip values('$n','$dd','$ip')";
			$result=mysqli_query($obj,$q);
			if($result>0)
			
			{
				echo "insert";
			}
			$_SESSION['name']=$n;
			header("location:index1.php");
		}
		else
		{
		mysqli_error($obj);
		 echo "<script>alert('Invalid Username or Password');</script>";
		 
		}

		}
	?>