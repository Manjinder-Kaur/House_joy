<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage Add Product</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `addservice`where `s_id`='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))
{
	$sid=$row['0'];
	$scat=$row['1'];
	$ssubcat=$row['2'];
    $sname=$row['3'];
	$sprice=$row['4'];
	$spic=$row['5'];
    $sdescription=$row['6'];
}
	
?>
			<div class="col-sm-6">
			<img src="<?php echo $spic; ?>" style="height:200px;width:200px;"/>
			</div>
			<div class="col-sm-6">
			<form class="form-horizontal" action="updateaddproduct2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group"><input type="hidden" name="spic" class="form-control" value="<?php echo $spic; ?>"/>
          
		   <label for="mcat" class="col-sm-2 control-label">Manage Select Category</label>
				<div class="col-sm-10">
				 <input type="text"readonly class="form-control" name="mcat" required="required" value="<?php echo $scat ?>"
				 placeholder="Manage category Name">
				</div>
			  </div>
			 <div class="form-group">
				<label for="msub" class="col-sm-2 control-label">Manage Select Sub Category</label>
				<div class="col-sm-10"	id="locate">
				  <input type="text" readonly class="form-control" name="msub" required="required" value="<?php echo $ssubcat ?>" placeholder="Manage sucategory Name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="msname" class="col-sm-2 control-label">Manage Service Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="msname" required="required" value="<?php echo $sname ?>" placeholder="Manage Service Name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="msprice" class="col-sm-2 control-label">Manage Service Price</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="msprice" required="required" value="<?php echo $sprice ?>" placeholder="Manage Service Price">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Manage Service Pic</label>
				<div class="col-sm-10">
				<div><input type="file" name="file" style="margin-top:15px;"></div>
				<input type="hidden" name="oldpic"value="<?php echo $spic ?>" style="width:40px; height:40px">
				<input type="hidden" name="spic" value="<?php echo $x; ?>" />
				</div>
			  </div>
			  <div class="form-group">
				<label for="mdescrip" class="col-sm-2 control-label">Manage Descripstion</label>
				<div class="col-sm-10">
				  <textarea class="form-control" name="mdescrip" required="required"  placeholder="Manage Descripstion"><?php echo $sdescription ?></textarea>
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