<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage Add Category</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `category`where c_id='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))
{
	$cid=$row['0'];
	$cname = $row['1'];
	$Img = $row['2'];

}	
	
?>

			<div class="col-sm-6">
			<img src="<?php echo $Img;?>" style="height:200px;width:200px;"/>
			</div>
			<div class="col-sm-6">
			<form class="form-horizontal" action="updatecat2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group"><input type="hidden" name="img" class="form-control" value="<?php echo $Img; ?>"/>

				<label for="catid" class="col-sm-2 control-label">Manage Add Category</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="catid" placeholder="Enter Category"  readonly value="<?php echo $cid; ?>">
				</div>
			  </div>
			  
<div class="form-group">

				<label for="cat" class="col-sm-2 control-label">Manage Category name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="cat" required="required" placeholder="Enter Category"value="<?php echo $cname; ?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Pic</label>
				<div class="col-sm-10">
				<div><input type="file" name="file" style="margin-top:15px;"></div>
				<input type="hidden" name="oldpic" value="<?php echo $Img;?>" style="width:40px; height:40px">
				<input type="hidden" name="img" value="<?php echo $x; ?>"/>
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