<?php include("header1.php")?>
		
<div class="container">
				<h2 class="agile-inner-title"style="color:black;text-align:center;">Forgot Password</h2>	
</div>
			<form class="form-horizontal" action="ques.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			
				<h4><label for="em" class="col-sm-2 control-label ">Email</label></h4>
				<div class="col-sm-10">
	
				<input type="text" name="em" required="required" class="form-control input-lg " id="username" placeholder="Enter Email"/>
				</div>
			</div>
			
			
			
			<div class="form-group">
								  
				<div class="col-sm-offset-2 col-sm-10">
				<button type="go"	class="btn  btn-lg btn-default btn-danger">GO</button>
				</div>
			</div>
			</form>
			<?php include("footer.php")?>
