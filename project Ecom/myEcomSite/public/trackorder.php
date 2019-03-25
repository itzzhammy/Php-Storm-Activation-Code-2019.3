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
					<li class="active">TRACK ORDER</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-ckeckout-->
		

<div id="tracko_login">
<form action="trackrecorddetails.php" method="POST" >
	<div id="order-heading"> ORDER STATUS </br>
	<label for="ostatus" id="ordstatus"> Enter your order number </label></br></br>
	
		<input placeholder="e.g 3075512" type="text" id="ostatus" name="orderstatus" class=" " maxlength=9 size=20 /></br></br></br>
		<input id="oinput" type="submit" value="GO" href="display_order_status.php" onsubmit="checkinfo();"/>
	</div>

</form>

</div>

</html>
<script type="text/javascript">
	
	function checkinfo(){
				var order=document.getElementById('ostatus').value;
				
				if(order==" "){
					alert('Please enter the correct order number that was sent to you!');
					return false;
				}
				else{
					return true;
				}
			}
	
	function changeimage(){
		
	}
</script>



<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>