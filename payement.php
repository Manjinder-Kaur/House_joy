<style type="text/css">
h1,h2,h3,h4,h5
{
	margin:0px;
	padding:0px;
}
h4
{
	color:#099;
}
ul li
{
	list-style-type:none;
}
#paymen ul
{
	width:100%;
	height:200px;
	color:#000;
	margin:0px;
	padding:0px 0px 2px 0px;
	background:rgb(247,245,245);
}
#paymen ul li
{
	height:35px;
	width:90%;
	margin-left:0px;
	padding-top:15px;
	padding-left:20px;
	color:#C03;
	border-top:1px dashed #999;
}
#paymen ul li:hover
{
	cursor:pointer;
	color:black;
}
.colormy {
    color: black;
    background-color: #40053F;
    background-repeat: no-repeat;
    background-position: right;
    background-size: auto 50px;
    border-top: 0px dashed #999;
}
ul li {
    list-style-type: none;
}
#paymen ul {
    color: #000;
}
.contentpanel1 {
    color: #099;
}
img{
	width:50px;
}
</style>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$(".mylist:first").addClass("colormy");	
			$(".mylist").click(function(){
				$(".mylist").removeClass("colormy");	
				$(this).fadeOut(500,function(){
					$(this).fadeIn(500,function(){
						$(this).addClass("colormy",function(){
						});		
					});
				});	
			});
			$("#cc").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#ccd").show(1000);
					$("#myhide").val("Credit Card");
				});
			$("#cod").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#codd").show(1000);
					$("#myhide").val("Cash On Delivery");
				});
			$("#dc").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#dcd").show(1000);
					$("#myhide").val("Debit Card");
				});
			$("#i").click(function(){
					$("#codd").hide();
					$("#ccd").hide();
					$("#dcd").hide();
					$("#ib").hide();
					$("#ib").show(1000);
					$("#myhide").val("Internet Banking");
				});
			
		});
    </script>
    <div class="contentblock"  >
    <form action="moneypaid.php" method="post">
	<input type="hidden" value="<?php echo $_REQUEST['x']; ?>" name="oid"/>
    	<div class="contentpanel1" style="width:74%;border-bottom:1px dashed #999 " >
     		<div style="width:40%;float:left; " id="paymen"> 
            	<ul>
                	<li class="mylist" id="cod">Cash On Delivery</li>
                    <li class="mylist" id="cc">Credit Card</li>
                    <li class="mylist" id="dc">Debit Card</li>
                    <li style="margin-bottom:-7px;" class="mylist" id="i"> Net Banking</li>
                </ul>
            </div>
            <div id="payme" style="width:60%;float:left; ">  

				<span id="codd" ><p>(We Provide Cash On Delivery to Your Location.)</p><br/>
                <p class="para">
                	"You can pay money at the time of delivery of the Products."<br/>
                	*Conditionals Apply.
                </p>
</span>
<span id="ccd" style="display:none;">
<div style="border:1px solid #CCC;color:black;padding:10px;">
                	We Accept All Types Of Credit Cards:-
                    <div style="margin-top:10px;margin-bottom:10px;">
                    	<img src="vis.png" width="40px" height="28px"  />
     					<img src="am.png" width="40px" height="28px"  />
                        <img src="m.png" width="40px" height="28px" />
                        <img src="rup.png" width="40px" height="28px" />	                   
                    </div>
                    You are redirected to the Payment Gateway onces Placing the Order. <br/><br/>
                    <select style="width:150px;margin-left:20px;">
                    	<option value="vc" style="color:black;">Visa Card</option>
                        <option value="ms"style="color:black;">Master Card</option>
                        <option value="ae"style="color:black;">American Express</option>
                        <option value="rp"style="color:black;">Rup Pay</option>
                    </select>
                </div>
</span>
<span id="dcd" style="display:none;">
<div style="border:1px solid #CCC;color:black;padding:10px;">
                	We Accept All Types Of Debit Cards:-
                    <div style="margin-top:10px;margin-bottom:10px;">
                    	<img src="vis.png" width="40px" height="28px"  />
     					<img src="am.png" width="40px" height="28px"  />
                        <img src="m.png" width="40px" height="28px" />
                        <img src="rup.png" width="40px" height="28px" />	                   
                    </div>
                    You are redirected to the Payment Gateway onces Placing the Order. <br/><br/>
                </div>
