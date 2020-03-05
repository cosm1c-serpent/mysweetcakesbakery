
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes Bakery</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, true); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>

		<style type="text/css">

		.pic{
			width:236px ;
			height:236px ;
			box-sizing:border-box;
			
		}
		.picbig{
			margin-top: 2px;

			position:absolute;
			width: 0px;
			z-index: 10;
		}
		.pic:hover{
			border: 3px solid transparent;
			box-sizing:border-box;
		}
		.pic:hover + .picbig{
			transition: width 400ms;
			height: 300px;
			width:400px;
			
			box-shadow: 0 0 0 02px #FF8DB4, 0 0 5px 4px #333;
		}
		.cart2{
			width:40px;
			height:48px ;
			box-sizing:border-box;
			
		}
		.cart2:hover{
			border: 2px solid transparent;
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
					<li class="active"><a href="index.php">Home</a></li>
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
					<img src="images/logo.png" title="Sweetcake" />
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 1600,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="cart.php?id=6">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/m1.png" class="img-responsive" title="Birthday-Cake" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           
					        </li>
					         <li>
					          <img  src="images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>WANT SOME MUFFINS? DELICOUS SPANISH BAKED MUFFINS</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST MUFFIN SECTION.</p>
					          	 	<a class="buy-btn" href="cart.php?id=17">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="Choco-Lava Muffin" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					          
					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>THESE DANISH MADE COOKIES WILL TAKE YOU TO HEAVEN</h1>
					          	 	<p>WE HAVE DANISH MADE COOKIES FRESH AND CRISPY! LOADED WITH CHOCOCHIPS, CHECK IT OUT.</p>
					          	 	<a class="buy-btn" href="cart.php?id=19">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/cookies.png" class="img-responsive" title="Chocochip Cookies" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           
					        </li>
					        <li>
					          <img src="images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>TASTY BREADS! MAKE YOUR SANDWICH HEALTHY WAY?</h1>
					          	 	<p>BROWN BREAD,WAFFLE BREAD,PIZZA BREAD AND MUCH MORE.</p>
					          	 	<a class="buy-btn" href="cart.php?id=18">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="images/bread.png" class="img-responsive" title="Sandwich Bread" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR DESSERTS</h3>
					</div>
					<div class="top-grid-info">
						<img  src="images/desserts.jpg" class="pic" title="Desserts"/>
						<p align="center">This awesome Desserts will leave a One More! on your lips check it out we bet you will be surprised. made with love and just our hands on.</p>
						<span>Rs 269</span>
						<div class="clearfix"> </div>
						<a class="btn" href="cart.php?id=13"><b>Buy Now<b></a>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR PIE'S</h3>
					</div>
					<div class="top-grid-info">
						<img src="images/pie.jpg" class="pic" title="Strawberry Pie"/>
						<p align="center">Our Pies made with Strawberry, Blueberries, blackberries, and so on with just our hands on are always trending in town.</p>
						<span>Rs 569</span>
						<div class="clearfix"> </div>
						<a class="btn" href="cart.php?id=7"><b>Buy Now<b></a>
					</div>
				</div>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>OUR SPECIAL</h3>
					</div>
					<div class="top-grid-info">
						<img src="images/yogurt.jpg" class="pic" title="Raspberry Yogurt"/>
						<p align="center">This awesome loving specialities like yogurt, cookies, pies and so on are always first to be ordered. made with love and just our hands on.</p>
						<span>Rs 247</span>
						<div class="clearfix"> </div>
						<a class="btn" href="cart.php?id=14"><b>Buy Now<b></a>
					</div>
				</div>
			</div>
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div><br><br>
		<!-- top-grids -->
		<!-- bottom-grids -->
		<div class="bottom-grids">
			<div class="container">
				<div class="col-md-8 bottom-grid-left">
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img class="pic" src="images/11.jpg" title="Chocolate Cake"/>
						<h4>Chocolate Cake</h4>
						<p>Rs 439</p>
					</div>
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img  class="pic" src="images/iteam.png" title="Choco-Lava Muffin"/>
						<h4>Choco-Lava Muffin</h4>
						<p>Rs 350</p>
					</div>
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img class="pic" src="images/yogurt.jpg" title="Raspberry Yogurt"/>
						<h4>Raspberry Yogurt</h4>
						<p>Rs 247</p>
					</div>
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img class="pic" src="images/chocpastry.jpg" title="Strawberry-Vanilla Cake"/>
						<h4>Pastries</h4>
						<p>Rs 59</p>

					</div>
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img class="pic" src="images/pie.jpg" title="Strawberry Pie"/>
						<h4>Strawberry Pie</h4>
						<p>Rs 569</p>
						
					</div>
					<div class="col-md-2 bottom-grid-left-grid text-center">
						<img class="pic" src="images/desserts.jpg" title="Desserts"/>
						<h4>Desserts</h4>
						<p>Rs 269</p>
					</div>

					<div class="clearfix"> </div>
					<span class="best-sale">Best sellers</span>
					<a href="varieties.php" class="order"> </a>
				</div>

				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- bottom-grids -->
	<!-- /container -->
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