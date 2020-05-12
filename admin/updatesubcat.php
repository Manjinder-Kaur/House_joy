<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage SubCategory</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `subcategory`where s_id='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))
{
	$cid=$row['1'];
	$sname = $row['2'];
	$pic = $row['3'];

}	
	
?>
			<div class="col-sm-6">
			<img src="<?php echo $pic; ?>" style="height:200px;width:200px;"/>
			</div>
			<div class="col-sm-6">
			<form class="form-horizontal" action="updatesubcat2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group"><input type="hidden" name="pic" class="form-control" value="<?php echo $pic; ?>"/>

				<label for="subcat" class="col-sm-2 control-label">Manage SubCategory</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="subcat"
				  placeholder="Enter Category"  readonly value="<?php echo $x; ?>">
				</div>
			  </div>
				<div class="form-group">

				<label for="subcat1" class="col-sm-2 control-label">Manage SubCategory name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="subcat1" required="required" placeholder="Enter Category"value="<?php echo $sname; ?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Pic</label>
				<div class="col-sm-10">
				<div><input type="file" name="file" style="margin-top:15px;"></div>
				<input type="hidden" name="oldpic" value="<?php echo $pic ?>" style="width:40px; height:40px">
				<input type="hidden" name="pic" value="<?php echo $x; ?>" />
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