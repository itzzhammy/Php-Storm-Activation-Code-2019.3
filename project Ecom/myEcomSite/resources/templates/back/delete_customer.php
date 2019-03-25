<?php require_once("../../config.php");


if(isset($_GET['id'])) {


$query = query("DELETE FROM customer WHERE cust_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("Customer Deleted");
redirect("../../../public/admin/index.php?customers");


} else {

redirect("../../../public/admin/index.php?customers");


}






 ?>
