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
					<h2 class="agile-inner-title" style="text-align:center">Approved Vendor</h2>						
					<!-- about-top -->
					<div class="gallery">
					
					
					 
						<div class="col-md-12 table-responsive">
						
						
			<form class="form-horizontal" method="get" action="getvapp.php">			
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
							$q="SELECT `v_id`, `v_name`, `v_email`, `v_contact`, `v_professional`, `v_experience`, `v_address`, `v_pic`, `v_status` FROM `vendor` WHERE v_status='1'";
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
								
								
								echo "</tr>";
								
							}
						?>
						</tr>
						
				
                    </thead>
					
							
                    
                   
                    
          
                </table>
			
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
