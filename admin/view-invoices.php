<?php
require_once './php-header.php';

$id = '';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
$details = Invoices::getById($id);
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

        <style type="text/css">
            .refund-box {
                margin: 0px auto;
            }
            .refund-box td {
                vertical-align: top;
                text-align: left;
                font-weight: bold;
                padding-left: 15px;
                padding-bottom: 10px;
            }
        </style>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script> 
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
                <section class="content-header" id="scrol-top">
                    <h1>
                        View Web Invoice - #<?php echo $details['id']; ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">View Invoice</li>
                    </ol>
                </section>
                <form class="form-horizontal" id="update-form" style="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 content">
                        <div class="nav-tabs-custom"> 
                            <div class="tab-content">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="date" class="col-sm-3 control-label">Invoice Date</label>
                                            <div class="col-sm-8">
                                                <label for="date" class="control-label"><?php echo $details['date']; ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Customer Name</label>
                                            <div class="col-sm-8">
                                                <label for="name" class="control-label"><?php echo $details['customer_name']; ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Customer Email</label>
                                            <div class="col-sm-8">
                                                <label for="email" class="control-label"><?php echo $details['email']; ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount" class="col-sm-3 control-label">Amount ($)</label>
                                            <div class="col-sm-8">
                                                <label for="amount" class="control-label"><?php echo number_format($details['amount'],2); ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="payment_date" class="col-sm-3 control-label">Paid Date</label>
                                            <div class="col-sm-8">
                                                <label for="payment_date" class="control-label"><?php echo $details['payment_date']; ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reference" class="col-sm-3 control-label">Reference Number</label>
                                            <div class="col-sm-8">
                                                <label for="reference" class="control-label"><?php echo $details['reference']; ?></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="col-md-5"></div>
                                        <div class="col-md-7">
                                            <a href="./manage-invoices.php"><span class="btn btn-danger pull-left" style="margin-right: 5px;" id="close-form"><i class="fa fa-close"></i></span></a>
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

        <!--<script src="js/invoice.js" type="text/javascript"></script>-->
<!--        <script>
            $(document).ready(function () {
                $('#invoices-list').DataTable({
                    "lengthMenu": [[100, 150, 200, -1], [100, 150, 200, "All"]],
                    "order": [[0, "desc"]]
                });
            });
        </script>-->
        <script type="text/javascript">
            $(function () {

                /* global setting */
                var datepickersOpt = {
                    dateFormat: 'yy-mm-dd',
                    minDate: 0
                };

                $("#date").datepicker($.extend({
                    onSelect: function () {
                        var minDate = $(this).datepicker('getDate');
                        minDate.setDate(minDate.getDate() + 1); //add two days
                        $("#due").datepicker("option", "minDate", minDate);
                    },
                    dateFormat: 'yy-mm-dd'
                }, datepickersOpt));

                $("#due").datepicker({
                    dateFormat: "yy-mm-dd", minDate: 0
                });
                $("#ref-date").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });

        </script>
    </body>
</html>
