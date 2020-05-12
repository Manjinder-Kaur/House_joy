
<?php include("header1.php")?>
		
<div class="container">
				<h1 class="agile-inner-title"style="color:black;text-align:center;">Plz. Fill Answer</h1>	
</div>		
			<?php 
			
				$em=$_REQUEST['em'];
				$_SESSION['email']=$em;
				include "config.php";

				$q="SELECT * FROM `register` WHERE `email`='$em'";
				
				$result=mysqli_query($obj,$q);
				while($row=mysqli_fetch_array($result))
				{
					
				
					$q=$row['question1'];
					$q1=$row['question2'];
					
				}

			?>
		<form class="form-horizontal" action="match.php" method="post" enctype="multipart/form-data">
			
			
			<div class="form-group">
			<input type="hidden" name="email" value="<?php echo $em; ?>"/>
			<h4><label for="q" class="col-sm-2 control-label">Question1</label></h4>
				<input type="text" name="q" required="required" value="<?php echo $q;?>"/>
			</div>	
			<div class="form-group">
		<h4><label for="answer1" class="col-sm-2 control-label ">Answer1</label></h4>	
		<input type="text" name="answer1" required="required" placeholder="Enter Answer1"/>
		</div>

			<div class="form-group">
			<h4><label for="qq" class="col-sm-2 control-label">Question2</label></h4>
				<input type="text" name="qq" required="required" value="<?php echo $q1; ?>"/>
			</div>		
			  
				<div class="form-group">
				<h4><label for="answer2" class="col-sm-2 control-label ">Answer2</label></h4>	
				<input type="text" name="answer2" required="required" placeholder="Enter Answer2"/>						
				</div>
			  <div class="form-group">
								  
				<div class="col-sm-offset-2 col-sm-10">
				<button type="go" class="btn  btn-lg btn-default btn-danger">GO</button>
				</div>
			</div>
			</form>
			<?php include("footer.php")?>
