<?php session_start(); ?>
<?php include("header.php");?>
<?php 

if(isset($_SESSION['email']))
{
	$e=$_SESSION['email'];
    $x=$_REQUEST['x'];
	include "config.php";
	$q="SELECT * FROM `order` WHERE `oid`='$x'";
	$result=mysqli_query($obj,$q);
	while($row=mysqli_fetch_array($result))
	{
		$o=$row['oid'];
		$e=$row['email'];
		
		
		
	}
	}
	?>
	<div class="booking">
		<div class="container">
		<h1 style="text-align:center">Cancel Order And Select Reasion</h1></br>
			<form class="form-horizontal" action="getcancelorder.php" method="post">
			<div class="form-group">
				<h4><label for="oid" class="col-sm-2 control-label ">Oid</label></h4>
				<div class="col-sm-10">
				<input type="text" name="oid" value="<?php echo $o; ?>" class="form-control input-lg " id="oid">
				</div>
		</div>
			
			
			
			  <div class="form-group">
				<h4><label for="email" class="col-sm-2 control-label "> Email</label></h4>
				<div class="col-sm-10">
				<input type="text" name="email" value="<?php echo $e; ?>" class="form-control input-lg " id="email">
				</div>
		</div>
	<div class="form-group">
		<h4><label for="drop" class="col-sm-2 control-label">Select Reasion</label></h4>
		
	
										
															<select name="drop" required="required" >
																<option disabled="disabled" selected="selected">---Select Reasion---</option>
																<option value="Wrong Product Order">Wrong Product Order</option>
																<option value="Address/Phone no./Quantity is incorrect">Address/Phone no./Quantity is incorrect</option>
																<option value="Not interested in item(s) any More">Not interested in item(s) any More</option>
																<option value="Unsure About Product Quality">Unsure About Product Quality</option>
																<option value="Other">Other</option>
															</select>
															</div>		
			  
			  
			 
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sub" class="btn btn-default">Cancel Order</button>
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