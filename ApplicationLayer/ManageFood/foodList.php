<?php
session_start();
require_once '../../BusinessServiceLayer/controller/foodController.php';
require_once '../../BusinessServiceLayer/controller/cartController.php';
$food = new foodServicesController();
$cart = new cartController();
$data = $food->allFood(); 
$view_variable = 'a string here';

  if (!isset($_SESSION['username'])) {
    $message = "You must log in first";
        header('refresh:5; url=../../ApplicationLayer/ManageLogin/login.php');
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../view';</script>";
  }

  if (isset($_POST ['delete'])) {
    $food->delete();
  }

  if(isset($_POST['buy'])){
    $cart->add();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>RMS</title>
    <?php include"../../includes/head.php";?>
    </head>
    <body>



<!-- NAVBAR -->
	    
	    
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/slick-theme.css"/>

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/nouislider.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/style.css"/>


	</head>
	<body>
		<!-- HEADER -->
		<header>

					</header>
					<!-- /HEADER -->

                     <div id="top-header">
                     <div class="container">
					 <?php     
                     include "../../includes/header.php";    
                     ?>


						<!-- SECTION -->
						<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<!--<div class="col-md-4 col-xs-6">-->
				<div class="shop">
					<div class="shop-img">
						<img src="../../img/header.jpg" alt="goods" width="250px" height="250px">
					</div>
					<div class="shop-body"><br><br><br><br>
						<h3 style="color: white;">Runner Management System<br>satisfy your sudden food attack!</h3>
					</div>
				</div>

				<!-- /shop -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Our Popular Menus</h3>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<form method="POST" action="type.php" enctype='multipart/form-data'>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->

								<!-- product -->
								<div class="col-md-3 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="../../img/aaper.jpg" alt="" style="width:263px;height:368px;">
											<div class="product-label">
												<span class="sale">NEWEST</span>
											</div>
										</div>
										<div class="product-body">

											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<input type="submit" class="primary-btn order-submit" name="menu_type" id="menu_type" value="<?php echo "APPETIZER"?> ">
											<br><br>
										</div>


									</div>

								</div>
								<!-- /product -->

								<!-- product -->
								<div class="col-md-3 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="../../img/yosum.jpg" alt="" style="width:263px;height:368px;">
											<div class="product-label">
												<span class="sale">POPULAR</span>
											</div>
										</div>
										<div class="product-body">

											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<input type="submit" class="primary-btn order-submit" name="menu_type" id="menu_type" value="<?php echo "MAIN DISH"?> ">
											<br><br>
										</div>


									</div>

								</div>

								<!-- /product -->

								<!-- /product -->

								<div class="col-md-3 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="../../img/ddrink.jpg" alt="" style="width:263px;height:368px;">
											<div class="product-label">
											</div>
										</div>
										<div class="product-body">

											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<input type="submit" class="primary-btn order-submit" name="menu_type" id="menu_type" value="<?php echo "DRINK"?> ">
											<br><br>
										</div>


									</div>

								</div>

								<!-- /product -->

								

								<!-- product -->
								<div class="col-md-3 col-xs-6">
									<div class="product">
										<div class="product-img">
											<img src="../../img/Mango-Cheesecake.jpg" alt="" style="width:263px;height:368px;">
											<div class="product-label">
												<span class="sale">POPULAR</span>
											</div>
										</div>
										<div class="product-body">

											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<input type="submit" class="primary-btn order-submit" name="menu_type" id="menu_type" value="<?php echo "DESSERT"?> ">
											<br><br>
										</div>


									</div>

								</div>
								<!-- /product -->	   
							</form>
						</div>
					</div>
				</div>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



	</body>


<!-- FOOTER -->
<div class="footer">
  <div>
  <p>All Right Reserved Marverick &#8482;</p>
  </div> 
</body>
</html>
