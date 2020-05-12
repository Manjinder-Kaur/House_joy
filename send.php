<?php	include("header1.php");
if(!isset($_SESSION['vender']))
	{
		header("location:index.php?x=loginfirst");
		
	}
	else
	{
		$v=$_SESSION['vender'];
	}
	?>


<!--start-booking-->
<?php
							include "config.php";
							$x=$_REQUEST['x'];
							$q="SELECT * FROM `vendor` WHERE `v_email`='$v'";
							//$q="select * from order where status='approved'";
							$result=mysqli_query($obj,$q);
							while($row=mysqli_fetch_array($result))
							{	
								$p=$row['v_professional'];
								$e=$row['v_experience'];
								
								
							}
						?>
	<div class="booking">
		<div class="container">
		<h1 style="text-align:center">Send Proposal</h1></br>
			<form class="form-horizontal" action="send2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			  <input type="hidden" name="id" value="<?php echo $x; ?>"/>
				<label for="email" class="col-sm-2 control-label">Vendor Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="vender" required="required" placeholder="Vendor Email" value="<?php echo $v; ?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label">Vendor Vender Professional</label>
				<div class="col-sm-10">
				  <input type="type" class="form-control" name="vp" required="required" placeholder="Vendor Professional" value="<?php echo $p; ?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label">Vendor Experience</label>
				<div class="col-sm-10">
				  <input type="type" class="form-control" name="exp" required="required" placeholder="Vendor Experience" value="<?php echo $e; ?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label">Vendor Fee Per Day</label>
				<div class="col-sm-10">
				  <input type="type" class="form-control" name="fee" required="required" placeholder="Vendor Fee" >
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label"> Working</label>
				<div class="col-sm-10">
				<select name="work" class="form-control">
				<option>Within One Day</option>
				<option>Within Two Days</option>
				<option>Within One Week</option>
				<option>Within Two Week</option>
				<option>Within One Month</option>
				<option>Within Two Month</option>
				</select>
				  
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sub" class="btn btn-danger">Send</button>
				</div>
			  </div>
</form>
		</div>
	</div>