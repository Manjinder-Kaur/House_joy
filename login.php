<?php include("header1.php")?>
		
<div class="container">
				<h2 class="agile-inner-title" style="color:black;text-align:center;">User Name</h2>	
</div>				
				<form class="form-horizontal" action="getlogin.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<h4><label for="email" class="col-sm-2 control-label ">Email</label></h4>
				<div class="col-sm-10">
				<input type="text" name="email" required="required" class="form-control input-lg " id="username" placeholder="Enter Email">
				</div>
			</div>
			
<div class="form-group">
				<h4><label for="password" class="col-sm-2 control-label "> Password</label></h4>
				<div class="col-sm-10">
				<input type="password" name="password" required="required" class="form-control input-lg " id="email" placeholder="Enter Password">
				</div>
			</div>
<div class="form-group">
								  
				<div class="col-sm-offset-2 col-sm-10">
				<button type="login" class="btn  btn-lg btn-default btn-danger">Login</button>
				<a href="forgotpassword.php"class="btn  btn-lg btn-default btn-danger">Forgot Password</a>
				</div>
			</div>
			</form>
			<?php include("footer.php")?>
