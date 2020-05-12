<?php include("header1.php")?>
		
			<div class="container">
				<h2 class="agile-inner-title" style="color:black;text-align:center";>Register Login</h2>	
				<h3 class="agile-inner-title" style="color:black;">Existing User Click Here<a href="login.php" style="color:red";>Login</a></h3>						
				<form class="form-horizontal" action="getregister.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<h4><label for="username" class="col-sm-2 control-label ">User Name</label></h4>
				<div class="col-sm-10">
				<input type="text" name="username" required="required" class="form-control input-lg " id="username" placeholder="Enter Name">
				</div>
			</div>
			<div class="form-group">
				<h4><label for="email" class="col-sm-2 control-label "> Email</label></h4>
				<div class="col-sm-10">
				<input type="text" name="email" required="required" class="form-control input-lg " id="email" placeholder="Enter Email">
				</div>
			</div>
			<div class="form-group">
				<h4><label for="password" required="required" class="col-sm-2 control-label "> Password</label></h4>
				<div class="col-sm-10">
				<input type="password" name="password" required="required" class="form-control input-lg " id="email" placeholder="Enter Password">
				</div>
			</div>
			<div class="form-group">
				<h4><label for="gender" class="col-sm-2 control-label ">Gender</label></h4>
				<div class="col-sm-10">
				<select class="form-control input-lg" required="required" name="gender">
				<option>Male</option>
				<option>Female</option>
				</select>
				</div>
			</div>
			
			<div class="form-group">
				<h4><label for="mobile" class="col-sm-2 control-label">Mobile No.</label></h4>
				<div class="col-sm-10">
				<input type="text" name="mobile" required="required" class="form-control input-lg " id="mobile" placeholder="Enter Mobile No.">
				</div>
			</div>
		<div class="form-group">
		<h4><label for="question1" class="col-sm-2 control-label ">Question1</label></h4>
		<select name="question1" required="required">
																<option disabled="disabled" selected="selected">---Select Question---</option>
																<option value="What is your favourite movie?">What is your favourite movie?</option>
																<option value="your pet name?">your pet name?</option>
																<option value="your favourite actor/actress?">your favourite actor/actress?</option>
																<option value="Favourite singer?">Favourite singer?</option>
															</select>
															</div>
														
<div class="form-group">
		<h4><label for="answer1" class="col-sm-2 control-label ">Answer1</label></h4>	
															<input type="text" required="required" name="answer1" placeholder="Enter Answer"/>
														</div>

<div class="form-group">
		<h4><label for="question2" class="col-sm-2 control-label ">Question2</label></h4>
														
															<select name="question2" required="required">
																<option disabled="disabled" selected="selected">---Select Question1---</option>
																<option value="What is your favourite fast food?">What is your favourite fast food?</option>
																<option value="your state?">your state?</option>
																<option value="your favourite crickter?">your favourite crickter?</option>
																<option value="Favourite wrestler?">Favourite wrestler?</option>
															</select>
															</div>			
														<div class="form-group">
		<h4><label for="answer2" class="col-sm-2 control-label ">Answer2</label></h4>	
															<input type="text" required="required" name="answer2"  placeholder="Enter Answer"/>
															
			</div>
		
			<div class="form-group">
				<h4><label for="address" class="col-sm-2 control-label ">Address</label></h4>
				<div class="col-sm-10">
				<textarea name="address" required="required" class="form-control" id="address"></textarea>
				</div>
			</div>
								  
			<div class="form-group">
								  
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn  btn-lg btn-default btn-danger">GO</button>
				</div>
			</div>
		</form>
			</div>  
  		</div>
  
	<?php include("footer.php")?>
