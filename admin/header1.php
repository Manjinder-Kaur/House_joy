<?php session_start();?>

<html>
<head>
<script src="script.js">
</script>
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
				<p>WEL COME TO ADMIN PANEL</p>	 		
			</div>
			 
			<div class="clearfix"></div>
       </div>
    </div>
	</div>
      <div class="header_bottom"> 
	  <div class="container">
	   <div class="header-bottom-top">
       <div class=" logo">
   	   	 <a href="index1.php"><img src="images/logog.jpg" alt=""/></a>
   	   </div>
   
	   	<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""> </span>

     		 		<ul>
						<li  class="active"><a href="index1.php">Home</a></li>
     		 			 
					  <li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="addcat.php">Add Category</a></li>
							<li><a href="addsub.php">Add SubCategory</a></li>
							<li><a href="addservice.php">Add Service</a></li>
							<li><a href="addvendor.php">Add vendor</a></li>
							<li><a href="addcity.php">Add City</a></li>
							<li><a href="addloc.php">Add Location</a></li>
						  </ul>

										</li>
 <li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="managecat.php">Manage Add Category</a></li>
							<li><a href="managesubcat.php">Manage SubCategory</a></li>
							<li><a href="manageaddproduct.php">Manage Add Service</a></li>
							<li><a href="manageaddvendor.php">Manage Add vendor</a></li>
							<li><a href="manageaddcity.php">Manage Add City Name</a></li>
							<li><a href="manageaddloc.php">Manage Add Location</a></li>
						  </ul>

						</li>
						<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pending Order<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="approved.php">Pending Order</a></li>
							<li><a href="vapproved.php">Pending Vendor</a></li>
							
						  </ul>

						</li>
						<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Approved <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="allorder.php">Approved Order </a></li>
							<li><a href="allvendor.php">Approved Vendor</a></li>
							
						  </ul>

						</li>
						
					  
					  
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
			<h1 style="color:red;">HOUSEJOY</h1>
		</div>
	</div>
</div>