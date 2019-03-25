<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>


<link href="css/formstyle.css" rel="stylesheet"/>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Track Order
					<li class="active">ORDER STATUS</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-ckeckout-->


<?php
if(isset($_POST['orderstatus'])){
$connection = mysqli_connect("localhost", "root", "", "myecom_db");

if($connection === false)
    die("ERROR: Could not connect. ");

$order=$_POST['orderstatus'];

$sql = "SELECT customer.cust_fname, customer.cust_lname, offline_orders.offline_order_status, offline_orders.offline_order_amount FROM offline_orders join customer WHERE offline_orders.offline_order_id='$order' AND customer.cust_id=offline_orders.order_cust_id";
$res = mysqli_query($connection, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
		$fname=$row['cust_fname'];
		$lname=$row['cust_lname'];
		//$productid=$row['product_id'];
    $orderstat=$row['offline_order_status'];
		$orderam=$row['offline_order_amount'];

    }
	echo"
		<div id='order_status'>
		<table border=2 id='table_details'>
		<!-- putting the caption inside the table-->
		<tr>
		<td id='hed' colspan=4 align=center><h2> ORDER STATUS <h2></td>
		</tr>

		<tr>
		<td style='text-align:center'> FULL NAME </td>
		<td style='text-align:center'> ORDER ID </td>

		<td style='text-align:center'> STATUS </td>
		<td style='text-align:center'> TOTAL AMOUNT </td>
		</tr>

		<tr>

		<th id='det'>$fname $lname</th>
		<th id='det'> $order</th>
		<th id='det'> $orderstat</th>
		<th id='det'> $orderam</th>
		</tr>

		</table>
		</br></br>
		</div>


";
	echo "<a id='back' href='index.php'> GO BACK </a></br></br>";
} else {
    echo "<div id='invalid'><h2>Invalid Order Number! Try Again</h2></div>";

}






}
else{
	echo "Invalid Order";
}

?>



<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
