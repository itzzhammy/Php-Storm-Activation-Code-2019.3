<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">New Products</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-product-->
	<div class="product">
		<div class="container">
			<div class="product-main">


				<div class="col-md-9 p-left">
				<div class="product-one">

				<?php get_products_in_shop_page(); ?>

				

				<div class="clearfix"> </div>
			</div>
			<div class="product-one">




			<div class="clearfix"> </div>
			</div>
			<div class="product-one">




				<div class="clearfix"> </div>
			</div>
			</div>

      <!--side bar start here-->
			  <?php  include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
			<!--side bar ends here-->
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--end-product-->
	<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
