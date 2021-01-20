<?php
require_once './php-header.php';

$invoices = new Invoices();
$details = $invoices->getAll();
$level = $user['level'];
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
                        Manage Web Invoices
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Web Invoices</li>
                    </ol>
                </section>
                <?php
                if ($level == 1) {
                    ?>
                    <form class="form-horizontal" id="update-form" style="display: none;" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 content">
                            <div class="nav-tabs-custom"> 
                                <div class="tab-content">
                                    <div class="tab-pane active" id="eng">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="date" class="col-sm-2 control-label">Invoice Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="date" name="date" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">Customer Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="name" name="name" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Customer Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="email" name="email" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control longText" id="description" name="description" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="amount" class="col-sm-2 control-label">Amount ($)</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="amount" name="amount" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="due" class="col-sm-2 control-label">Due Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="due" name="due" required="true" value="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <div class="form-group">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <span class="btn btn-info pull-right" id="update" inv-id="">Update</span><span class="btn btn-danger pull-right" style="margin-right: 5px;" id="close-form"><i class="fa fa-close"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 

                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"></h3>
                                    </div>
                                    <div class="panel-content">
                                        <div class="panel panel-default"> 
                                            <div class="panel-body"> 
                                                <?php
                                                if ($details) {
                                                    ?>
                                                    <div class="row">
                                                        <table class="table table-bordered table-hover" width="100%" id="invoices-list">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Date</th>
                                                                    <th>Customer</th>
                                                                    <th>Email</th>
                                                                    <th>Amount</th>
                                                                    <th>Due</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($details as $detail) {
                                                                    ?>

                                                                    <tr id="inv-row-<?php echo $detail['id']; ?>">
                                                                        <td><?php echo $detail['id']; ?></td>
                                                                        <td id="date-<?php echo $detail['id']; ?>"><?php echo $detail['date']; ?></td>
                                                                        <td id="name-<?php echo $detail['id']; ?>"><?php echo $detail['customer_name']; ?></td>
                                                                        <td>
                                                                            <span id="email-<?php echo $detail['id']; ?>"><?php echo $detail['email']; ?></span> <?php
                                                                            if ($detail['status'] == 0) {
                                                                                ?><span class="btn btn-primary pull-right resend-mail" inv-id="<?php echo $detail['id']; ?>"><i class="fa fa-send" aria-hidden="true"></i></span>
                                                                                <?php
                                                                            }
                                                                            ?> 
                                                                        </td>
                                                                        <td style="text-align: right;" id="amount-<?php echo $detail['id']; ?>"><?php echo $detail['amount']; ?></td>
                                                                        <td id="due-<?php echo $detail['id']; ?>"><?php echo $detail['due_date']; ?></td>
                                                                        <td class="status-class" id="status-<?php echo $detail['id']; ?>"><?php
                                                                            if ($detail['status'] == 0) {
                                                                                if ($detail['due_date'] < date('Y-m-d')) {
                                                                                    echo '<span class="text-danger">Expired</span>';
                                                                                } else {
                                                                                    echo '<span class="text-danger">Unpaid</span>';
                                                                                }
                                                                                echo ' <span class="btn btn-danger pull-right delete-inv" inv-id="' . $detail["id"] . '"><i class="fa fa-trash" aria-hidden="true"></i></span><span class="btn btn-info pull-right update-inv" inv-id="' . $detail["id"] . '" style="margin-right: 2px;"><i class="fa fa-pencil" aria-hidden="true"></i></span>';
                                                                            } elseif ($detail['status'] == 1) {
                                                                                echo '<span class="text-success">Paid</span> <span class="btn btn-warning pull-right refund-inv" inv-id="' . $detail["id"] . '"><i class="fa fa-mail-forward" aria-hidden="true"></i></span><span class="btn btn-info pull-right paid-view" inv-id="' . $detail["id"] . '" style="margin-right: 2px;"><i class="fa fa-info-circle" aria-hidden="true"></i></span>';
                                                                            } else {
                                                                                echo '<span class="text-warning">Refund</span> <span class="btn btn-danger pull-right delete-inv" inv-id="' . $detail["id"] . '"><i class="fa fa-trash" aria-hidden="true"></i></span><span class="btn btn-info pull-right refund-view" inv-id="' . $detail["id"] . '" style="margin-right: 2px;"><i class="fa fa-info-circle" aria-hidden="true"></i></span>';
                                                                            }
                                                                            ?></td>
                                                                    </tr>

                                                                    <?php
                                                                }
                                                                ?>
                                                            </tbody> 
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Date</th>
                                                                    <th>Customer</th>
                                                                    <th>Email</th>
                                                                    <th>Amount</th>
                                                                    <th>Due</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </tfoot>
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
                    <?php
                } else {
                    ?>

                    <div class="box box-info">
                        <div class="panel panel-warning" style="margin: 30px;">
                            <div class="panel-heading">Access denied !</div>
                            <div class="panel-body"> You are not authorized to access this page</div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content" style="padding: 20px 35px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><b>Invoice Refund Confirmation</b></h4>
                    </div>
                    <div class="modal-body">
                        <p>Amount ($):</p> <input class="form-control" type="text" id="ref-amount" name="ref-amount" value=""/>
                        <p>Reason:</p> <input class="form-control" type="text" id="ref-reason" name="ref-reason" value=""/>
                        <p>Date:</p> <input class="form-control" type="text" id="ref-date" name="ref-date" value="<?php echo date("Y-m-d"); ?>"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="do-refund" class="btn btn-primary">Save changes</button>
                    </div>
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

        <script src="js/invoice.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('#invoices-list').DataTable({
                    "lengthMenu": [[100, 150, 200, -1], [100, 150, 200, "All"]],
                    "order": [[0, "desc"]]
                });
            });
        </script>
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
