<?php

	include("header1.php");
	if(!isset($_SESSION['name']))
	{
		header("location:index.php?x=loginfirst");
	}
	
	?>
<!--start-booking-->
	<div class="booking">
		<div class="container" style="text-align:center">
		<h1>Manage Add Location</h1></br>
			


<?php
$con=mysqli_connect("localhost","root","","housejoy");
$m="select * from `town`";
$result=mysqli_query($con,$m);
echo"<table border='1px' class='table table-responsive'>";
while($row=mysqli_fetch_array($result))
{
	
	echo"<tr>";
	
	echo "<td>".$row['0']." </td>";
	echo "<td>".$row['1']." </td>";
	echo "<td>".$row['2']." </td>";

	
    
	echo"<td><a href='updateaddloc.php?x=$row[0]' class='btn btn-danger'>update</a></td>";
	echo"<td><a href='deleteaddloc.php?x=$row[0]' class='btn btn-danger'>delete</a></td>";

	echo"</tr>";
	
	
	
	}
	echo"</table>";
	
mysqli_close($con);
?>





		</div>
	</div>
	<!--end-booking-->
	<!--strat-date-piker-->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!--//End-date-piker-->
					

<?php include("footer.php");?>