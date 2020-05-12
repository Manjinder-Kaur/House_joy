<?php

include("header1.php")?>
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			<h1></h1>
		</div>
		<!-- //inner banner -->
		
		<!-- main-content -->
		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
		<div class="agileits contact">
			<div class="container">
				<?php 
				if(isset($_SESSION['email']))
				{
				$e=$_SESSION['email'];
				include "config.php";
				$q="SELECT * FROM `register` WHERE `email`='$e'";
				$result=mysqli_query($obj,$q);
				while($row=mysqli_fetch_array($result))
				{
					$u=$row['username'];
					$e=$row['email'];
					$c=$row['city'];
					$l=$row['location'];
				}
				}
				?>
				<h1 class="agile-inner-title" style="text-align:center">Order now</h1>
					<form class="form-horizontal" action="ordern.php" method="post">
						<div class="form-group">
							<h4><label for="name" class="col-sm-2 control-label ">Name</label></h4>
							<div class="col-sm-10" name="name">
								<input type="text" class="form-control input-lg" name="name" value="<?php echo $u;?>"readonly="readonly"/>
		
						
							</div>
						</div>
						<div class="form-group">
							<h4><label for="email" class="col-sm-2 control-label ">Email</label></h4>
							<div class="col-sm-10">
								<input type="text" class="form-control input-lg" name="email" value="<?php echo $e;?>"  readonly="readonly"/>
								
							</div>
						</div>
						<div class="form-group">
							<h4><label for="loc" class="col-sm-2 control-label ">City</label></h4>
							<div class="col-sm-10">
								<input type="text" class="form-control input-lg" name="loc" value="<?php echo $c;?>" readonly="readonly"/>
								
							</div>
						</div>
						<div class="form-group">
							<h4><label for="vill" class="col-sm-2 control-label ">Town/Village</label></h4>
							<div class="col-sm-10">
								<input type="text" class="form-control input-lg" name="vill" value="<?php echo $l; ?>" readonly="readonly"/>
								
							</div>
						</div>
						<div class="form-group">
							<h4><label for="street" class="col-sm-2 control-label ">Street No</label></h4>
							<div class="col-sm-10">
								<input type="text" name="street" required="required" class="form-control input-lg" />
								
							</div>
						</div>
						<div class="form-group">
							<h4><label for="pin" class="col-sm-2 control-label ">Pin Code</label></h4>
							<div class="col-sm-10">
								<input type="number" name="pin" class="form-control input-lg" required="required">
								
							</div>
						</div>
						<div class="form-group">
							<h4><label for="add" class="col-sm-2 control-label ">Address</label></h4>
							<div class="col-sm-10">
								<textarea name="add" required="required" class="form-control input-lg"></textarea>
								
							</div>
						</div>
								  
						<div class="form-group">
								  
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="sub" class="btn  btn-lg btn-default btn-danger">GO</button>
							</div>
						</div>
					</form>				
								
			</div>
		</div>
	<!-- // about -->
	
	
	<!--//about-->
		</div>
		<!-- //main-content -->	
		
		

		
	
		
	
	<?php include("footer.php")?>
