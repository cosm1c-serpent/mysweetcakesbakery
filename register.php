<?php
	//session_start();
	require_once('dbconfig/config.php');
	

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes | Register</title>
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
					
					echo 'Registration';
					
					?>
				</div>
				
				<div class="top-header-center">
					<p><a href="cart.php"><img src="images/cart.png"></a></p>
				</div>
				<div class="top-header-right">
					<ul>
						
						<li><a href="logi.php">Login</a></li>
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
					<li><a href="contact.php">phone</a></li>
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
	
	
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="register.php" method="post">
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<label>Name*</label>
						<input type="text" placeholder="Ex: John" name="fname"  required>
					 </div>
					 
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <label>Email*</label>
						 <input type="email" placeholder="Ex: johnconnor123@gmail.com" name="email"  required> 
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <label>Address</label>
						 <input type="text" placeholder="Ex: Mumbai,Boisar,16/69." name="address"  required> 
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <label>Contact No.*</label>
						 <input type="text" placeholder="Ex: 9876543210" name="phone"  required> 
					 </div>

					 
					   
					 
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								  <label>Password*</label>
								  <input type="password" placeholder="Enter Password" name="password" minlength="8" required>
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								  <label>Confirm Password*</label>
								  <input type="password" placeholder="Re-enter Password" name="cpassword" required>
						    </div>
					 
					 
				<div class="register-but">
				   
				        <form>
				   
				   	   
					       <input type="submit" name="register" value="submit">
					       <div class="clearfix"> </div>
				       </form>
				   
		        </div>
	     </div>
	    </div>
		</div>
		</div>
		
          


		<?php
		;


			if(isset($_POST['register']))
			{
				$username=$_POST["fname"];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$email=$_POST['email'];
				$address=$_POST['address'];
				$phone=$_POST['phone'];
				
				if($password==$cpassword)
				{
					$query = "select * from userinfotbl where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into userinfotbl values('$username','$password','$email','$address','$phone')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								
								echo '<script type="text/javascript">alert("User Registered Successfully. Please Login")</script>';
								echo '<script type="text/javascript">window.location="logi.php"</script>';

							// echo $username;
							// echo $password;
							// echo $address;
							// echo $phone;


								//$_SESSION['username'] = $username;
								//$_SESSION['password'] = $password;
								//$_SESSION['email'] = $email;
								//$_SESSION['address'] = $address;
								//$_SESSION['phone'] = $phone;
								//header( "Location: logi.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match! Please try Again")</script>';
				}
				
			}
			else
			{
			}
		?>
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

