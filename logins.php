<?php include("header1.php")?>
<script>
function vali()
{
var p=document.getElementById("pass1").value;
var c=document.getElementById("pass2").value;
if(p!=c)
{
	alert("password and confirm password");
	return false;
}
else
{
	return true;
}
}
</script>
		
<div class="container">
				<h2 class="agile-inner-title"style="color:black;text-align:center;">Enter New Password</h2>	
</div>
	<?php
	
	$e=$_SESSION['email'];
	include"config.php";
	$q="select * from register where email='$e'";
	$result=mysqli_query($obj,$q);
	if($row=mysqli_fetch_array($result))
	{
		$e=$row['email'];
	}
	
	?>
	<form class="form-horizontal" action="getlogins.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<h4><label for="email" class="col-sm-2 control-label ">Email</label></h4>
	<div class="col-sm-10">
	<input type="text" name="email" value="<?php echo $e;?>" class="form-control input-lg " id="email" placeholder="Enter Email"/>
	</div>
	</div>
		<div class="form-group">
	<h4><label for="pass1" class="col-sm-2 control-label ">New Password</label></h4>
	<div class="col-sm-10">
	<input type="text" name="pass1" required="required" class="form-control input-lg " id="pass1" placeholder="Enter New Password"/>
	</div>
	</div>

<div class="form-group">
	<h4><label for="pass2" class="col-sm-2 control-label ">Conform Password</label></h4>
	<div class="col-sm-10">
	<input type="text" name="pass2" required="required" class="form-control input-lg " id="pass2" onblur="vali();" placeholder="Enter Conform Password"/>
	</div>
	</div>

<div class="form-group">
								  
	<div class="col-sm-offset-2 col-sm-10">
	<button type="go"	class="btn  btn-lg btn-default btn-danger">GO</button>
	</div>
	</div>
	</form>
<?php include("footer.php")?>
