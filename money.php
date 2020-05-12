<?php 
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
			<?php include "payement.php"; ?>  
						
			</div>
		</div>
	<!-- // about -->
	
	
		</div>
		<!-- //main-content -->	
		
		

		
	
		
	
	<?php include("footer.php")?>
