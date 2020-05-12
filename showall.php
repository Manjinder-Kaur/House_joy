<?php include("header1.php");?>
<div class="container">	
	<?php
	if(isset($_REQUEST['x']))
	{
		$x=$_REQUEST['x'];
		include "config.php";
		$q="SELECT * FROM `addservice` WHERE `s_subcate`='$x'";
		$result=mysqli_query($obj,$q);
		while($row=mysqli_fetch_array($result))
		{
			
	?>
		<div class="col-md-4">
			<a href="" class="big">
		  <img class="img img-responsive" src="<?php echo "admin/$row[s_pic]"; ?>" style="height:250px;width:300px;" alt="Beautiful Images"/>
		</a>
		<a href="show.php?x=<?php echo $row['s_id'];?>" class="btn btn-danger">Show More</a>
		<a href="#?s_id=<?php echo $row['s_cate'];?>>" class="btn btn-danger"><?php echo $row['s_name'];?></a>
		</div>
		<?php
		}
		
		
		}
		
		?>
</div>
<?php include("footer.php")?>


