<?php session_start();
include("header1.php")?>
<?php 

				if(!isset($_SESSION['email']))
				{
				header("location:index.php");
				}
				else
				{
					$e=$_SESSION['email'];
				}

if(isset($_SESSION['oid']))
{
	$oid=$_SESSION['oid'];
}

?>			
?>
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			<a href="index.html" id="logo"><h1>HOME JOY</h1></a>
		</div>
		<!-- //inner banner -->
		
		<!-- main-content -->
		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
		<div class="agileits contact">
			<div class="container">
				<h2 class="agile-inner-title">PAY</h2>
					<?php			
					include "config.php";

				$services=0;$total=0;
				if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
				foreach($_SESSION['cart'] as $id=>$quantity){
					$services = $services. ",".$id;
					
				$q="select * from `addservice` where `s_id`='$id'";
				echo $q;
				$result=mysqli_query($obj,$q);
				if($row=mysqli_fetch_array($result))
				{
					$total += ($row[4]*$quantity);
				}
				
				}
				}
				
				$q1="select * from `order` where email='$e'";
				$r=mysqli_query($obj,$q1);
				if($row=mysqli_fetch_array($r))
				{
				$o=$row[0];
				}
				
									
$q="UPDATE `order` SET `price`='$total',`servicesid`='$services' WHERE email='$e' and oid='$oid'";
//echo $q;
//$q="insert into `order` values('$oid','$oc','$loca','$capa','$date','Pending','$total','$services','$uname','not');";
			$k=mysqli_query($obj,$q);
			if($k>0)
			{
				$_SESSION['cart']=null;
				header("location:money.php?x=$oid");
				
			?>
								
							 
			<?php }
			else {
				echo mysqli_error($obj);
			}
				
			?>
						
			</div>
		</div>
	<!-- // about -->
	
	
	<!--//about-->
		</div>
		<!-- //main-content -->	
		
		

		
	
		
	
	<?php include("footer.php")?>
