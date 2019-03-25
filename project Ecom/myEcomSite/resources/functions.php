<?php
//helper functions
$upload_directory = "uploads";

function redirect($location){

return header("Location: $location ");
}


function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}


function confirm($result){

global $connection;

if(!$result) {

die("QUERY FAILED " . mysqli_error($connection));


	}
}

//it might not work in php 7
function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);


}
//setting session messages through functions........
function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }

}

function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


////....................?

function last_id(){

global $connection;

return mysqli_insert_id($connection);


}



///front end stuff


function get_products() {


$query = query(" SELECT * FROM products");
confirm($query);
$index = 1;
while($row = fetch_array($query))
{
	$product_image = display_image($row['product_image']);

$product = <<<DELIMETER
<div class="col-md-3 product-left">
  <div class="p-one simpleCart_shelfItem">
      <a href="singleitem.php?id={$row['product_id']}">
        <img src="../resources/{$product_image}" alt="" />
        <div class="mask">
          <span>Quick View</span>
        </div>
      </a>
    <h4>{$row['product_title']}</h4>
    <p><a class="item_add" href="../resources/cart.php?add={$row['product_id']}"><i></i> <span class=" item_price">&#36;{$row['product_price']}</span></a></p>
  </div>
</div>
DELIMETER;

echo $product;

// if(fmod($row['product_id'],4)==0)
if( $index % 4 == 0 )
{


$space = <<<DELIMETER
	<div class="clearfix"> </div>

	</div>
  <div class="product-one">
DELIMETER;

echo $space;


}
 $index++;
		}
			}





function get_categories(){

$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER
  <li><a href='shop.php?id={$row['cat_id']}'>{$row['cat_title']}</a> <span class="count"></span></li>
DELIMETER;

echo $categories_links;

     }
}



function get_SUB_categories(){

$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_sub_links = <<<DELIMETER
<li><a href="shop.php?id={$row['cat_id']}">{$row['cat_title']}</a></li>
DELIMETER;

echo $categories_sub_links;

     }
}







function get_brands(){

$query = query("SELECT * FROM brands");
confirm($query);

while($row = fetch_array($query)) {


$brands_links = <<<DELIMETER
  <li><a href='shop.php?bid={$row['brand_id']}'>{$row['brand_title']}</a> <span class="count"></span></li>
DELIMETER;

echo $brands_links;

     }
}


function get_SUB_brands(){

$query = query("SELECT * FROM brands");
confirm($query);

while($row = fetch_array($query)) {


$brands_sub_links = <<<DELIMETER
<li><a href="shop.php?bid={$row['brand_id']}">{$row['brand_title']}</a></li>
DELIMETER;

echo $brands_sub_links;

     }
}


///sql injection
function get_products_in_shop_page() {
//$id = isset($_GET['id']) ? $_GET['id'] : '';
$id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 1;
$bid = ( isset( $_GET['bid'] ) && is_numeric( $_GET['bid'] ) ) ? intval( $_GET['bid'] ) : NULL;
$MAK = escape_string($id);
$MAK_Dev = escape_string($bid);
if ($MAK_Dev!=NULL){
$query = query(" SELECT * FROM products WHERE brand_id = '$MAK_Dev'");
confirm($query);
$index = 1;
while($row = fetch_array($query)) {
$product_image = display_image($row['product_image']);
$product_shop = <<<DELIMETER
				<div class="col-md-4 product-left single-left">
					<div class="p-one simpleCart_shelfItem">
						<a href="singleitem.php?id={$row['product_id']}">
								<img src="../resources/{$product_image}" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
						<h4>{$row['product_title']}</h4>
						<p><a class="item_add" href="../resources/cart.php?add={$row['product_id']}"><i></i> <span class=" item_price">&#36;{$row['product_price']}</span></a></p>
					</div>
				</div>
DELIMETER;

echo $product_shop;


// if(fmod($row['product_id'],3)==0)
if( $index % 3 == 0 )
{
$space = <<<DELIMETER
	<div class="clearfix"> </div>

	</div>
  <div class="product-one">
DELIMETER;

echo $space;}
$index++;


}





}elseif ($MAK!=NULL){
$query = query(" SELECT * FROM products WHERE cat_id = '$MAK'");
confirm($query);
$index = 1;
while($row = fetch_array($query)) {
$product_image = display_image($row['product_image']);
$product_shop = <<<DELIMETER
				<div class="col-md-4 product-left single-left">
					<div class="p-one simpleCart_shelfItem">
						<a href="singleitem.php?id={$row['product_id']}">
								<img src="../resources/{$product_image}" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
						<h4>{$row['product_title']}</h4>
						<p><a class="item_add" href="../resources/cart.php?add={$row['product_id']}"><i></i> <span class=" item_price">&#36;{$row['product_price']}</span></a></p>
					</div>
				</div>
DELIMETER;

echo $product_shop;


// if(fmod($row['product_id'],3)==0)
if( $index % 3 == 0 )
{


$space = <<<DELIMETER
	<div class="clearfix"> </div>

	</div>
  <div class="product-one">
DELIMETER;

echo $space;


}

$index++;

}
		}

}

