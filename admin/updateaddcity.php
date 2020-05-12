<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage Add Product</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `addcity`where `c_id`='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))

	$cid=$row['0'];
	$cname=$row['1'];
	

	
?>
			<form class="form-horizontal" action="updateaddcity2.php" method="post">
           <input type="hidden" name="x" value="<?php echo $x;?>">
		   <label for="mname" class="col-sm-2 control-label">Manage Add City Name</label>
				<div class="col-sm-10">
				 <input type="text" class="form-control" name="mname" required="required" value="<?php echo $cname?>"placeholder="Manage Add City Name">
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <input type="submit" name="sub" class="btn btn-default" value="submit">
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