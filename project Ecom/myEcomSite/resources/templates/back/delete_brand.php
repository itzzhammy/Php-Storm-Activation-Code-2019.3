<?php require_once("../../config.php");


if(isset($_GET['id'])) {


$query = query("DELETE FROM brands WHERE brand_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("Brand Deleted");
redirect("../../../public/admin/index.php?brands");


} else {

redirect("../../../public/admin/index.php?brands");


}






 ?>
