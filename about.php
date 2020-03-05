
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes Bakery | About Us</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, true); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
			<div class="top-header-left">
					<?php
						session_start();
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
					<li class="active"><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact</a></li>
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
	<!---start-about---->
					<div class="about">
						<div class="container">
							<h3>About Us</h3>
							<img src="images/about.jpg" class="img-responsive" title="Our Store" />
							<p>Sweet Cakes Bakery have been bringing people together and making them smile for over 3 years now! We are a renowned chain of pastry & confectionery shops based out of Mumbai, who provide specially baked, pure vegetarian cakes, pastries, pies and desserts that are available for shopping and delivery throughout the city. We have now expanded to about 20+ stores, via which, we cater to any area you’re in!</p>

							<p>Our extraordinary designs are guaranteed to be the centerpiece to any special occasion! Our diligent chefs take the utmost care to deliver only the best in sweet baking to our esteemed customers! We bring you a quality of products that is un-paralled! Our team goes to great lengths to make sure our goods reach you at their freshest best! Our website makes ordering easy, or you can call us on our customer care number.</p>

							<p>Make way for bigger celebrations!!</p>
                            
                            <p>Our delicious desserts and snacks cater to any kind of event! Be it a birthday or a conference, anniversary or baby shower , our master chefs with their expert baking skills use only the choicest ingredients to make these gorgeous cakes to order. All our products are strictly pure vegetarian, and you can be assured that our fantastic unique designs set us apart from any other baker in the city.</p>
							
						</div>
					</div>
					<!---End-about---->
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

