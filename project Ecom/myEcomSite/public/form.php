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
					<li class="active">CHECKOUT</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-ckeckout-->


<div id="cus_details">
<form action="../resources/customer.php" method="POST" onsubmit="return Validate()" name="vform">
<fieldset id="ship">
		<legend> SHIPPING DETAILS </legend>
		</br>

		<div>
		<label for="fname"> First Name : </label>
		<input placeholder="FIRST NAME" type="text" id="fname" name="firstname" class="textInput" maxlength=20 size=20 on/></br></br></br>
		<div id="fname_error" class="val_error"></div>
		</div>

		<div>
		<label for="lname"> Last Name : </label>
		<input placeholder="LAST NAME" type="text" id="lname" name="lastname" class="textInput" maxlength=20 size=20/></br></br></br>
		<div id="lname_error" class="val_error"></div>
		</div>

		<div>
		<label for="email"> Email : </label>
		<input placeholder="EMAIL ID" type="text" id="email" name="email" class="textInput" maxlength=20 size=20/></br></br></br>
		<div id="email_error" class="val_error"></div>
		</div>

		<label for="addr"> Address : </label>
		<input placeholder="ADDRESS" type="text" id="addr" name="address" maxlength=40 size=40/></br></br></br>

		<div>
		<label for="phoneno"> Phone Number : </label>
		<input placeholder="CONTACT" type="text" id="phoneno" name="phone" maxlength=14 size=20/></br></br></br>
		<div id="number_error"></div>
		</div>

		<label for="country"> Country : </label>
				<select name="country">
				<option value="pakistan">  PAKISTAN </option>
				<option value="usa">  USA  </option>
				<option value="china">  CHINA  </option>
				</select> </br></br></br>

		<label for="city"> City : </label>
		<input placeholder="CITY" type="text" id="city" name="city" maxlength=14 size=20/></br></br></br>

		<label for="zip"> Zip Code : </label>
		<input placeholder="ZIP CODE" type="text" id="zip" name="zipcode" maxlength=10 size=10/></br></br></br>


		<label for="payment"> Select your Payment Method : </label></br>
		<label for="stu"> CASH <input type="checkbox" name="payment" value="CASH" id="bycash"/></br>
		<label for="teach"> CREDIT CARD <input type="checkbox" name="payment" value="CREDIT" id="bycredit"/>
		</br></br></br>
		<input type="submit" value="Confirm Details" id="detailbutton" href="index.php" onclick="alert('CONFIRM DETAILS')"/>
		</br>

</fieldset>
</form>
</div>

</html>

<!---<script type="text/javascript">
function OnButton1()
{
    document.Form1.action = "mail.php"
    // document.Form1.target = "_blank";    // Open in a new window

    document.Form1.submit();             // Submit the page

    return true;
}

function OnButton2()
{
    document.Form1.action = "response2.php"
    document.Form1.target = "_blank";    // Open in a new window

    document.Form1.submit();             // Submit the page

    return true;
}

</script>

-->


</script>
<script type="text/javascript">
			var firstname = document.forms["vform"]["firstname"];
			var lastname = document.forms["vform"]["lastname"];
			var email = document.forms["vform"]["email"];


			var fname_error = document.getElementById("fname_error");
			var lname_error = document.getElementById("lname_error");
			var email_error = document.getElementById("email_error");

			firstname.addEventListener("blur",fnameVerify,true);
			lastname.addEventListener("blur",lnameVerify,true);
			email.addEventListener("blur",emailVerify,true);


		function Validate(){

				if(firstname.value == ""){
					fname_error.textContent = "First name is required";
					firstname.focus();
					return false;
				}

				if(lastname.value == ""){

					lname_error.textContent = "Last name is required";
					lastname.focus();
					return false;
				}

				if(email.value == ""){

					email_error.textContent = "Email is required";
					email.focus();
					return false;
				}


		}

		function fnameVerify()
		{
				if(firstname.value !=" "){

					fname_error.textContent = "First name is required";
					fname_error.innerHTML="";
					return true;
				}


		}

		function lnameVerify()
		{
			if(lastname.value !=" "){

					lname_error.textContent = "Last name is required";
					lname_error.innerHTML="";
					return true;
				}

		}

		function emailVerify()
		{
			if(email.value !=" "){

					email_error.textContent = "Email is required";
					email_error.innerHTML="";
					return true;
				}

		}


</script>



<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
