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
		<h1	style="text-align:center">Enter Add City</h1></br>
			<form class="form-horizontal" action="getaddcity.php" method="post">
			  <div class="form-group">
				<label for="city" class="col-sm-2 control-label">Enter City</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="city" required="required" placeholder="Enter City">
				</div>
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