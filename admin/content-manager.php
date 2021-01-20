<?php
require_once './php-header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coral Sand Hotel - Admin Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <i class="ion ion-android-document fa-4x"></i>
                                    <p>Main Introduction</p>
                                </div>
                                <a href="manage-introduction.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <i class="ion ion-android-list fa-4x"></i>
                                    <p>Manage Main Sections</p>
                                </div>
                                <a href="manage-main-section.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-fuchsia">
                                <div class="inner">
                                    <i class="ion ion-ribbon-b fa-4x"></i>
                                    <p>Manage Offers</p>
                                </div>
                                <a href="manage-offers.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <i class="ion ion-android-list fa-4x"></i>
                                    <p>Manage Guest Comments</p>
                                </div>
                                <a href="manage-guest-comments.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!--                        <div class="col-lg-3 col-xs-6">
                                                    <div class="small-box bg-purple">
                                                        <div class="inner">
                                                            <i class="ion ion-image fa-4x"></i>
                                                            <p>Manage Slider</p>
                                                        </div>
                                                        <a href="manage-slider.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>-->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <i class="ion ion-person fa-4x"></i>
                                    <p>Manage About Us</p>
                                </div>
                                <a href="manage-about-us.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <i class="ion ion-wifi fa-4x"></i>
                                    <p>Manage Facilities</p>
                                </div>
                                <a href="manage-facilities.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <i class="ion ion-android-bicycle fa-4x"></i>
                                    <p>Manage Activities</p>
                                </div>
                                <a href="manage-activities.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-olive">
                                <div class="inner">
                                    <i class="ion ion-android-camera fa-4x"></i>
                                    <p>Manage Gallery</p>
                                </div>
                                <a href="manage-gallery.php" class="small-box-footer">Go <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    </div>
                </section>
            </div>
            <?php include './footer.php'; ?>

            <div class="control-sidebar-bg"></div>
        </div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/knob/jquery.knob.js"></script>
        <script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
