<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Product Item</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">

				<div class="sngl-top">

					<!--slider stuff-->

					<?php
					$query = query(" SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
					confirm($query);
					while($row = fetch_array($query)):

					 ?>

<?php
$product_image_s1 = display_image($row['product_img_s1']);
$product_image_s2 = display_image($row['product_img_s2']);
$product_item = <<<DELIMETER
					<div class="col-md-5 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="../resources/{$product_image_s1}">
									<img src="../resources/{$product_image_s1}" />
								</li>
								<li data-thumb="../resources/{$product_image_s2}">
									<img src="../resources/{$product_image_s2}" />
								</li>
							</ul>
						</div>
<!-- FlexSlider -->


  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
	<!--slider stuff ends-->
DELIMETER;

	echo $product_item;


 ?>









				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3><?php echo $row['product_title']; ?></h3>
						<p class="availability">Availability: <span class="color">In stock</span></p>
						<div class="price_single">
						<!--	<span class="reducedfrom">180000.00</span> -->
							<span class="actual item_price"><?php echo "&#36;" . $row['product_price']; ?></span>	<!--	<a href="#">click for offer</a> -->
						</div>
						<h2 class="quick">Quick Overview:</h2>
						<p class="quick_desc"><?php echo $row['product_description']; ?></p>
				<!--		<ul class="product-colors">
							<h3>available Colors ::</h3>
							<li><a class="color1" href="#"><span> </span></a></li>

							<li><a class="color6" href="#"><span> </span></a></li>
							<!-- we can define further colors here >
							<div class="clear"> </div>
						</ul>
						<ul class="size">
							<h3>Size</h3>
							<li><a href="#">13 inch</a></li>
							<li><a href="#">15 inch</a></li>
							<li><a>Each size has different price</a></li>
						</ul>

						<div class="quantity_box">
							<ul class="product-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</ul>
						</div>    -->
					<div class="clearfix"> </div>
					<a href="../resources/cart.php?add=<?php echo $row['product_id']; ?>">	<div class="single-but item_add">
		<!--	<a href="../resources/cart.php?add={$row['product_id']}">	<div class="single-but item_add"> -->
				<input type="submit" value="add to cart" /> </a>
				<!--	<input type="submit" value="add to cart" onclick="location.href='../resources/cart.php?add={$row['product_id']}';"/> -->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>



	<?php endwhile; ?>



		<!-- Latest products -->
					<div class="latest products">
						<div class="product-one">

		<!-- showcase -->

		<!-- showcase ends-->

							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- Latest products end here -->
			    <?php  include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->

<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
