<?php require_once("../../resources/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="cssLog/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="cssLog/shop-homepage.css" rel="stylesheet">
    <link href="cssLog/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Home</a>
              </div>

          </div>
          <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">
            <form class="" action="" method="post" enctype="multipart/form-data">

                    <?php login_user(); ?>

                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>


    </header>


        </div>


         <div class="container">

             <hr>

             <!-- Footer -->
             <footer>
                 <div class="row">
                     <div class="col-lg-12">
                         <p>Copyright &copy; By  <a href="http://facebook.com" >DDB Enterprise</a> </p>
                     </div>
                 </div>
             </footer>

         </div>
         <!-- /.container -->

         <!-- jQuery -->
         <script src="js/jquery.js"></script>

         <!-- Bootstrap Core JavaScript -->
         <script src="js/bootstrap.min.js"></script>

     </body>

     </html>
