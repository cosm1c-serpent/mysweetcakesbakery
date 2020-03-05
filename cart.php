<?php
	session_start();

	require('dbconfig/config.php');
	require('item.php');
		if(isset($_GET['id'])){
		$result = mysqli_query($con, 'select * from product where id='.$_GET['id']);
	    $product = mysqli_fetch_object($result);
		$item = new item();
		$item->id = $product->id;
		$item->name = $product->name;
		$item->image = $product->image;
		$item->description = $product->description;
		$item->price = $product->price;
		$item->quantity = 1;
		 
//check item existing in cart
		$index = -1;
		if(isset($_SESSION['cart']))
		{
		$cart = unserialize(serialize($_SESSION['cart']));
			for ($i=0; $i<count($cart); $i++)
		    	if($cart[$i]->id==$_GET['id'])
		    	{
			 
			 		$index = $i;
			 		break;
			 
				}
		}

		if ($index==-1)
		   $_SESSION['cart'][]= $item;
 		else{
 			$cart[$index]->quantity++;
 			$_SESSION['cart'] = $cart;
 		}
	}
//delete item in cart
	if(isset($_GET['index'])){
		$cart = unserialize(serialize($_SESSION['cart']));
		unset($cart[$_GET['index']]);
		$cart = array_values($cart);
		$_SESSION['cart'] = $cart;
	}
// update quantity
	if (isset($_POST['update'])) {
		$arrQuantity = $_POST['quantity'];
		//$cart =unserialize(serialize($_SESSION['cart']));
		//for($i=0; $i,count($cart); $i++){
		//	$cart[$i]->quantity=$arrQuantity[$i];
		//}
		//$_SESSION['cart']=$cart;
	//}

//validate quantity
		$valid=1;
		for ($i=0; $i<count($arrQuantity); $i++)
			if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
				$valid = 0;
				break;
			} 
					
			if ($valid==1){
		$cart = unserialize(serialize($_SESSION['cart']));
		for ($i=0; $i<count($cart); $i++) {
			$cart[$i]->quantity = $arrQuantity[$i];	
		}
		$_SESSION['cart'] = $cart;
		}
		else
			echo '<script type="text/javascript">alert("Quantity is Invalid: Please input proper quantity")</script>';
	}



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
		.pics{
			width:16px;
			height:16px ;
			box-sizing:border-box;
			
		}
		.pics:hover{
			border: 2px solid transparent;
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
			width: 400px;
			
			
			box-shadow: 0 0 0 02px #FF8DB4, 0 0 5px 4px #333;
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
                    
                        

	
         <form method="post" >
         <table class="table table-bordered table-responsive">
       <tr>
       		<thead class="bg-primary">
          
          <th><center><b>ID </center></b> </th>
          <!-- <th><center><b>Name </center></b> </th> -->
          <th><center><b>Product Image</center></b> </th>
          <th><center><b>Name</center></b></th>
          <th><center><b>Price</center></b> </th>
          <th><center><b>Quantity </center></b></th>
          <th><center><b>Sub Total</th>
          <th><center><b>Option</center></b></th>
          </thead>
       </tr>
       <?php

       if(isset($_SESSION['cart']))
       {
       $cart = unserialize(serialize($_SESSION['cart']));
       $s = 0;
       $index = 0;

       
       for($i=0; $i<count($cart); $i++){
       	$s += $cart[$i]->price * $cart[$i]->quantity;

       	   ?>
       	   <tr>
       	   		
       	   		<td class="text-center"><a><?php echo $cart[$i]->id; ?></a></td>

       	   		<!-- <td class="text-center"><a><?php echo $index; ?></a></td> -->

       	   		<td class="text-img"><a><?php echo '<img height="236" width="236" class="pic" src="data:image;base64,'.$cart[$i]->image.'" alt="improved"><img class="picbig" src="data:image;base64,'.$cart[$i]->image.'" alt="improved">'; ?></a></td>

       	   		<td class="text-center"><a><?php echo $cart[$i]->description; ?></a></td>

       	   		<td class="text-center"><a>Rs <?php echo $cart[$i]->price; ?></a></td>

       	   		<td class="text-center"><a><input type="number" value="<?php echo $cart[$i]->quantity; ?>" style="width:70px ; " name="quantity[]"></a><input type="image" class="btn btn-info" align:right src="images/tick1.png"><input type="hidden" name="update"></td>

       	   		<td class="text-center"><a>Rs <?php echo number_format($cart[$i]->price * $cart[$i]->quantity,2) ?></a></td>

       	   		<td class="text-center" ><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('ARE YOU SURE?')"> <img class="pics" src="images/closelabel.png" </a></td>
       	   </tr>
       	        <?php  
				$index++;

       	    } 
       	}
       	    ?>
       	    <tr>
       	        <td  colspan="6" class="text-right"><b>SUM =  </b></td>
       	        <td colspan="2" class="text-danger"><center><b>Rs <?php if(!isset($s)) $s=0; echo number_format($s,2) ?></b></center></td>
       	   </tr>
       	        
       	   </table>
       	   </div>
			</div>
       	   </form>
       	   <!-- <br><br><br><br><br>	 -->
       	    
        
    	     <!--<h4 class="title">Shopping cart is empty</h4>
    	     <p class="cart">You have no items in your shopping cart.-->
    	     <center><br>click <a href="products.php"><b>HERE</b></a> to add more products | click here for <a href="checkout.php"><b>CHECKOUT</b></a></br></center>
    	   
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

