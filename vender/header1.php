<?php session_start();
if(isset($_SESSION['vender']))
{
	$v=$_SESSION['vender'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>House Joy Category Flat Bootstarp Resposive Website</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Turistik Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/bootstrap.min.js"></script>



</head>
<body> 
		<!--header-->	
<div class="header">
	<div class="header-top">
        <div class="container">
		<div class="header-top-top">
			<div class=" header-top-left">
				<p>Contact us<span>95012-23775</span></p>	 		
			</div>
  	         <div class=" header-top-right"style="color:white;">
			 <?php if(isset($e))
			 {
				 echo "WELCOME:".$e;
			 }
				 ?>
	 <div class="clearfix"></div>
   			 </div>
			
			<div class="clearfix"></div>
       </div>
    </div>
	</div>
      <div class="header_bottom"> 
	  <div class="container">
	   <div class="header-bottom-top">
       <div class=" logo">
   	   	 <a href="index.php"><img src="images/logog.jpg" alt=""/></a>
   	   </div>
   
	   	<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""> </span>

     		 		<ul>
						<li><a href="index.php">Home</a></li>
					<li><a href="approved.php">See Order</a></li>
					  <!---<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="cat.php?x=1">Beauty</a></li>
							<li><a href="cat.php?x=2">Plumbing</a></li>
							<li><a href="cat.php?x=3">Computer Repair</a></li>
							<li><a href="cat.php?x=4">Electrician</a></li>
							<li><a href="cat.php?x=5">Appliance repair</a></li>
							<li><a href="cat.php?x=6">Carpentry</a></li>
							<li><a href="cat.php?x=7">Air Condition</a></li>
							<li><a href="cat.php?x=8">Car and Bike</a></li>
							<li><a href="cat.php?x=9">House Painting</a></li>
						  </ul>
						  

						</li>--->
						
				
			 <li><a href="logout.php">Logout</a></li>
     		 		</ul>
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>

     		 	</div>

   	  <div class="clearfix"></div>
   	  </div>
	  </div>
	</div>	
</div>
<div class="banner-in">
		<div class="container">
		<div class="banner-top">
			<h1 style="color:red"></h1>
		</div>
	</div>
</div>