</span>
<span id="ib" style="display:none;">
<div style="border:1px solid #CCC;color:black;padding:10px;">
                	Check The List of the Internet Banking Support:-
                    <div style="margin-top:10px;margin-bottom:10px;">
 <select autocomplete="off"  name="bank" title="Choose bank" style=" width: 60%;" >
                <option selected="selected" value="">--Please Select--</option>
           		<option value="NKMB_N">Kotak Mahindra Bank</option>
            		<option value="AND_N">Andhra Bank</option>
            		<option value="UTI_N">AXIS Bank</option>
            		<option value="BOBCO_N">Bank of Baroda Corporate Accounts</option>
            		<option value="BBK_N">Bank of Bahrain &amp; Kuwait</option>
            		<option value="BOB_N">Bank of Baroda Retail Accounts</option>
            		<option value="BOI_N">Bank of India</option>
            		<option value="BOM_N">Bank of Maharashtra</option>
            		<option value="CEN_N">Central Bank of India</option>
            		<option value="CBIBAN_N">Citibank Bank Account Online</option>
            		<option value="PNBCO_N">Punjab National Bank Corporate Accounts</option>
            		<option value="CSB_N">Catholic Syrian Bank</option>
            		<option value="CITIUB_N">City Union Bank</option>
            		<option value="DCBB">Development Credit Bank</option>
            		<option value="DEUNB_N">Deutsche Bank</option>
            		<option value="FDEB_N">Federal Bank</option>
            		<option value="HDFCM_N">HDFC Bank</option>
            		<option value="IDEB_N">ICICI Bank</option>
            		<option value="IDBI_N">IDBI Bank</option>
            		<option value="INDB">Indian Bank</option>
            		<option value="ING_N">ING Vysya Bank</option>
            		<option value="NIIB_N">IndusInd Bank</option>
            		<option value="IOB_N">Indian Overseas Bank</option>
            		<option value="JAKB">Jammu and Kashmir Bank</option>
            		<option value="KVB_N">Karur Vysya Bank</option>
            		<option value="LVB_N">Lakshmi Vilas Bank</option>
            		<option value="OBPRF_N">Oriental Bank of Commerce</option>
            		<option value="OTH">Others</option>
            		<option value="NPNB_N">Punjab National Bank Retail Accounts</option>
            		<option value="SBH_N">State Bank of Hyderabad</option>
            		<option value="SBI_N">State Bank of India</option>
            		<option value="SBM_N">State Bank of Mysore</option>
            		<option value="SBPB">State Bank of Patiala</option>
            		<option value="SBT_N">State Bank of Travancore</option>
            		<option value="SCB_N">Standard Chartered Bank</option>
            		<option value="SIB_N">South Indian Bank</option>
            		<option value="SYNBK_N">Syndicate Bank</option>
            		<option value="TNMB_N">Tamilnad Mercantile Bank</option>
            		<option value="UNI_N">Union Bank of India</option>
            		<option value="UBI_N">United Bank of India</option>
            		<option value="VJYA_N">Vijaya Bank</option>
            		<option value="YES_N">YES Bank</option>
                        </select>	                   
                    </div>
                    You are redirected to the Payment Gateway onces Placing the Order. <br/><br/>
     <input type="hidden" name="myhide" value="Internet Banking" id="myhide"/>
                </div>
</span>                
                <br/><br/><br/><br/><br/><br/><br/><br/>
                <p class="para">
                	<input type="checkbox" style="width:30px;" style="color:#F4F4F4" required="required"/ >
                    I accept the <span style='color:black;'>Terms and Conditions.</span>
                </p>
                <p class="para">
                	<input type="checkbox" style="width:30px;" style="color:#F4F4F4" required="required"> 
                    I authorize the company to use my personal data and detail<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;(if any)
                    to process my order
                </p><br/>
                <button align="right" id="placeOrder">PLACE ORDER</button>
            </div>
        </div>
	