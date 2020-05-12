<?php
include("header1.php");
if(isset($_SESSION['oid']))
{
	$oid=$_SESSION['oid'];
}

?>			
		
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			<a href="#" id="logo"><h1></h1></a>
		</div>
		<!-- //inner banner -->				
	
		<!-- main-content -->
		<div class="wthree-main-content">
			<!-- Gallery -->
			<div class="agileits gallery">
				<div class="container">
					<h2 class="agile-inner-title" style="text-align:center">Checkout</h2>
					<div class="gallery">
					
					
					 
						<div class="col-md-12 table-responsive">
						
						
						
<table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                           
                            <th>Product Name</th>
                            <th>Pic&nbsp;&nbsp;&nbsp;</th>
							<th>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Price Per Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                         
                            <th> Price Total</th>
							<th>Operation</th>
                        </tr>
                    </thead>
					<?php
					$t =0;$total=0;
					
			if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
				foreach($_SESSION['cart'] as $id=>$quantity){
	include "config.php";
				
			$t++;
	$q="select * from addservice where s_id ='$id'";
	//echo $q;
			$res = mysqli_query($obj,$q);
			
			echo "";
						while($row=mysqli_fetch_array($res))	
	{
							?>
							
                    <tr class="rem1">

							<td class='invert'><?php echo $row['3'];?></td>
                      
                        <td class="invert-image">
						<img src="<?php echo "admin/$row[5]"; ?>" alt=" " class="img-responsive" style="width:100px; height:100px;" />
						</td>
                        <td class="invert">
                             <div class="quantity">
                                <div class="quantity-select">
                                    <div class=""></div>
                                    <div class="entry value">
									<form action="updatecart.php">
										<input type="text" size="4" value="<?php  echo $quantity; ?>" name="q"/>
										<input type="hidden" size="4" value="<?php  echo $id; ?>" name="x"/>
										<input type="submit" value="Update"/>
										</form>
									
									
									
									
									</div>
                                    <div class="">&nbsp;</div>
                                </div>
                            </div>
						
                        </td>
						<td class='invert'><?php echo $row['4'];?></td>

							<td class='invert'><?php echo ($row['4']*$quantity); ?>
							<?php $total += ($row['4']*$quantity); ?>
							</td>
							<td><a href="remove.php">Remove</a></td>

                        </tr>
                    <?php
	}}}
					?>
                    <tr>
							<th>Final Price</th>
                            <th></th>
							<th></th>
                            <th></th>
                         
                            <th class='invert'>
							<?php echo $total; ?>
							<a href="pay.php">Pay Now</a>
							</th>
                           
                        </tr>
           <!--quantity-->
                </table>


						
						</div>
					
						
						
						
						
										
					</div>	
				</div>			
			</div>
		<!-- // Gallery -->
		</div>
		<!-- //main-content -->			
	
	<?php include("footer.php")?>

