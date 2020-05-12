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
		<h1	style="text-align:center">Enter Add Service</h1></br>
			<form class="form-horizontal" action="getaddservice1.php" method="post" enctype="multipart/form-data">
			 <div class="form-group">
				<label for="scat" class="col-sm-2 control-label">Select Category</label>
				<div class="col-sm-10">
				  <select class="form-control" name="scat" required="required" onchange="data(this.value);">
				  <option disabled="disabled" selected="selected">--SELECT CATEGORY--</option>
				  
				  <?php
				  include "config.php";
				  $q="select * from category";
				  $result=mysqli_query($obj,$q);
				  while($row=mysqli_fetch_array($result))
				  {
					  echo "<option value='$row[c_id]'>".$row['c_name']."</option>";
				  }
				  mysqli_close($obj);
				  ?>
				  </select>
				</div>
			  </div>
			 <div class="form-group">
				<label for="scat" class="col-sm-2 control-label">Select Sub Category</label>
				<div class="col-sm-10"	id="locate">
				  <select class="form-control" name="subcat" required="required" >
				  <option disabled="disabled" selected="selected">--SELECT SUB CATEGORY--</option>
				   </select>
				</div>
			  </div>
			  
			  
			  
			  
			  
			 <div class="form-group">
				<label for="subcat" class="col-sm-2 control-label">Service Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="sname" required="required" placeholder="Service Name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="subcat" class="col-sm-2 control-label">Service Price</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="sprice" required="required" placeholder="Service Price">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Service Pic</label>
				<div class="col-sm-10">
				  <input type="file" name="file" required="required" >
				</div>
			  </div>
			  <div class="form-group">
				<label for="subcat" class="col-sm-2 control-label">Descripstion</label>
				<div class="col-sm-10">
				  <textarea class="form-control" name="descrip" required="required" placeholder="Descripstion"></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sub" class="btn btn-default">Submit</button>
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