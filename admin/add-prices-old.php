<?php
require_once './php-header.php';

$roomtypeobj = new RoomType();
$roomtypes = $roomtypeobj->getAllSubRoomTypes();

$roombasisobj = new RoomBasis();
$roombasises = $roombasisobj->getAll();

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
        <link href="css/prices.css" rel="stylesheet" type="text/css"/>

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
                        Manage Room Prices
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Room Prices</li>
                    </ol>
                </section>

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="row">
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
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <?php
                                                    foreach ($roomtypes as $roomtype) {
                                                        ?>
                                                        <div class="types-head"><?php echo $roomtype['room_type']; ?></div>
                                                        <ul class="basises">
                                                            <?php
                                                            foreach ($roombasises as $roombasis) {
                                                                ?>
                                                                <li class="by-basis" type="<?php echo $roomtype['id']; ?>" basis="<?php echo $roombasis['id']; ?>" typename="<?php echo $roomtype['room_type']; ?>" basisname="<?php echo $roombasis['name']; ?>"><?php echo $roombasis['name']; ?><span class="add-new pull-right">+</span></li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-sm-6 price-add-area">
                                                    <div class="row">
                                                        <div class="box box-info" style="padding: 10px 10px;">
                                                            <div class="form-group">
                                                                <div class="col-xs-12">
                                                                    <h4 style="font-weight: bold;" id="add-head" type-id="" basis-id=""></h4>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="start" class="col-xs-4 control-label">Start Date:</label>
                                                                <div class="col-xs-8">
                                                                    <input type="text" class="form-control clear-inp" id="start" name="start" required="true" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="end" class="col-xs-4 control-label">End Date:</label>
                                                                <div class="col-xs-8">
                                                                    <input type="text" class="form-control clear-inp" id="end" name="end" required="true" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="price" class="col-xs-4 control-label">Price ($):</label>
                                                                <div class="col-xs-8">
                                                                    <input type="text" class="form-control clear-inp" id="price" name="price" required="true" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <span class="btn btn-info pull-right" id="add">Add</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

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

        <script src="js/add-prices.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#start, #end").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });
        </script>
    </body>
</html>
