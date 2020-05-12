<?php

	include("header1.php");
	if(!isset($_SESSION['name']))
	{
		header("location:index.php?x=loginfirst");
	}
	
	?>

		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
			<div class="agileits contact">
				<div class="container">
					<h2 class="agile-inner-title" style="text-align:center">Pending Order</h2>						
					<!-- about-top -->
					<div class="gallery">
					
					
					 
						<div class="col-md-12 table-responsive">
						
						
			<form class="form-horizontal" method="get" action="getappro.php">			
				<table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                           
                            <th>Id</th>
                            <th>Name&nbsp;&nbsp;&nbsp;</th>
							<th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Town&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Street&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Pin code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							
                            <th> Status</th> 
							<th> Approved</th>
							
							
                           
                        </tr>
						<!--<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $n; ?></td>
							<td><?php echo $e; ?></td>
							<td><?php echo $c; ?></td>
							<td><?php echo $v; ?></td>
							<td><?php echo $s; ?></td>
							<td><?php echo $p; ?></td>
							<td><?php echo $a; ?></td>
							<td><?php echo $st; ?></td>
							</tr>-->
						<tr>
						<?php
							include "config.php";
							$q="SELECT `oid`, `name`, `email`, `location`, `town`, `street_no`, `pin_code`, `address`, `status`, `price`, `servicesid`, `pay`, `vendor_proposal`, `v_email`, `v_profession`, `v_fee`, `working_per` FROM `order` WHERE status='pending'";
							//$q="select * from order where status='approved'";
							$result=mysqli_query($obj,$q);
							while($row=mysqli_fetch_array($result))
							{	
								echo "<tr>";
								echo "<td>".$row['0']."</td>";
								echo "<td>".$row['1']."</td>";
								echo "<td>".$row['2']."</td>";
								echo "<td>".$row['3']."</td>";
								echo "<td>".$row['4']."</td>";
								echo "<td>".$row['5']."</td>";
								echo "<td>".$row['6']."</td>";
								echo "<td>".$row['7']."</td>";
								echo "<td>".$row['8']."</td>";
								echo "<td><input type='checkbox' name='approved[]' value='$row[0]'/></td>";
								
								echo "</tr>";
								
							}
						?>
						</tr>
						
				
                    </thead>
					
							
                    
                   
                    
          
                </table>
				<button type="submit">Approved</button>
					
			</form>
			
						
						</div>
					
						
						
						
						
										
					</div>	
					<!-- //about-top -->	
				</div>
			</div>
			
			<!-- //testimonial -->
		</div>
		<!-- //main-content -->			
		
	<?php include("footer.php")?>
