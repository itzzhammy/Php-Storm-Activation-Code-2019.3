<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . "/header.php"); ?>

<?php

if(!isset($_SESSION['username'])) {


redirect("../../public");

}


 ?>

        <div id="page-wrapper">

            <div class="container-fluid">




                <?php



                  // HERE $_SERVER['PHP_SELF'] is working only...............................
            //    if($_SERVER['REQUEST_URI'] == "/myEcomSite/public/admin/index.php"  )  {

              if(isset($_GET['main']) || $_SERVER['REQUEST_URI'] == "/myEcomSite/public/admin/index.php" )  {
                    include(TEMPLATE_BACK . "/admin_content.php");

                }



                if(isset($_GET['customers'])){


                    include(TEMPLATE_BACK . "/customer_info.php");


                }

                if(isset($_GET['orders'])){


                    include(TEMPLATE_BACK . "/orders.php");


                }


                      if(isset($_GET['offline_orders'])){


                      include(TEMPLATE_BACK . "/offline_orders.php");


                        }








                if(isset($_GET['categories'])){


                    include(TEMPLATE_BACK . "/categories.php");


                }

                if(isset($_GET['brands'])){


                    include(TEMPLATE_BACK . "/brands.php");


                }




                 if(isset($_GET['products'])){


                    include(TEMPLATE_BACK . "/products.php");


                }


                 if(isset($_GET['add_product'])){


                    include(TEMPLATE_BACK . "/add_product.php");


                }


                 if(isset($_GET['edit_product'])){


                    include(TEMPLATE_BACK . "/edit_product.php");


                }

                if(isset($_GET['users'])){


                    include(TEMPLATE_BACK . "/users.php");


                }


                if(isset($_GET['add_user'])){


                    include(TEMPLATE_BACK . "/add_user.php");


                }


                 if(isset($_GET['edit_user'])){


                    include(TEMPLATE_BACK . "/edit_user.php");


                }


                  if(isset($_GET['reports'])){


                    include(TEMPLATE_BACK . "/reports.php");


                }



                      if(isset($_GET['offline_reports'])){


                          include(TEMPLATE_BACK . "/offline_reports.php");

                                }









                 ?>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include(TEMPLATE_BACK . "/footer.php"); ?>
