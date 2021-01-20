<?php
require_once './php-header.php';

$roomtypeobj = new RoomType();
$roomtypes = $roomtypeobj->getAllRoomType();

$roombasisobj = new RoomBasis();
$roombasises = $roombasisobj->getAll();

$roompricesobj = new RoomPrice();
$details = $roompricesobj->getAll();

$roomtype = new RoomType();
$allmaintypes = $roomtype->getAllMainRoomType();
$subroomtypes = $roomtype->getAllSubRoomTypes();

if (isset($_POST['save'])) {
    foreach ($_POST["basis"] as $type => $allBasis) {
        foreach ($allBasis as $basis => $price) {
            $RoomPrice = new RoomPrice();
            $addPrice = $RoomPrice->manualAdd($type, $basis, $_POST['start'], $_POST['end'], $price);
        }
    }
}
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
                        Add Room Prices
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Add Room Prices</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"></h3>
                                    </div>
                                    <div class="panel-content">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">Dates</div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    Date From
                                                    <input id="start" name="start" class="update-price form-control" type="text" required="true"/>
                                                </div>
                                                <div class="col-md-6">
                                                    Date To
                                                    <input id="end" class="update-price form-control" id="end" name="end" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        foreach ($allmaintypes as $maintype) {
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading"><?php echo $maintype["room_type"]; ?></div>
                                                <div class="panel-body">
                                                    <?php
                                                    foreach ($subroomtypes as $subroomtype) {
                                                        if ($maintype["id"] == $subroomtype['is_Child']) {
                                                            ?>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading"><?php echo $subroomtype['room_type']; ?></div>
                                                                <div class="panel-body"> 
                                                                    <div class="form-inline" >
                                                                        <?php
                                                                        foreach ($roombasises as $roombasis) {
                                                                            ?> 
                                                                            <div class="form-group"> 
                                                                                <input min="0" type="number" class="form-control add-price-box"  name="basis[<?php echo $subroomtype['id']; ?>][<?php echo $roombasis['id']; ?>]" id="price" placeholder="<?php echo $roombasis['name']; ?>" required="true">
                                                                            </div> 
                                                                            <?php
                                                                        }
                                                                        ?> 
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </div> 
                                            <?php
                                        }
                                        ?>
                                        <div class="form-group text-center">
                                            <div class="col-md-12">
                                                <input type="submit" name="save" value="Save Room Prices" class="btn btn-info pull-left"/> 
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if ($addPrice) {
                                        ?>
                                        <div class = "remove-alrt alert alert-success alert-dismissable">
                                            <a href = "#" class = "close" data-dismiss = "alert" aria-label = "close">×</a>Successfully Added the New Price list!
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div> 
                            </form>
                        </div>
                    </div>
                </section>

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
        <script src="js/add-price.js" type="text/javascript"></script>
<!--        <script src="js/manage-prices.js" type="text/javascript"></script>-->
        <script>
            $(document).ready(function () {
                $('#prices-list').DataTable({
                    "lengthMenu": [[100, 150, 200, -1], [100, 150, 200, "All"]],
                    "order": [[0, "desc"]]
                });
            });
            $(function () {
                $("#start, #end").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });

        </script>
    </body>
</html>