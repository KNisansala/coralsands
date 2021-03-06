<?php

require_once './php-header.php';



$HELPER = new Helper();

$responses = $HELPER->getAllResponses();

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

    <link rel="stylesheet" href="../js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css" />

    <link rel="stylesheet" href="js/data-tables/jquery.dataTables.min.css" type="text/css" />

    <link href="css/custome.css" rel="stylesheet" type="text/css" />



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

        #payment-response-list {
            width: 100%;
            overflow-x: scroll;
            display: block;
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

                    Manage Invoice/Booking Payment Responses

                </h1>

                <ol class="breadcrumb">

                    <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">Manage Invoice/Booking Payment Responses</li>

                </ol>

            </section>

            <?php

            if ($level == 1) {

            ?>

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

                                            if ($responses) {

                                            ?>

                                                <div class="row">

                                                    <table class="table table-bordered table-hover" width="100%" id="payment-response-list">

                                                        <thead>

                                                            <tr>

                                                                <th>ID</th>

                                                                <th>Date</th>

                                                                <th>Invoice/Booking ID</th>

                                                                <th>Type</th>

                                                                <th>Data</th>

                                                                <th>Request Url</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <?php foreach ($responses as $detail) {

                                                            ?>

                                                                <tr id="inv-row-<?php echo $detail['id']; ?>">

                                                                    <td><?php echo $detail['id']; ?></td>

                                                                    <td id="date-<?php echo $detail['id']; ?>">
                                                                        <?php echo $detail['created_at']; ?>
                                                                    </td>
                                                                    <td id="date-<?php echo $detail['id']; ?>">
                                                                        <?php echo $detail['invoice']; ?>
                                                                    </td>
                                                                    <td id="date-<?php echo $detail['id']; ?>">
                                                                        <?php echo $detail['type']; ?>
                                                                    </td>
                                                                    <td id="date-<?php echo $detail['id']; ?>">
                                                                        <?php
                                                                        $all_data = json_decode($detail['data']);
                                                                        var_dump($all_data);
                                                                        ?>
                                                                    </td>
                                                                    <td id="date-<?php echo $detail['id']; ?>">
                                                                        <?php echo $detail['request_url']; ?>
                                                                    </td>

                                                                </tr>

                                                            <?php

                                                            }

                                                            ?>

                                                        </tbody>

                                                        <tfoot>

                                                            <tr>

                                                                <th>ID</th>

                                                                <th>Date</th>

                                                                <th>Invoice/Booking ID</th>

                                                                <th>Type</th>

                                                                <th>Data</th>

                                                                <th>Request Url</th>


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

                    <p>Amount ($):</p> <input class="form-control" type="text" id="ref-amount" name="ref-amount" value="" />

                    <p>Reason:</p> <input class="form-control" type="text" id="ref-reason" name="ref-reason" value="" />

                    <p>Date:</p> <input class="form-control" type="text" id="ref-date" name="ref-date" value="<?php echo date("Y-m-d"); ?>" />

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
        $(document).ready(function() {

            $('#invoices-list').DataTable({

                "lengthMenu": [
                    [100, 150, 200, -1],
                    [100, 150, 200, "All"]
                ],

                "order": [
                    [0, "desc"]
                ]

            });

        });
    </script>

    <script type="text/javascript">
        $(function() {



            /* global setting */

            var datepickersOpt = {

                dateFormat: 'yy-mm-dd',

                minDate: 0

            };



            $("#date").datepicker($.extend({

                onSelect: function() {

                    var minDate = $(this).datepicker('getDate');

                    minDate.setDate(minDate.getDate() + 1); //add two days

                    $("#due").datepicker("option", "minDate", minDate);

                },

                dateFormat: 'yy-mm-dd'

            }, datepickersOpt));



            $("#due").datepicker({

                dateFormat: "yy-mm-dd",
                minDate: 0

            });

            $("#ref-date").datepicker({

                dateFormat: "yy-mm-dd"

            });

        });
    </script>

</body>

</html>