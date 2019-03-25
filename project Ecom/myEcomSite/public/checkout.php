<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Checkout</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-ckeckout-->
		<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
		 <h4 class="text-center bg-danger"><?php display_message(); ?></h4>

			 <h3>My Shopping Bag (3)</h3>

			<div class="in-check" >

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="me_isiddiqui-facilitator@yahoo.com">
<input type="hidden" name="currency_code" value="USD">
				<ul class="unit">
					<li><span>Product Name</span></li>
					<li><span>Unit Price</span></li>
					<li><span>Quantity</span></li>
					<li><span>Sub Total</span></li>
					<li><span> </span></li>
					<li><span> </span></li>
					<li><span> </span></li>
					<div class="clearfix"> </div>
				</ul>





				  <?php cart(); ?>

				   <!-- check-out further -->
<a class="continue" href="Shop.php">Continue to Shop</a>

<?php echo show_paypal(); ?>
</form>


<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">
&#36; <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?>
</span></strong> </td>
</tr>

</tbody>

</table>


</div>



<div class="clearfix"></div>
<a class="order" href="form.php">Place Order</a>

			   <!-- check-out further ends -->
			</div>
			</div>
		 </div>
		</div>
	</div>

	<!--end-ckeckout-->

	<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
