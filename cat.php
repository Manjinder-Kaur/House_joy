<?php include("header1.php");?>
<div class="container">	
	<?php
		$x=$_REQUEST['x'];
		include "config.php";
		$q="select * from subcategory where c_id='$x'";
		$result=mysqli_query($obj,$q);
		while($row=mysqli_fetch_array($result))
		{
	?>
		<div class="col-md-4">
			<a href="" class="big">
		  <img class="img img-responsive" src="<?php echo "admin/$row[pic]";?>" style="height:250px;width:300px;">
		</a>
		<a href="showall.php?x=<?php echo $row['s_id'];?>" class="btn btn-danger">Show More</a>
		<a href="#?nam=<?php echo $row['s_id'];?>"><?php echo $row['s_name'];?></a>
		</div>
		<?php
		
		}
		
		?>
</div>
<?php include("footer.php");?>
