function data(vals)
{
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
			document.getElementById("locate").innerHTML=res;
			
		}
	}
}