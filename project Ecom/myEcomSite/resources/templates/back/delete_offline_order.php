<?php require_once("../../config.php");


if(isset($_GET['id'])) {


$query = query("DELETE FROM offline_orders WHERE offline_order_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("Order Deleted");
redirect("../../../public/admin/index.php?offline_orders");


} else {

redirect("../../../public/admin/index.php?offline_orders");


}






 ?>
