<?php
	
	require_once('dbconfig/config.php');
	require('contact-post.php')
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes Bakery | Contact</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
			<div class="top-header-left">
					<?php
						if(isset($_SESSION['username'])){
							echo 'Welcome '.$_SESSION['username'];
							echo '<a href="logi.php?action=logout"> Logout</a>';
						}
						else{
							echo '<script>location.href="logi.php"</script>';

							}
					?>
				</div>
				
				<div class="top-header-center">
					<p><a href="cart.php"><img src="images/cart.png"></a></p>
				</div>
				<div class="top-header-right">
					<ul>
						
						<li><a href="logi.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
						<li>
							<form>
								<input type="text" size="15px">
								<input type="submit" value="" />
							</form>
							
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
			<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">products</a></li>
					<li><a href="about.php">About Us</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->

				<!-- logo -->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	<!---start-content----->
			<div class="content">
			<div class="container">
			<h2>Contact</h2>
			<!----start-main-content----->
			<div class="main-content">
					<!---start-contact---->
					<div class="contact">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">


			    	 		<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.942106130603!2d72.7858929126785!3d19.782295686696433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71ebb9116e5c5%3A0xe33b4d6900b0671c!2sTheem+College+of+Engineering!5e0!3m2!1sen!2sin!4v1491030224738" style="color:#666;text-align:left;font-size:12px"></iframe>

					   			
					   			</iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.942106130603!2d72.7858929126785!3d19.782295686696433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71ebb9116e5c5%3A0xe33b4d6900b0671c!2sTheem+College+of+Engineering!5e0!3m2!1sen!2sin!4v1491030224738">View Larger Map</a></small>
					   		</div>
      				</div>
						<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h3>Bakery Information :</h3>
						    	<p>Theem College of Engineering</p>
								<p>Maharashtra</p>
						   		<p>Boisar[E] 401501</p>
								<p>INDIA</p>
				   		<p>Phone:+91 9673116857</p>
				   	
				 	 	<p>Email: <span>info@sweetcakesbakery.com</span></p>
				   		
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact.php">
					    	<div>
					    	<fieldset>
						    	<label>NAME</label>
						    	<span><input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" ></span>
						    	<span class ="error"><?= $name_error?></span>
						    	</fieldset>
						    </div>
						    <div><fieldset>
						    	<label>Email</label>
						    	<span><input placeholder="Your E-mail Id" type="text" tabindex="2" name="email" value="<?= $email ?>" ></span>
						    	<span class ="error"><?= $email_error?></span>
						    	</fieldset>
						    </div>
						    <div><fieldset>
						    	<label>Mobile No.</label>
						    	<span><input placeholder="Your Contact No." type="text" tabindex="3" name="phone" value="<?= $phone ?>" ></span>
						    	<span class ="error"><?= $phone_error?></span>
						    	</fieldset>
						    </div>
						    <div>
						    	<fieldset>
						    	<label>Message</label>
						    	<span><input placeholder="Your message starts here..." type="text" tabindex="4" name="message" value="<?= $message ?>" ></span>
						    	
						    	</fieldset>
						    </div>
						   <div><fieldset>
						   		<span><input type="submit" name="submit" value="Submit" data-submit="....Sending" ></span>
						   		</fieldset>
						  </div>
						  <div class="success"><?= $success; ?></div>
						  
					    </form>

				    </div>
  				</div>				
			  </div>
					<!---End-contact---->
			</div>
			<div class="clear"> </div>
			<!----End-main-content----->
		</div>
		</div>
		</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 location">
					<h4>location</h4>
					<p> Thane,Boisar,Maharashtra</p>
					<p> 401501</p>
					<h4>hours</h4>
					<p>Weekdays 7 a.m.-7 p.m.</p>
					<p>Weekends 8 a.m.-7 p.m.</p>
					<p>Call for Holidays Hours.</p>
				</div>
				<div class="col-md-3 customer">
				    <h4>phone</h4>
					<h6>1800-123-321</h6>
					
				</div>
				
				
					<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>SweetCakes Bakery</p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>

