<?php  require_once("../resources/config.php") ?>

<?php  include(TEMPLATE_FRONT . DS . "header.php") ?>

	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!--start-contact-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>CONTACT US</h3>
			</div>
			<div class="contact-bottom">
				<div class="col-md-6 contact-left">
				<form method="post"  action="contact.php">	<!--mthod post is added by me-->
					   <?php send_message(); ?>
					<input name="name" id="name" type="text" placeholder="Name" required="">
					<input name="email" id="email"  type="text" placeholder="E-mail" required="">
					<input name="phone" id="phone" type="text" placeholder="Phone" required="">
				</form>
				</div>
				<div class="col-md-6 contact-left">
				<form  method="post"  action="contact.php">
					<textarea name="message" id="message" placeholder="Message"></textarea>
					<input name="submit" type="submit" value="SEND">
				</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-contact-->

	<!--start-map-->
	<div class="map">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10120.556497001287!2d18.76800955!3d50.6431073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710db154211990b%3A0x2d1cfe0737d73ec1!2sRusinowice%2C+Poland!5e0!3m2!1sen!2sin!4v1434621332678" frameborder="0" style="border:0"></iframe> -->


		<iframe src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&coord=24.8693467,67.35183000000006&q=Phase%20-1%2CGulshan-e-Hadeed%2CBin%20Qasim%20Town%20%2CKarachi%2C%20Sindh%20%2CPakistan+(DDB%20Enterprise)&ie=UTF8&t=h&z=14&iwloc=B&output=embed" frameborder="0" style="border:0"></iframe>

		<!-- <iframe width="100%" height="600" src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&coord=24.8693467,67.35183000000006&q=Phase%20-1%2CGulshan-e-Hadeed%2CBin%20Qasim%20Town%20%2CKarachi%2C%20Sindh%20%2CPakistan+(DDB%20Enterprise)&ie=UTF8&t=h&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Embed Google Map</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe> -->

	</div>
	<!--end-map-->

	<?php  include(TEMPLATE_FRONT . DS . "footer.php") ?>
