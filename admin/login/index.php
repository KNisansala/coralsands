<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../../include.php';
User::forceLogged();
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login | Coral Sands Hotel (pvt) ltd.</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="../../js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../../images/index.ico">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="../../images/logo/logo.png" style="width: 150px;"/>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Please login to manage your website.</p> 
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required="TRUE">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="TRUE">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck"> 
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="button" id="signin" name="login" class="btn btn-primary btn-block btn-flat login">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../plugins/iCheck/icheck.min.js"></script> 
        
        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="../../js/plugins/sweet-alert-2/sweetalert2.min.js"></script>

        <script src="../js/login.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        </script>
    </body>
</html>
