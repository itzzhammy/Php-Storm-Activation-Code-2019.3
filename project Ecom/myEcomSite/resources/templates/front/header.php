<!DOCTYPE html>
<html>
<head>
<title> </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>

<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>

				<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
</head>
<body>

	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
					<!--Search Box-->
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href="index.php"><img src="images/bplogo.png" alt="" /></a>
			</div>
			<!--Cart Box-->
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
						<!--	<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)--></div>
							<i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:60px"></i>
						</a>
						<!--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
						--->
						
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="shop.php">Shop</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Categories</h4>
									<ul>
										 <?php get_SUB_categories() ?>
									</ul>
								</div>

								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
		         <?php get_SUB_brands() ?>
									</ul>
								</div>
							</div>
						</div>
					</li>
				
					<li class="grid"><a href="checkout.php">Checkout</a>
					</li>
					
					<li class="grid"><a href="trackorder.php">Track Order</a>
					</li>

					<li class="grid"><a href="contact.php">About us & contact</a>
					</li>


				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!--bottom-header-->
