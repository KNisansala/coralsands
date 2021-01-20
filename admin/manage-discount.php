<?php
require_once './php-header.php';
$Discount = new Discount();
$discount_seasons = $Discount->getAll();
if (isset($_POST['save'])) {
    $Discount_ammount = $Discount->add($_POST['start'], $_POST['end'], $_POST['discount']);
    $discount_seasons = $Discount->getAll();
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
                        Add Price Discount
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Add Price Discount</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <?php
                                    if ($Discount_ammount) {
                                        ?>
                                        <div class = "remove-alrt alert alert-success alert-dismissable">
                                            <a href = "#" class = "close" data-dismiss = "alert" aria-label = "close">Ã—</a>Successfully Added the New Price list!
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="panel-content">
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">Dates</div> 

                                            <div class="panel-body">
                                                <div class="row">  
                                                    <div class="col-md-4">
                                                        Date From
                                                        <input name="start" class="update-price form-control datepicker" type="text" required="true"/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        Date To
                                                        <input class="update-price form-control datepicker" type="text" name="end"/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        Discount
                                                        <input class="update-price form-control" min="0"  name="discount" type="number" placeholder="Enter Discount"/>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="form-group text-center">
                                            <div class="col-md-12">
                                                <input type="submit" name="save" value="Save Discount" class="btn btn-info pull-left"/> 
                                            </div>
                                        </div>
                                    </form>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Discount Seasons</div>
                                        <div class="panel-body">
                                            <div class="panel panel-default table-view-seasons"> 
                                                <div class="panel-body"> 
                                                    <div class="row">

                                                        <table border="1" width="100%" id="prices-list">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Start</th>
                                                                    <th>End</th>
                                                                    <th>Discount</th>
                                                                    <th>Options</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Start</th>
                                                                    <th>End</th>
                                                                    <th>Discount</th>
                                                                    <th>Options</th>
                                                                </tr>
                                                            </tfoot> 
                                                            <tbody>
                                                                <?php
                                                                foreach ($discount_seasons as $key => $discount_season) {
                                                                    if ($key !== 0) {
                                                                        $key++;
                                                                        ?>
                                                                        <tr id="dis-row-<?php echo $discount_season['id']; ?>">
                                                                            <td>#0<?php echo $key; ?></td>
                                                                            <td><input column="start" class="update-discount form-control datepicker" type="text" disid="<?php echo $discount_season['id']; ?>"  value="<?php echo $discount_season['start']; ?>"/></td>
                                                                            <td><input column="end" class="update-discount form-control datepicker" type="text" disid="<?php echo $discount_season['id']; ?>" value="<?php echo $discount_season['end']; ?>"/></td>
                                                                            <td><input column="discount" class="update-discount form-control" type="text" disid="<?php echo $discount_season['id']; ?>" value="<?php echo $discount_season['discount']; ?>"/></td>
                                                                            <td class="text-center"> 
                                                                                <a href="#" class="btn btn-danger delete-discount" dis-id="<?php echo $discount_season['id']; ?>">
                                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                                </a> 
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                    } else {
                                                                        $key++;
                                                                        ?>  
                                                                        <tr id="dis-row-<?php echo $details['id']; ?>">
                                                                            <td>#0<?php echo $key; ?></td>
                                                                            <td><input class="update-discount form-control" type="text" readonly value="Default Date Range"/></td> 
                                                                            <td><input class="update-discount form-control" type="text" readonly value="Default Date Range"/></td> 
                                                                            <td><input column="discount" class="update-discount form-control" type="text" disid="<?php echo $discount_season['id']; ?>" value="<?php echo $discount_season['discount']; ?>"/></td>
                                                                            <td class="text-center"></td>
                                                                        </tr> 
                                                                        <?php
                                                                    }
                                                                }
                                                                ?> 
                                                            </tbody>
                                                        </table>


                                                    </div>
                                                </div>
                                            </div>
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
        <script src="js/manage-discount.js" type="text/javascript"></script>
        <!--        <script src="js/manage-prices.js" type="text/javascript"></script>-->
        <script>
            $(document).ready(function () {
                $('#prices-list').DataTable({
                    "lengthMenu": [[100, 150, 200, -1], [100, 150, 200, "All"]],
                    "order": [[0, "asc"]]
                });
            });
            var dateToday = new Date();
            $(function () {
                $("#start, #end").datepicker({
                    dateFormat: "yy-mm-dd",
                    minDate: dateToday
                });
            });
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