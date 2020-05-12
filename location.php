<?php

include("header1.php")?>
<?php 

				if(!isset($_SESSION['email']))
				{
				header("location:register.php");
				}
?>
<script>
function data(vals)
{
	//alert("");
var obj;
var url="third.php?x="+vals;
if(window.XMLHttpRequest)
	{
	obj=new XMLHttpRequest();
	}
	else
	{
		obj= new ActiveXObject("Microsoft.XMLHTTP");
	}
	obj.open("POST",url,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState == 4 && obj.status==200)
		{
			var res=obj.responseText;
			//alert(res);
			document.getElementById("loc").innerHTML=res;
			
		}
	}
}
</script>
		<!-- inner banner -->
		<div class="w3layouts-inner-banner">
			<h1 style="text-align:center">Select City And Location</h1>
		</div>
		<!-- //inner banner -->
		
		<!-- main-content -->
		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
		<div class="agileits contact">
			<div class="container">
				<h2 class="agile-inner-title" style="color:white">Add Location</h2>
					<form class="form-horizontal" action="lcat.php" method="post">
						<div class="form-group">
							<h4><label for="city" class="col-sm-2 control-label ">Select City</label></h4>
							<div class="col-sm-10">
								<select name="city" required="required" class="form-control input-lg" onchange="data(this.value);">
								<option disabled="disabled" selected="selected">--SELECT CITY--</option>
									<?php
									
									include "config.php";
									$q="select * from addcity";
									$result=mysqli_query($obj,$q);
									while($row=mysqli_fetch_array($result))
									{
										echo "<option>".$row['city_name']."</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<h4><label for="loc" class="col-sm-2 control-label ">Select Location</label></h4>
							<div class="col-sm-10" id="loc">
								<select name="loc" required="required" class="form-control input-lg" id="locate">
								<option disabled="disabled" selected="selected">--SELECT LOCATION--</option>
								</select>
		
							</div>
						</div>
								  
						<div class="form-group">
								  
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn  btn-lg btn-default btn-danger" name="sub">GO</button>
							</div>
						</div>
					</form>				
								
			</div>
		</div>
	<?php include("footer.php")?>
