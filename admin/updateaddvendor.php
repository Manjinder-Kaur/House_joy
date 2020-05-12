<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1>Manage Add Vendor</h1></br>

<?php 
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `vendor`where `v_id`='$x'";
$result=mysqli_query($con,$m);


$query=mysqli_query($con,$m);

if($row=mysqli_fetch_array($query))
{
	$vid=$row['0'];
	$vname = $row['1'];
	$vemail = $row['2'];
	$vpass = $row['3'];
    $vcontact=$row['4'];
	$vprofessional = $row['5'];
	$vexperience = $row['6'];
    $vaddress = $row['7'];
	$vpic = $row['8'];
    $vstatus =$row['9'];
}
	
?>
           <div class="col-sm-6">
			<img src="<?php echo $vpic; ?>" style="height:200px;width:200px;"/>
			</div>
			<div class="col-sm-6">
			<form class="form-horizontal" action="updateaddvendor2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group"><input type="hidden" name="vpic" class="form-control" value="<?php echo $vpic; ?>"/>
           
		   
		   <label for="mven" class="col-sm-2 control-label">Manage Add vendor Name</label>
				<div class="col-sm-10">
				 <input type="text" class="form-control" name="mven" required="required" value="<?php echo $vname ?>"
				 placeholder="Manage Add vendor Name">
				</div>
			  </div>
			 <div class="form-group">
				<label for="memail" class="col-sm-2 control-label">Manage Add vendor Email</label>
				<div class="col-sm-10"	id="locate">
				  <input type="text" class="form-control" name="memail" required="required" value="<?php echo $vemail ?>" placeholder="Manage Add vendor Email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="mpass" class="col-sm-2 control-label">Manage Add vendor Password</label>
				<div class="col-sm-10"	id="locate">
				  <input type="password" class="form-control" name="mpass" required="required" value="<?php echo $vpass ?>" placeholder="Manage Add vendor Password">
				</div>
			  </div>
			  
			  
			  <div class="form-group">
				<label for="mcontact" class="col-sm-2 control-label">Manage Add vendor Contact</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="mcontact" required="required" value="<?php echo $vcontact ?>" placeholder="Manage Add vendor Contact">
				</div>
			  </div>
			  <div class="form-group">
				<label for="mpro" class="col-sm-2 control-label">Manage Add vendor Professional</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="mpro" required="required" value="<?php echo $vprofessional ?>" placeholder="Manage Add vendor Professional">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="mexp" class="col-sm-2 control-label">Manage Add vendor Experience</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="mexp" required="required" value="<?php echo $vexperience ?>" placeholder="Manage Add vendor Experience">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="madd" class="col-sm-2 control-label">Manage Add vendor Address</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="madd" required="required" value="<?php echo $vaddress ?>" placeholder="Manage Add vendor Address">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="file" class="col-sm-2 control-label">Manage Service Pic</label>
				<div class="col-sm-10">
			<div><input type="file" name="file" style="margin-top:15px;"></div>
				<input type="hidden" name="oldpic" value="<?php echo $vpic ?>" style="width:40px; height:40px">
				<input type="hidden" name="vpic" value="<?php echo $x; ?>" />
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="mst" class="col-sm-2 control-label">Manage Add Vendor Status</label>
				<div class="col-sm-10">
				  <input type="text" name="mst" required="required" value="<?php echo $vstatus ?>" placeholder="Manage Add vendor Status">
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