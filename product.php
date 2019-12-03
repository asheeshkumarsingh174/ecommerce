<?php

session_start();


if(isset($_SESSION['uid']))

{
     
}

else
  {

    header('location:login.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
		 <link type="text/css" rel="stylesheet" href="css/style.css"/>
		 
		 <script src="jquery.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

					

						
								

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->






        <!---- PHP PHP PHP PHP PHP PHP PHP  ------>


		<?php
		 include('dbcon.php');
		 
		 
		@$sid=$_GET['sid'];
		 
		 $qry="SELECT * FROM `products` WHERE `id`='$sid' ";
		 $run=mysqli_query($con,$qry);

		 $data=mysqli_fetch_assoc($run);

		 $GLOBALS['cat']=$data['category'];

		 
		   
	     ?>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							
							
							
							<li class="active"><?php echo $data['name'];?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>
                          <!---
							<div class="product-preview">
								<img src="./img/product08.png" alt="">
							</div>
							-->
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $data['pimage'];?>.png" alt="">
							</div>
                            <!--
							<div class="product-preview">
								<img src="./img/product08.png" alt="">
							</div>
							-->
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $data['name'];?> </h2>
							<div>
								<div class="product-rating">
								<?php   
										     $rat= $data['rating'];
										     for($i=0;$i<$rat;$i++) { ?>
											 <i class="fa fa-star"></i>
											 <?php
										         }
											 ?>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price"><?php echo $data['price'];?><del class="product-old-price"><?php echo $data['oprice'];?></del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?php echo $data['des'];?></p>

							<div class="product-options">
							<form action="refer.php" method="POST">
								<label>
									Size
									<select class="input-select">
										<option value="1">1</option>
										
									</select>
								</label>
								<label>
									Color
									<select name="color" class="input-select">
										<option value="0">Red</option>
										<option value="1">Green</option>
										
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<select name="quantity" class="input-select">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>

									</select>
								</div>
								<button name="buy" type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Buy now</button>
							</div>
							<input type="hidden" name="hide" value ="<?php echo $data['id'] ; ?> " >
							</form>
							
							
							
							<ul class="product-btns">
								<form id="myForm" method="POST">
								<button type="submit" id="submitFormData" name="submit" value="<?php echo $data['id'];?>" onclick="SubmitFormData();">add to wishlist</button>
								</form>
								
								
							
								<script> function SubmitFormData() {

document.getElementById("submitFormData").innerHTML = "Added to wishlist";
                        var submit = $("#submitFormData").val();
    
                          $.post("add.php", { submit:submit },
                          function(data) {
     
	                      // $('#results').html(data);
						   // $('#myForm')[0].reset();
						   
						   
	                       });
	                     }
								</script>
							</ul>
                            
							<ul class="product-links">
								<li>Category:</li>
								<li><?php echo $data['category'];?></li>
								
							</ul>

							

							
							

						</div>
					</div>



				   <?php

                   if(isset($_POST['add']))

                   {
                   

                   } 

                   ?> 

					


					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $data['des'];?></p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $data['des'];?></p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>



					<?php 
				  
				  $category=$data['category'];
					 

                  $qry="SELECT * FROM `products` WHERE `category`='$cat' ";
                  $run=mysqli_query($con,$qry);
                  $row=mysqli_num_rows($run);



                while($r= mysqli_fetch_array($run)){
   
	
                 ?>

	
	<!-- product -->
	
	<div class="col-md-4 col-xs-6">
		<div class="product">
			<div class="product-img">
				<img src="./img/<?php echo $r['pimage'] ?>.png" alt="">
				<div class="product-label">
					<span class="sale">-30%</span>
					<span class="new">NEW</span>
				</div>
			</div>
			<div class="product-body">
				<p class="product-category">Category</p>
				<h3 class="product-name"><a href="#"><?php echo $r['name'] ?></a></h3>
				<h4 class="product-price"><?php echo $r['price'] ?><del class="product-old-price"><?php echo $r['oprice'] ?></del></h4>
				<div class="product-rating">
				 <?php   
					 $rat= $r['rating'];
					 for($i=0;$i<$rat;$i++) { ?>
					 <i class="fa fa-star"></i>
					 <?php
						 }
					 ?>
				</div>
				<div class="product-btns">
					<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
					</div>
			</div>
			<div class="add-to-cart">
				 <form action="" method="POST">
				<button name="<?php  echo $r['id']  ; ?>" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>View</button>
				</form>
			</div>
		</div>
	</div>
	  <?php
		
	   
		if(isset($_POST[$r['id']])){
			
		   echo $r['id'];
		   ?>
		   <script> window.location="product.php?sid=<?php echo $r['id'];?>"; </script>
		   <?php
		
		}
		?>

	<?php
	  

	    

	  }












                     ?>
				

					

					

					<div class="clearfix visible-sm visible-xs"></div>

					

					

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>


	
