<!doctype html>
<html>

<head>
	<style>
		*{
		margin:0px;
		padding:0px;
		}
		.container-fluid{
		width:100%;
		height:695px;
		background:url('images/bg.jpg') no-repeat;
		background-size:100% 100%;
		}
		.emptydiv{
		width:100%; height:30%; 
		}
		.container{
		width:34%; height:30%;
		background:rgba(241,241,241,0.7);
		margin:auto; 
		font-size:25px;
		
		color:rgb(133,110,166);
		text-shadow:0px 0px 10px  black;
		}
		.form
		{
		height:30px; width:100%; border-radius:5px;
		border:2px ridge black;
		}
		.btn
		{
		 background:rgb(134,88,166); border-radius:5px; 
		border-radius:10px solid blue; width:70px; height:30px;
		}
	</style>
	<meta charset="utf-8"/>
	<title>Manager Page</title>
</head>
<body>


	<div class="container-fluid">
		<div class="emptydiv"></div>
			<div class="container logindiv"><h1 style="text-align:center;">Manager</h1>
			<form class="form-horizontal" action="getlogin.php" method="post">
<table cellpadding="0" cellspacing="0" width="400px" align="center" class="formTable">
<tr><td colspan="2" class="headRow"></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td width="50%" style="padding-left:30px">UserName</td><td width="50%"><input type="text" name="name" required /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td width="50%" style="padding-left:30px">Password</td><td width="50%"><input type="password" name="pass" required /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td width="50%">&nbsp;</td><td width="50%"><input type="submit" class="btn btn-primary" value="login" name="sub" /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
</table>
</form>
</div>
</div>
</body>
</html>