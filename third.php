<?php
$x=$_REQUEST['x'];
include "config.php";
$q="select * from subcategory where c_id='$x'";
$result=mysqli_query($obj,$q);
echo"<select class='from-control col-sm-10	input-lg' name='subcat'>";
while($row=mysqli_fetch_array($result))
{
	
echo"<option value='$row[s_id]'>".$row['s_name']."</option>";
}

echo"</select>"



?>