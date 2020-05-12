<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage Add Location</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `town`where `t_id`='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))

	$tid=$row['0'];
	$cid=$row['1'];
	$tname=$row['2'];
	

	
?>
			<form class="form-horizontal" action="updateaddloc2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group"><input type="hidden" name="img1" class="form-control" value="<?php echo $tid; ?>"/>
           <input type="hidden" name="x" value="<?php echo $x;?>">
		   <label for="mloc" class="col-sm-2 control-label">Manage Select Location</label>
				<div class="col-sm-10">
				 <input type="text" class="form-control" name="mloc" required="required" value="<?php echo $cid ?>">
				</div>
			  </div>
			 <div class="form-group">
				<label for="tname" class="col-sm-2 control-label">Manage Select Town Name</label>
				<div class="col-sm-10"	id="locate">
				  <input type="text" class="form-control" name="tname" required="required" value="<?php echo $tname ?>" placeholder="Manage sucategory Name">
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