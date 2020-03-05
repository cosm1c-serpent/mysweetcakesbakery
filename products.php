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
					<li class="active"><a href="products.php">products</a></li>
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
		</body>
	</html>



	<html>
	<head>

		<meta charset="UTF-8">
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


	<!-- <link href="cart/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="cart/font-awesome.min.css" rel="stylesheet"> -->
	<link href="cart/main.css" rel="stylesheet">
	<!-- <link href="cart/responsive.css" rel="stylesheet"> -->
	<link href="cart/style.css" rel="stylesheet">
	</head>
	<body>

		<!-- /main-menu -->
	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
	

<h2>Products</h2>

<table class="table table-bordered table-responsive">
   <tr>
   		<thead class="bg-primary">
       <th><center>ID</center></th>
       <!-- <th><center>Product ID  </center></th> -->
       <th><center><center>Price</center></th>
       <th><center>Product Image</center></th>
       <th><center>Name</center></th>
       
       <th><center>Add To Cart</center></th>
        </thead>
   </tr>
   <?php
    
	
    while($product=mysqli_fetch_object($result)){ ?>
   <tr>
       <td class="text-center"><a><center><?php echo $product->id; ?></center></a></td>
       <!-- <td class="text-center"><a><center><?php echo $product->name; ?></center></a></td> -->
       <td class="text-center"><a><center>Rs <?php echo number_format($product->price,2) ?></center></a></td>
       <td class="text-img"><a><center><?php echo '<img height="236" width="236" class="pic" src="data:image;base64,'.$product->image.'" alt="improved"><img height="236" width="236" class="picbig" src="data:image;base64,'.$product->image.'" alt="improved">'; ?></center></a></td>
       <td class="text-center"><a><center><?php echo $product->description; ?></center></a></td>
       <td class="text-center" class="pic"><center><a href="cart.php?id=<?php echo $product->id; ?>"><img class="cart2" src="images/cart2.png"></a></br></center></td>
    </tr>
    <?php } ?>
</table>


</div>
</div>
<br><br><br><br>
</section>

</body>
</html>


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

