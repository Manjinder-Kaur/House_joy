<?php

	include("header1.php");
	if(!isset($_SESSION['name']))
	{
		header("location:index.php?x=loginfirst");
	}
	
	?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1	style="text-align:center">Enter Add Vendor</h1></br>
			<form class="form-horizontal" action="getvendor.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="Vendor" class="col-sm-2 control-label">Vendor Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="vendor" required="required" placeholder="Vendor Name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="email" class="col-sm-2 control-label">Vendor Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="email" required="required" placeholder="Vendor Email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label">Vendor Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="pass" required="required" placeholder="Vendor Password">
				</div>
			  </div>
			  <div class="form-group">
				<label for="contact" class="col-sm-2 control-label">Vendor Contact</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="contact" required="required" placeholder="Vendor Contact">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="pro" class="col-sm-2 control-label">Vendor Professional</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="pro" required="required" placeholder="Vendor Professional">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="exp" class="col-sm-2 control-label">Vendor Experience</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="exp" required="required" placeholder="Vendor Experience">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="add" class="col-sm-2 control-label">Vendor Address</label>
				<div class="col-sm-10">
				  <textarea class="form-control" name="add" required="required" placeholder="Vendor Address"></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Vendor Pic</label>
				<div class="col-sm-10">
				  <input type="file" name="file"required="required" >
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sub" class="btn btn-default">GO</button>
				</div>
			  </div>
</form>
		</div>
	</div>
	<!--end-booking-->
	<!--strat-date-piker-->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!--//End-date-piker-->
					

<?php include("footer.php");?>