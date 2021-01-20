<?php
require_once './php-header.php';
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

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script> 
        <script>

            tinymce.init({
                selector: "#description",
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
                        Create New Web Invoice
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Create New Web Invoice</li>
                    </ol>
                </section>
                <?php
                if ($level == 1) {
                    ?>
                    <div class="col-md-12 content">
                        <form class="form-horizontal" method="POST">
                            <div class="nav-tabs-custom"> 
                                <div class="tab-content">
                                    <div class="tab-pane active" id="eng">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="date" class="col-sm-2 control-label">Invoice Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control to-clear" id="date" name="date" required="true" value="<?php echo date("Y-m-d"); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">Customer Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control to-clear" id="name" name="name" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Customer Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control to-clear" id="email" name="email" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-8"> 
                                                    <textarea class="form-control to-clear longText" id="description" name="description" rows="15"></textarea> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="amount" class="col-sm-2 control-label">Amount ($)</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control to-clear" id="amount" name="amount" required="true" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="due" class="col-sm-2 control-label">Due Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control to-clear" id="due" name="due" required="true" value="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="form-group">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <span class="btn btn-info pull-right" id="add">Create</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
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

        <script src="js/add-invoice.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function () {
                $("#date").datepicker({
                    dateFormat: "yy-mm-dd"
                });
                $("#due").datepicker({
                    dateFormat: "yy-mm-dd", minDate: 0
                });
            });

        </script>
    </body>
</html>
