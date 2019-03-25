<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>

<html>
<link href="css/formstyle.css" rel="stylesheet"/>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
          <li><a href="checkout.php">CheckOut</a></li>
					<li class="active">THANK YOU</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->



<?php


process_transaction();


 ?>





    <!-- Page Content -->
    <div class="container">

      <h1 class="text-center">THANK YOU</h1>
     <h1 class="text-center"> </h1>
	   <h1 class="text-center"> </h1>
	   <h1 class="text-center"> </h1>

    </div>
    <!-- /.container -->
		</html>



<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
