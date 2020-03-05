<?php
	require('dbconfig/config.php');
	$result = mysqli_query($con, 'select * from product');
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes Bakery | Products</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>

		<style type="text/css">

		.pic{
			width:236px ;
			height:236px ;
			box-sizing:border-box;
			
		}
		.pic:hover{
			border: 3px solid transparent;
			box-sizing:border-box;
		}
		</style>
		
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
					<li><a href="about.php">About Us</a></li>
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
		








<div class="biseller-info">
<div class="container">

<h3 class="new-models">new varieties</h3>
			<ul id="flexiselDemo3">
				<li>
					<div class="biseller-column">
					<img class="pic" src="images/11.jpg" alt="" class="veiw-img">
						<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Chocolate Cake</h4>
						<p>Rs 439</p>
					</div>
						<a href="cart.php?id=1"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img class="pic" src="images/chocpastry.jpg" alt="" class="veiw-img">
						<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Pastries</h4>
						<p>Rs 49</p>
					</div>
						<a href="cart.php?id=18"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img class="pic" src="images/13.jpg" alt="" class="veiw-img">
						<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Raspberry-Choco Cake</h4>
						<p>Rs 799</p>
					</div>
						<a href="cart.php?id=3"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img class="pic" src="images/cookies.png" alt="" class="veiw-img">
						<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Chocochip Cookies</h4>
						<p>Rs 49</p>
					</div>
						<a href="cart.php?id=19"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				</li>
	     	</ul>
			</div>
		</div>	

			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
				<div class="best-seller">
				<div class="container">
					<div class="biseller-info">
					 <h3 class="new-models">SPECIALITIES</h3>
					<ul id="flexiselDemo1">
						<li>
							<div class="biseller-column">
							<img class="pic" src="images/burgercake.jpg" alt="">
							<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Burger-Cake</h4>
						<p>Rs 199</p>
					</div>
						<a href="cart.php?id=9"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img class="pic" src="images/desserts.jpg" alt="">
							<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Desserts</h4>
						<p>Rs 269</p>
					</div>
						<a href="cart.php?id=13"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img class="pic" src="images/pie.jpg" alt="">
							<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Strawberry Pie</h4>
						<p>Rs 569</p>
					</div>
						<a href="cart.php?id=7"><button class="add2cart">
						    <span >| Add to Cart</span>
						</button></a>
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img class="pic" src="images/yogurt.jpg" alt="">
							<div class="">
							
						</div>
					<div class="biseller-name">
						<h4>Raspberry-Yogurt</h4>
						<p>Rs 247</p>
					</div>
						<a href="cart.php?id=14"><button class="add2cart">
						    <span >| Add to Cart</span>
						</button></a>
							</div>
						</li>
			     	</ul>
					</div>
			</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
			<div class="clearfix"></div>



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
			<div class="footer-top">
				<div class="col-md-3 location">
				<p>SweetCakes Bakery</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>