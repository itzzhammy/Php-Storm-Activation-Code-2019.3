<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>
	<!--banner-starts-->
<?php  include(TEMPLATE_FRONT . DS . "slider.php") ?>
	<!--End-slider-script-->

	<!--start-banner-bottom-->
	<!--  <div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-top">
					<div class="col-md-6 banner-bottom-left">
				<div class="bnr-one">
						<div class="bnr-left">
							<h1><a href="singleitem.php">Newly Added</a></h1>
							<p>This the new arrival of October 2017</p>
							<div class="b-btn">
								<a href="singleitem.php">SHOP NOW</a>
							</div>
						</div>
						<div class="bnr-right">
							<a href="singleitem.php"><img src="images/dellinspiron7000-2.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="col-md-6 banner-bottom-right">
					<div class="bnr-two">
						<div class="bnr-left">
							<h2><a href="singleitem.php">Available on Discouts</a></h2>
							<p>20% off on this product (Special sale).</p>
							<div class="b-btn">
								<a href="singleitem.php">SHOP NOW</a>
							</div>
						</div>
						<div class="bnr-right">
							<a href="singleitem.php"><img src="images/macbook-pro-touchbar-3.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->

	<!--end-banner-bottom-->

	<!--start-of-all-peoducts-->
	<div class="shoes">
		<div class="container">
			<div class="product-one">


<!--start-first-peoduct-->
  <?php get_products(); ?>

<!--start-second-peoduct-->

				<!---->
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">

					<!--more products-->


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-of-all-peoducts-->
<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