function send_message() {

  /*  if(isset($_POST['submit'])){

        $to  = "mylink.me@gmail.com";

        if (isset($_POST['name'])) {
			  $name   =   $_POST['name'];
				}

				if (isset($_POST['email'])) {
        $email     =   $_POST['email'];
					}

				if (isset($_POST['phone'])) {
        $phone    =   $_POST['phone'];
					}

				if (isset($_POST['message'])) {
        $message     =   $_POST['message'];
					}


        $headers = "From: {$name} {$email}";


        $result = mail($to,$phone,$message,$headers);

        if(!$result) {
 set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {
   set_message("Your Message has been sent");
            redirect("contact.php");
        }



    }
		*/

		if(isset($_REQUEST['submit'])){

					$to  = "mylink.me@gmail.com";

					if(isset($_REQUEST['name'])) {
					$name   =   $_REQUEST['name'];
					}

					if(isset($_REQUEST['mail'])) {
					$email     =  $_REQUEST['email'];
						}

					if(isset($_REQUEST['phone'])){
					$phone    =   $_REQUEST['phone'];
						}

				if(isset($_REQUEST['message'])) {
					$message     = $_REQUEST['message'];
						}


					$headers = "From: {$name} {$email}";


					$result = mail($to,$phone,$message,$headers);

					if(!$result) {
            set_message("Sorry we could not send your message");
							redirect("contact.php");
					} else {
         set_message("Your Message has been sent");
							redirect("contact.php");
					}



			}


}

////////////////////////........................ADMIN.....................................
function createHash( $str )
{
	return hash( 'sha256', $str );
}





function login_user()
{

	if(isset($_POST['submit'])){

		$username = escape_string($_POST['username']);
		$password = createHash( escape_string( $_POST['password'] ) );

		$query = query("SELECT * FROM admin_users WHERE username = '{$username}' AND password = '{$password }' ");
		confirm($query);

		if(mysqli_num_rows($query) == 0) {

			set_message("Your Password or Username are wrong");
			redirect("login.php");


		} else {

			$_SESSION['username'] = $username;
			redirect("index.php?main");

		}



	}



}



