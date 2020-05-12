<?php
	$x=$_REQUEST['x'];
	include "config.php";
	$q="select * from town where c_name='$x'";
	//echo $q;
	$result=mysqli_query($obj,$q);
	echo "<select class='form-control input-lg' name='loc'>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<option value='$row[t_name]'>".$row['t_name']."</option>";
		
	}
	
	echo "</select>";
?>
