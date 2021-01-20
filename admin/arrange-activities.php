<?php
require_once './php-header.php';

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $id) {
        $key = $key + 1;
        $sql = "UPDATE `activities` SET `sort` = '" . $key . "'  WHERE id = '" . $id . "'";
        $db = new DB();
        $db->readQuery($sql);
    }
}

$activities = new Activities();

$actimages = $activities->getAll();
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
                <section class="content-header">
                    <h1>
                        Manage Activities
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="manage-activities.php"> Manage Activities</a></li>
                        <li class="active"><a href="#">Arrange Activities</a></li>
                    </ol>
                </section>
                <section class="content connectedSortable">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Arrange Activities
                                                </div>
                                                <div class="panel-body">
                                                    <form method="post">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <?php if ($actimages) {
                                                                    ?>
                                                                    <div class="col-sm-12">
                                                                        <ul id="sortable">
                                                                            <?php
                                                                            foreach ($actimages as $key => $actimage) {
                                                                                ?>
                                                                                <li class="ui-state-default">
                                                                                    <span class="number-class">(<?php echo $key + 1; ?>)</span>
                                                                                    <img width="300px" height="130" class="example-image img-responsive" src="../images/Things_to_do/<?php echo $actimage["image_name"]; ?>" alt=""/>
                                                                                    <input type="hidden" name="sort[]"  value="<?php echo $actimage["id"]; ?>" class="sort-input"/>
                                                                                </li>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </ul>  
                                                                        <div class="row">
                                                                            <div class="col-sm-12 text-center" style="margin-top: 19px;">
                                                                                <input type="submit" class="btn btn-info" id="btn-submit" value="Save Images" name="arrange">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div> 
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            <?php include './footer.php'; ?>

            <div class="control-sidebar-bg"></div>
        </div>
        <script src="plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script>
            $(function () {
                $("#sortable").sortable();
                $("#sortable").disableSelection();
            });
        </script>
    </body>
</html>
