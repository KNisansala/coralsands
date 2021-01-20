<?php
require_once './php-header.php';

$settings = new Settings();
$percentage = $settings->getPercentage();
?>
<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" href="../js/plugins/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="../js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css"/>
        <link rel="stylesheet" href="js/data-tables/jquery.dataTables.min.css" type="text/css"/>
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script> 
        <script>

            tinymce.init({
                selector: ".longText",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });

        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Advance Payment
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="prices-manager.php"><i class="fa fa-dashboard"></i> Prices Manager</a></li>
                        <li class="active">Manage Advance Payment</li>
                    </ol>
                </section>

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 content">
                        <div class="nav-tabs-custom">
                            <!--                            <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#eng" data-toggle="tab">English</a></li>
                                                            <li><a href="#ger" data-toggle="tab">Germen</a></li>
                                                            <li><a href="#rus" data-toggle="tab">Russia</a></li>
                                                            <li><a href="#chi" data-toggle="tab">China</a></li>
                                                        </ul>-->
                            <div class="tab-content">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group row">
                                            <label for="date" class="col-sm-3 control-label">Advance Percentage</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="percentage" name="percentage" required="true">
                                                    <?php
                                                    for ($i = 1; $i <= 4; $i++) {
                                                        $p = $i * 25;
                                                        $selected = null;
                                                        if($p == $percentage) {
                                                           $selected = ' selected=""';
                                                        }
                                                       ?>
                                                    <option value="<?php echo $p; ?>"<?php echo $selected; ?>><?php echo $p; ?>%</option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-5">
                                            <span class="btn btn-info pull-right" id="change">Change</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
                <div class="row">
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>

        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="../js/plugins/sweet-alert-2/sweetalert2.min.js"></script>
        <!-- Data table -->
        <script type="text/javascript" src="js/data-tables/jquery.dataTables.min.js"></script>

        <script src="js/manage-percentage.js" type="text/javascript"></script>
    </body>
</html>
