<?php	include("header1.php");?>
	<!---->
<div class="container">
		<div class="contact">
		<div class=" map">
			<h1 style="text-align:center">OUR LOCATION</h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109189.53833771725!2d75.68886104887!3d31.21593407542638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391af4e8654ed27b%3A0x44f046dd6942ae0d!2sPhagwara%2C+Punjab!5e0!3m2!1sen!2sin!4v1493971630113" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact-non">
					<div class="col-md-6 contact-inline">
				     	<h1>Contact Us:-</h1>
						<img class="img-responsive" style="height:310px" src="images/looo.jpg" alt=""/>
						
						    	<ul class="social ">
						<li><span><i> </i>Dav University,Jalandhar</span></li>
						<li><span><i class="down"> </i>95012-23775</span></li>
						<li><span><i class="down"> </i>95309-52640</span></li>
						<li><span><i class="down"> </i>98035-81796</span></li>
						<li><a href="mailto:info@example.com"><i class="mes"> </i>manjinderkaur028@gmail.com</a></li>
					</ul>
				    </div>
					<div class="col-md-6 contact-grid">
					<h1>Contact form</h1>
					<form	action="getcontactus.php"	method="post">						
						<input type="text" required="required" name="name" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
						<input type="text" required="required" name="email" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">

						<input type="text" required="required" name="phone"value="Phone number" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Phone number';}">					
						<textarea cols="77" rows="6" name="msg" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="send-in">
							<input type="submit" value="SUBMIT">
						</div>
					</form>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<?php	include("footer.php");?>
