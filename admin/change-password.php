<?php
require_once './php-header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coral Sand Admin Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="../js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css"/>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Change Password
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Change Password</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <form class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="oldpassword" class="col-sm-2 control-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Old Password" required="TRUE">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="newpassword" class="col-sm-2 control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" required="TRUE">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmpassword" class="col-sm-2 control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required="TRUE"><br/>
                                            <input type="hidden" name="userid" id="userid" value="<?php echo $user['id']; ?>"/>
                                            <span id="message" style="padding: 0 0 10px 0"></span> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <button type="button" name="send" id="change-pass" class="btn btn-danger edit-profile">Change</button>
                                        </div>
                                    </div>
                                </form>
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
        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="../js/plugins/sweet-alert-2/sweetalert2.min.js"></script>
        <script src="js/change-password.js" type="text/javascript"></script>
    </body>
</html>