function display_customers(){



$query = query("SELECT * FROM customer");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['cust_id']}</td>
    <td>{$row['cust_fname']}</td>
		<td>{$row['cust_lname']}</td>
    <td>{$row['cust_email']}</td>
    <td>{$row['cust_address']}</td>
    <td>{$row['cust_city']}</td>
		<td>{$row['cust_country']}</td>
		<td>{$row['cust_zipcode']}</td>
		<td>{$row['cust_phoneno']}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_customer.php?id={$row['cust_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}



function display_orders(){



$query = query("SELECT * FROM orders");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['order_amount']}</td>
    <td>{$row['order_transaction_id']}</td>
    <td>{$row['order_currency']}</td>
    <td>{$row['order_status']}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}



function display_offline_orders(){



$query = query("SELECT * FROM offline_orders");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['offline_order_id']}</td>
		<td>{$row['order_cust_id']}</td>
    <td>{$row['offline_order_amount']}</td>
    <td>{$row['offline_order_status']}</td>
		<td>{$row['offline_order_instruction']}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_offline_order.php?id={$row['offline_order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}



/************************ Admin Products Page ********************/

function display_image($picture) {

global $upload_directory;

return $upload_directory  . DS . $picture;



}





function get_products_in_admin(){


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['cat_id']);

$brand = show_product_brand_title($row['brand_id']);

$product_image = display_image($row['product_image']);

$product_img_s1 = display_image($row['product_img_s1']);

$product_img_s2 = display_image($row['product_img_s2']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>
            <td>{$row['product_title']}<br>
        <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt=""></a>
				<a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_img_s1}" alt=""></a>
				<a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_img_s2}" alt=""></a>
            </td>
            <td>{$category}</td>
						<td>{$brand}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}


function show_product_category_title($cat_id){


$category_query = query("SELECT * FROM categories WHERE cat_id = '{$cat_id}' ");
confirm($category_query);

while($category_row = fetch_array($category_query)) {

return $category_row['cat_title'];

}



}


///my modified....................
function show_product_brand_title($brand_id){


$brand_query = query("SELECT * FROM brands WHERE brand_id = '{$brand_id}' ");
confirm($brand_query);

while($brand_row = fetch_array($brand_query)) {

return $brand_row['brand_title'];

}



}










/***************************Add Products in admin********************/


function add_product() {


if(isset($_POST['publish'])) {


$product_title          = escape_string($_POST['product_title']);
$cat_id    = escape_string($_POST['cat_id']);
$brand_id       = escape_string($_POST['brand_id']);
$product_price          = escape_string($_POST['product_price']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_description    = escape_string($_POST['product_description']);
$product_image          = escape_string($_FILES['file']['name']);
$product_img_s1         = escape_string($_FILES['file2']['name']);
$product_img_s2         = escape_string($_FILES['file3']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);
$image_temp_location2    = escape_string($_FILES['file2']['tmp_name']);
$image_temp_location3    = escape_string($_FILES['file3']['tmp_name']);

move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);
move_uploaded_file($image_temp_location2  , UPLOAD_DIRECTORY . DS . $product_img_s1);
move_uploaded_file($image_temp_location3  , UPLOAD_DIRECTORY . DS . $product_img_s2);


$query = query("INSERT INTO products(product_title, cat_id, brand_id, product_price, product_quantity, product_description, product_image, product_img_s1, product_img_s2) VALUES('{$product_title}', '{$cat_id}', '{$brand_id}', '{$product_price}', '{$product_quantity}', '{$product_description}', '{$product_image}', '{$product_img_s1}', '{$product_img_s2}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} was Added");
redirect("index.php?products");


        }


}

function show_categories_add_product_page(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}

function show_brands_add_product_page(){


$query = query("SELECT * FROM brands");
confirm($query);

while($row = fetch_array($query)) {


$brands_options = <<<DELIMETER

 <option value="{$row['brand_id']}">{$row['brand_title']}</option>


DELIMETER;

echo $brands_options;

     }



}


/***************************updating product code ***********************/

function update_product() {


if(isset($_POST['update'])) {


$product_title          = escape_string($_POST['product_title']);
$cat_id                 = escape_string($_POST['cat_id']);
$brand_id               = escape_string($_POST['brand_id']);
$product_price          = escape_string($_POST['product_price']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_description    = escape_string($_POST['product_description']);
$product_image          = escape_string($_FILES['file']['name']);
$product_img_s1         = escape_string($_FILES['file2']['name']);
$product_img_s2         = escape_string($_FILES['file3']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);
$image_temp_location2    = escape_string($_FILES['file2']['tmp_name']);
$image_temp_location3    = escape_string($_FILES['file3']['tmp_name']);



if(empty($product_image)) {

$get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);

while($pic = fetch_array($get_pic)) {

$product_image = $pic['product_image'];

    }

}


move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);




if(empty($product_img_s1)) {

$get_pic = query("SELECT product_img_s1 FROM products WHERE product_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);

while($pic = fetch_array($get_pic)) {

$product_img_s1 = $pic['product_img_s1'];

    }

}


move_uploaded_file($image_temp_location2  , UPLOAD_DIRECTORY . DS . $product_img_s1);



if(empty($product_img_s2)) {

$get_pic = query("SELECT product_img_s2 FROM products WHERE product_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);

while($pic = fetch_array($get_pic)) {

$product_img_s2 = $pic['product_img_s2'];

    }

}


move_uploaded_file($image_temp_location3  , UPLOAD_DIRECTORY . DS . $product_img_s2);






$query = "UPDATE products SET ";
$query .= "product_title            = '{$product_title}'        , ";
$query .= "cat_id                   = '{$cat_id}'  , ";
$query .= "brand_id                 = '{$brand_id}'  , ";
$query .= "product_price            = '{$product_price}'        , ";
$query .= "product_quantity         = '{$product_quantity}'     , ";
$query .= "product_description      = '{$product_description}'  , ";
$query .= "product_image            = '{$product_image}'        , ";
$query .= "product_img_s1           = '{$product_img_s1}'       , ";
$query .= "product_img_s2           = '{$product_img_s2}'         ";
$query .= "WHERE product_id=" . escape_string($_GET['id']);





$send_update_query = query($query);
confirm($send_update_query);
set_message("Product has been updated");
redirect("index.php?products");


        }


}

/*************************Categories in admin ********************/


function show_categories_in_admin() {


$category_query = query("SELECT * FROM categories");
confirm($category_query);


while($row = fetch_array($category_query)) {

$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


$category = <<<DELIMETER


<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $category;



    }



}


function add_category() {

if(isset($_POST['add_category'])) {
$cat_title = escape_string($_POST['cat_title']);

if(empty($cat_title) || $cat_title == " ") {

echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";


} else {


$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");



    }


    }




}

/*************************Brands in admin ********************/


function show_brands_in_admin() {


$brand_query = query("SELECT * FROM brands");
confirm($brand_query);


while($row = fetch_array($brand_query)) {

$brand_id = $row['brand_id'];
$brand_title = $row['brand_title'];


$brand = <<<DELIMETER


<tr>
    <td>{$brand_id}</td>
    <td>{$brand_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_brand.php?id={$row['brand_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $brand;



    }



}



function add_brand() {

if(isset($_POST['add_brand'])) {
$brand_title = escape_string($_POST['brand_title']);

if(empty($brand_title) || $brand_title == " ") {

echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";


} else {


$insert_brand = query("INSERT INTO brands(brand_title) VALUES('{$brand_title}') ");
confirm($insert_brand);
set_message("Brand Created");



    }


    }




}

 /************************admin users***********************/



function display_users() {


$category_query = query("SELECT * FROM admin_users");
confirm($category_query);


while($row = fetch_array($category_query)) {

$user_id = $row['user_id'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];

$user = <<<DELIMETER


<tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
     <td>{$email}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $user;



    }



}


function add_user() {


if(isset($_POST['add_user'])) {


$username   = escape_string($_POST['username']);
$email      = escape_string($_POST['email']);
$password   = createHash( escape_string( $_POST['password'] ) );
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO admin_users(username,email,password) VALUES('{$username}','{$email}','{$password}')");
confirm($query);

set_message("USER CREATED");

redirect("index.php?users");



}



}





function get_reports(){


$query = query(" SELECT * FROM payment_reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
            <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}



function get_offline_reports(){


$query = query(" SELECT * FROM offline_payment_reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
            <td>{$row['offline_report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['offline_order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_offline_report.php?id={$row['offline_report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}


////////////////////Admin Dash board count functions.................


function count_orders(){


$query = query(" SELECT COUNT(*) as total_orders FROM orders");
confirm($query);
// using mysql_fetch_assoc by calling alias...............( as )
$data=mysqli_fetch_assoc($query);
echo $data['total_orders'];

}


function count_offline_orders(){


$query = query(" SELECT COUNT(*) as total_offline_orders FROM offline_orders");
confirm($query);
// using mysql_fetch_assoc by calling alias...............( as )
$data=mysqli_fetch_assoc($query);
echo $data['total_offline_orders'];

}



function count_products(){


$query = query(" SELECT COUNT(*)  as total_products FROM products");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_products'];

}





function count_categories(){


$query = query(" SELECT COUNT(*)  as total_categories FROM categories");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_categories'];

}




function count_reports(){


$query = query(" SELECT COUNT(*)  as total_reports FROM payment_reports");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_reports'];

}



function count_offline_reports(){


$query = query(" SELECT COUNT(*)  as total_offline_reports FROM offline_payment_reports");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_offline_reports'];

}




function count_customers(){


$query = query(" SELECT COUNT(*)  as total_customers FROM customer");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_customers'];

}



function count_brands(){


$query = query(" SELECT COUNT(*)  as total_brands FROM brands");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_brands'];

}


function count_admin_users(){


$query = query(" SELECT COUNT(*)  as total_admin_users FROM admin_users");
confirm($query);

$data=mysqli_fetch_assoc($query);
echo $data['total_admin_users'];

}

// function Give_me_id($Take_id){
//
// 	return $Take_id;
// }




 ?>
