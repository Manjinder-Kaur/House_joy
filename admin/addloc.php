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
		<h1	style="text-align:center">Enter Add Town/Village</h1></br>
			<form class="form-horizontal" action="getaddloc.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="scat" class="col-sm-2 control-label">Select City</label>
				<div class="col-sm-10">
				  <select class="form-control" name="scity"required="required" >
				  <option disabled="disabled" selected="selected">--SELECT CITY--</option>
				  <?php
				  include "config.php";
				  $q="select * from addcity";
				  $result=mysqli_query($obj,$q);
				 while($row=mysqli_fetch_array($result))
				  {
					  echo "<option>".$row['city_name']."</option>";
				  }
				  mysqli_close($obj);
				  ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
			  
				<label for="cat" class="col-sm-2 control-label">Enter Town/Village</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="town" required="required" placeholder="Enter Town/Village">
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