<!--start-footer-->
<div class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="col-md-3 footer-left">
        <h3>ABOUT US</h3>
        <ul>
          <li><a href="#">Who We Are</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="#">Team</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-left">
        <h3>YOUR ACCOUNT</h3>
        <ul>
          <li><a href="account.php">Your Account</a></li>
          <li><a href="#">Personal Information</a></li>
          <li><a href="contact.php">Addresses</a></li>
          <li><a href="#">Discount</a></li>
          <li><a href="#">Track your order</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-left">
        <h3>CUSTOMER SERVICES</h3>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Cancellation</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Bulk Orders</a></li>
          <li><a href="#">Buying Guides</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-left">
        <h3>CATEGORIES</h3>
        <ul>
        	 <?php get_SUB_brands() ?>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!--end-footer-->
<!--end-footer-text-->
<div class="footer-text">
  <div class="container">
    <div class="footer-main">
      <p class="footer-class" style="color:#00adee">© 2018 CopyRight All Rights Reserved | Design by  <a href="http://facebook.com" target="_blank" style="color:red">DDB Enterprise</a> </p>
    </div>
  </div>
  <script type="text/javascript">
                $(document).ready(function() {
                  /*
                  var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                  };
                  */

                  $().UItoTop({ easingType: 'easeOutQuart' });

                });
              </script>
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--end-footer-text-->
</body>
</html>
