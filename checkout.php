<?php
 session_start();
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes Bakery | Checkout</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.easydropdown.js"></script>
		
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
					<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	
	<div class="check-out">
         <div class="container">
    	     <h4 class="title">Checkout Details</h4>
    	     <?php 
    	     require'dbconfig/config.php';
    	     require'item.php';
    	     $user= $_SESSION['username'];

    	     

    	     //save new order
    	     mysqli_query($con, 'insert into orders(name, datecreation,username) values("New Order","'.date('Y-m-d').'","'.$user.'")');
    	     $ordersid= mysqli_insert_id($con);
    	     echo "Your Order ID is = ";
    	     echo $ordersid;
    	     

    	     
    	     //save order details for new order
    	     $cart=unserialize(serialize($_SESSION['cart']));
    	     for($i=0; $i<count($cart); $i++){
    	     	mysqli_query($con, 'insert into ordersdetail(productid, ordersid, name, price, quantity) values('.$cart[$i]->id.', '.$ordersid.',"'.$cart[$i]->description.'",'.$cart[$i]->price.', '.$cart[$i]->quantity.')');
    	     }

    	     // clear all products
    	     unset($_SESSION['cart']);


    	     ?>

    	     <p class="cart">Thank you for shopping.<br>Click <a href="products.php"><b>HERE</b></a> to continue shopping</p>
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

