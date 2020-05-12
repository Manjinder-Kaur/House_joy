

<?php include("header1.php")?>

			
		
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			
		</div>
		<!-- //inner banner -->				
		
		<!-- main-content -->
		<div class="wthree-main-content">
			<!-- Gallery -->
			<div class="agileits gallery">
				<div class="container">
					<h2 class="agile-inner-title">Addcart & Order</h2>
					<div class="gallery">
					<?php
						if(isset($_REQUEST['x']))
						{
						$ss=$_REQUEST['x'];
						include "config.php";
						 $q="select * from addservice where s_id='$ss'";
						 $result=mysqli_query($obj,$q);
						 while($row=mysqli_fetch_array($result))
							{
								$sn=$row['s_name'];
								$sp=$row['s_price'];
								$sd=$row['description'];
								$spi=$row['s_pic'];
				
							}
							}
					?>
						<div class="row">
							<div class="col-md-6">
							<img class="img img-responsive" src="admin/<?php echo $spi; ?>" style="height:200px; width:200px; margin:50px;"/>
							</div>
							<div class="col-md-6">
								<form class="form-horizontal">
								  <div class="form-group">
									<h4><label class="col-sm-4 control-label">Service Name:</label></h4>
									<div class="col-sm-8">
									  <p class="form-control-static"><?php echo $sn; ?></p>
									</div>
								  </div>
								  <div class="form-group">
									<h4><label class="col-sm-4 control-label">Service Price:</label></h4>
									<div class="col-sm-8">
									  <p class="form-control-static"><?php echo $sp; ?></p>
									</div>
								  </div>
								  <div class="form-group">
									<h4><label class="col-sm-4 control-label">Service Description:</label></h4>
									<div class="col-sm-8">
									  <p class="form-control-static"><?php echo $sd; ?></p>
									</div>
								  </div>
								  <div class="form-group">
									<label class="col-sm-4 control-label"></label>
									<div class="col-sm-8">
									  <p class="form-control-static">
									  
									 <a href="addtocart.php?x=<?php echo $ss; ?>" class="btn btn-danger">Add Cart</a>
									 <a href="location.php?x=<?php echo $ss; ?>"class="btn btn-danger">Order</a>
									  </p>
									</div>
								  </div>
								  
								</form>
								<!--<table class="tab">
									<tr>
										<th>Service Name:</th>
										<td><?php echo $sn; ?></td>
									</tr>
										<th>Service Price:</th>
										<td><?php echo $sp; ?></td>
									</tr>
									<tr>
										<th>Service Description:</th>
										<td><?php echo $sd; ?></td>
									</tr>
									<tr>
									<td></td>
									<td><a href=""><input class="btn btn-danger" type="button" value="Buy Now"></a>
										<a href=""><input class="btn btn-danger" type="submit" value="Check out"></a>
									</td>
									</tr>
					
								</table>-->
							</div>
						</div>					
					</div>	
				</div>			
			</div>
		<!-- // Gallery -->
		</div>
		<!-- //main-content -->			
	
	<?php include("footer.php")?>
