<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/MealDash/Business Services Layer/MenuController/controller.php';
$menu_type = $_POST['menu_type'];


$menu = new menuController();
$data = $menu->viewAllMenu($menu_type);


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>RMS</title>

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
					
						<!-- /TOP HEADER -->

		</header>
					<!-- /HEADER -->

					<!-- BREADCRUMB -->
					<div id="breadcrumb" class="section">
						<!-- container -->
						<div class="container">
							<!-- row -->
							<div class="row">
								<div class="col-md-12">
									<h3 class="breadcrumb-header">VIEW <?php echo $menu_type ?></h3>
									<ul class="breadcrumb-tree">
										<li><a href="../ManageFood/foodList.php">Home</a></li>
										<!-- <li><a href="index.html">ADD MENU</a></li> -->
										<li class="active">VIEW <?php echo $menu_type ?></a></li>
									</ul>
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /container -->
					</div>

					<!-- /BREADCRUMB -->

					<div class="section">
						<div class="container">
							<div class="row">
									<div class="add_product-details">
										<div class="section-title">
											<h3 class="title"><?php echo $menu_type ?></h3>
										</div>

			  									
											    <?php
			            							foreach($data as $row){ ?>
			            						<div id="store" class="​col-md-4">

			               						
										<!-- product -->
												<div class="clearfix visible-sm visible-xs"></div>

									<!-- product -->
									<form method="POST" action="type.php?action=add&menu_id=<?php echo $row["menu_id"]; ?>">
									<div class="col">
									<div class="col-sm-3">
										<div class="product">
											<div class="product-img">
												
													
													 <img src="<?="../ManageFood/menu/".$row['image']?>" alt="no_image" width="200" height="200" border="2">
													
											</div>
												
												<div class="product-body">
													<p class="product-category"><?=$row['menu_description']?></p>
													<h3 class="product-name"><?=$row['menu_name']?></h3>
													<h4 class="product-price">RM<?=$row['menu_price']?></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>

													<input type="hidden" name="hidden_id" value="<?php echo $row["menu_id"]; ?>" />
													<input type="hidden" name="foodVen" value="<?php echo $menu_type ?>" />

													<input type="hidden" name="hidden_name" value="<?php echo $row["menu_name"]; ?>" />

													<input type="hidden" name="hidden_price" value="<?php echo $row["menu_price"]; ?>" />
													<input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
												
												<div class="add-to-cart">
												<input type="number" name="quantity" value="1" class="form-control" max= "10" min="1" />
												<input type="submit" name="add_to_cart" style="margin-top:5px;" class="add-to-cart-btn" value="Add to Cart" />
												
												
												</div>
											</div>
											<!-- </div> -->
										</div>	
									</div>
								</form>
									
							<?php } ?>
									
					<!-- </div>		
						 -->
						</div>
					</div>
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
			</html>
