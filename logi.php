
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-Cakes | Login</title>
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
		<!----webfonts--->
		
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
			<div class="top-header-left">
					<?php
					
					echo 'Signing In';
					
					?>
				</div>
				
				<div class="top-header-center">
					<p><a href="cart.php"><img src="images/cart.png"></a></p>
				</div>
				<div class="top-header-right">
					<ul>
						
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
	
	<div class="content">
	<div class="container">
	<form action="logi.php" method="post">
		<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p> Creating an account click below</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
				  <div>
					<label>Username*</label>
					<input type="text" placeholder="Enter Username" name="username" required>
				  </div>
				  <div>
					<label>Password*</label>
					<div>
					<input type="password" placeholder="Enter password" name="password" required>
					</div>
				  </div>
				  <div></div>

				  <div class="clearfix"> </div><br>

				  <div class="login-right">  
				        		   		   	   
					       <input type="submit" name="login"  value="Login">
					       <div class="clearfix"> </div>
				       
		        </div>


<!-- 		        for admin login section left for future -->
		        <!-- <h3>Admin Login</h3>
				  		<div>
					    <label>Admin Name</label>
					    <input type="text" placeholder="Enter Admin Name" name="adminname" required>
				        </div>
				        <div>
					    <label>Admin Password</label>
					    <input type="text" placeholder="Enter Admin Password" name="adminpass" required>
				        </div><br>
				        <div class="login-right">  
				        		   		   	   
					       <input type="submit" name="adminlogin"  value="Login">
					       <div class="clearfix"> </div><br> -->
				  
				  
				  
			    


			    		<?php

			    		session_start();
	 					if (isset($_POST['login'])) {
						require'dbconfig/config.php';
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from userinfotbl where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: index.php");
					}
					else
					{
						echo '<script type="text/javascript"> alert("Invalid Credentials:  User ID and Password Dont Match.   Please Try Again!")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
				if(isset($_GET['logout'])) {
			session_destroy('username');
			}
			}
			
		?>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
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

