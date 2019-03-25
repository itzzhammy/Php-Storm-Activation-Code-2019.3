<?php  require_once("config.php") ?>

<?php

  $cus_fname = $_POST['firstname'];
  $cus_lname = $_POST['lastname'];
  $cus_email = $_POST['email'];
  $cus_addr = $_POST['address'];
  $cus_phoneno = $_POST['phone'];
  $cus_country=$_POST['country'];

	/*foreach($cus_city as $value){
		$$value</br>";

	}*/
  $cus_city=$_POST['city'];
  $cus_zipcode=$_POST['zipcode'];

	$_SESSION['cusfname']="Me";

 // $cus_payment=$_POST['payment'];


  // Running the above query would allow anyone to login as any user! We can use
  // the mysql_real_escape_string function to escape the user's input. If used in
  // the above example, the new query would read:
  //
  // SELECT * FROM users WHERE user='USERNAME' AND password='\' OR \'\'=\''
  //
  // Because the single quotes are "escaped" (i.e. appended with a backslash), the
  // hackers attempt would fail.

  $cus_fname = mysqli_real_escape_string($connection,$cus_fname);
  $cus_lname = mysqli_real_escape_string($connection,$cus_lname);
  $cus_email = mysqli_real_escape_string($connection,$cus_email);
  $cus_addr = mysqli_real_escape_string($connection,$cus_addr);
  $cus_phoneno = mysqli_real_escape_string($connection,$cus_phoneno);
  $cus_country=mysqli_real_escape_string($connection,$cus_country);
  $cus_city=mysqli_real_escape_string($connection,$cus_city);
  $cus_zipcode=mysqli_real_escape_string($connection,$cus_zipcode);
  //$cus_payment=mysqli_real_escape_string($connection,$cus_payment);


 $sql = "INSERT INTO customer (cust_fname, cust_lname, cust_email, cust_address, cust_city, cust_country, cust_zipcode, cust_phoneno) VALUES ('$cus_fname', '$cus_lname', '$cus_email', '$cus_addr', '$cus_city', '$cus_country', '$cus_zipcode', '$cus_phoneno' )";
   // $mylast_id =last_id(); ///error becuz query is not working here
  if(!mysqli_query($connection,$sql)){
	  echo "Records have not been added";
	  echo "$cus_fname";
  }

  else{
     $mylast_id =last_id();
     // echo 'FILE:' . __FILE__ . '<br>LINE:' . __LINE__ .  '<pre> ';
     // print_r( $mylast_id );
     // echo '</pre>';die;

  //   //$sql = "SELECT cust_id FROM customer WHERE cust_id='$mylast_id' AND cust_email='$cus_email'";
  //   $sql = "SELECT cust_id as my_id FROM customer WHERE cust_fname='$cus_fname' AND cust_email='$cus_email' AND cust_address='$cus_addr' AND cust_phoneno='$cus_phoneno'";
  //   $result = mysqli_query($connection, $sql);
  // //if (mysqli_num_rows($result) > 0) {
  //
  //   while($row = mysqli_fetch_assoc($result)) {
  //
  //   $cus_id=$row['my_id'];
  //
  //   }

    // if($cust_id!= NULL){
// Give_me_id( $mylast_id);

// }
//}
offline_order($mylast_id);

    //alert("Records have been inserted";
    //Mymail();
   // offline_order($cus_fname, $cus_email, $cus_phoneno, $cust_id);
  // offline_order($cus_fname, $cus_email, $cus_phoneno);
}

  //mysqli_close($connection);



?>
<?php
// function Mymail()
//{
  # code...
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  //Load composer's autoloader
  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 1;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = '';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '';                 // SMTP username
      $mail->Password = '';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 2525;                                    // TCP port to connect to

  	$address="$cus_email";
  	$name="$cus_fname";
  	//$orderno="$cus_order_no";
      //Recipients
      $mail->setFrom('', 'DDB TECHNOLOGIES');
      $mail->addAddress($address, $name);     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('', 'Information');
      //$mail->addCC('k152886@nu.edu.pk');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Order Confirmed';
  	  $body='Your order has been confirmed';

      $mail->Body    = $body;
      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo 'Message has been sent';
  	echo "<script> window.location.assign('../public/index.php')</script>";
  } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }

  //header("Location: ../public/index.php"); /* Redirect browser */
  //header(refresh:5; url="../public/index.php");

  //exit();
//}
