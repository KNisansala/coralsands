<?php
require_once './php-header.php';
$roompricesobj = new RoomPrice();
$details = $roompricesobj->getAll();
$DifferentSeasons = $roompricesobj->getAllDistinctSeasons()
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

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Seasons</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="panel panel-default table-view-seasons"> 
                                        <div class="panel-body"> 
                                            <?php
                                            if ($DifferentSeasons) {
                                                ?>
                                                <div class="row">
                                                    <table border="1" width="100%" id="prices-list">
                                                        <thead>
                                                            <tr>
                                                                <th style="display: none;">ID</th>
                                                                <th>Start</th>
                                                                <th>End</th>
                                                                <th>Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th style="display: none;">ID</th>
                                                                <th>Start</th>
                                                                <th>End</th>
                                                                <th>Options</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <?php
                                                            foreach ($DifferentSeasons as $key => $DifferentSeason) {
//                                                                $typename = $roomtypeobj->getAllRoomTypeById($detail['type_id']);
//                                                                $typename = $typename['room_type'];
                                                                ?>

                                                                <tr id="price-row-<?php echo $id; ?>">
                                                                    <td style="display: none;"><?php echo $key; ?></td>

                                                                    <td><input column="start" class="update-price form-control datepicker" type="text"  value="<?php echo $DifferentSeason['start']; ?>"/></td>
                                                                    <td><input column="end" class="update-price form-control datepicker" type="text"  value="<?php echo $DifferentSeason['end']; ?>"/></td>
                                                                    <td class="text-center">
                                                                        <a href="manage-price.php?start=<?php echo $DifferentSeason['start']; ?>&end=<?php echo $DifferentSeason['end']; ?>" title="Change Prices" class="btn btn-primary">
                                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                        </a>
                                                                        <a href="#" start="<?php echo $DifferentSeason['start']; ?>" end="<?php echo $DifferentSeason['end']; ?>" title="Delete Season" class="btn btn-danger delete-season-price">
                                                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                        </a>
        <!--                                                                        <span class="btn btn-instagram"><a href="manage-prices.php"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                                                                        <span class="btn btn-danger delete-price" priceid="<?php echo $key; ?>"><i class="fa fa-trash" aria-hidden="true"></i></span>-->
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php
                                            } else {
                                                echo 'No Results in the Database';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>   
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
        <script src="js/season.js" type="text/javascript"></script>
        <script src="js/manage-prices.js" type="text/javascript"></script>
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
            
              var dateToday = new Date();
            $(function () {

                /* global setting */
                var datepickersOpt = {
                    dateFormat: 'yy-mm-dd',
                    minDate: dateToday
                };

                $(".datepicker").datepicker($.extend(datepickersOpt));

            });
        </script>
    </body>
</html>
