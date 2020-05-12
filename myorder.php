<?php
include("header1.php")?>
<?php 

				if(!isset($_SESSION['email']))
				{
				header("location:index.php");
				}
?>
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			<h1 style="text-align:center;">My Order</h1></a>
		</div>
		<!-- //inner banner -->
		
		<!-- main-content -->
		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
		<div class="agileits contact">
			<div class="container">
				
								
					 <?php
				 	if(isset($_REQUEST['x'])) {
						if($_REQUEST['x']=="thanks")
						echo "<h2>Thanks Your Payment is done</h2>";
					}
				  ?>
                  <div class="s-12 l-6 col-md-offset-1" >
						<h1>Pending Orders</h1><hr class="col-sm-8 "/>
						<span class="clearfix">&nbsp;</span>
						<h4 class="text-center">*Click On Order Id to Pay the Amount For Pending Orders</h4>
					<?php
					$e = $_SESSION['email'];
include "config.php";
$q="select * from `order` where email='$e' and `status`='pending'";

$result=mysqli_query($obj,$q);
	$i=1;
	if (mysqli_num_rows($result) > 0) {
   
	echo"<table width='1200px' class='table'><tr><td>SrNo</td><td>Order Id</td><td>Username</td>
	</tr>";
	
	while(($row=mysqli_fetch_array($result)))
{
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['oid']."</td>";
	echo "<td>".$row['email']."</td>";
	//echo "<td>".$row['Date']."</td>";
    echo "<td><a href='cancelorder.php?x=$row[0]'>Cancel</a></td>";
	
	echo "</tr>";
	$i++;
}
} else {
    echo "<h4 >No Pending Request</h4>";
}

 echo "</table>";
 ?>                 			
			</div>
		</div>
	<!-- // about -->
	
	
	<!--about-->
	
	<!--//about-->
		</div>
		<!-- //main-content -->	
		
		

		
	
		
	
	<?php include("footer.php")?>
