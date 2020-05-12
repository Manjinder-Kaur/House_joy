<?php	include("header1.php");?>
<!--start-booking-->
	<div class="booking">
		<div class="container">
		<h1 style="text-align:center">Vendor Login</h1></br>
			<form class="form-horizontal" action="vender2.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="email" class="col-sm-2 control-label">Vendor Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="vender" required="required" placeholder="Vendor Email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="pass" class="col-sm-2 control-label">Vendor Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="pass" required="required" placeholder="Vendor Password">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sub" class="btn btn-danger">Login</button>
				</div>
			  </div>
</form>
		</div>
	</div>