<?php
require_once './php-header.php';

$roomtypes = RoomType::getAllRoomType();


$year = $_GET['year'];
$month = $_GET['month'];
$roomtype = $_GET['roomtype'];

$thisType = RoomType::getAllRoomTypeById($roomtype);

$strmonth = date("F", mktime(0, 0, 0, $month, 10));
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
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css"/>
        <link href="css/calendar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Rooms Availability - <small><?php echo $thisType['room_type']; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="rooms-availability.php">Manage Rooms Availability</a></li>
                        <li class="active"><?php echo $thisType['room_type']; ?></li>
                    </ol>
                </section>

                <div class="container">
                    <div class="calandar">
                        <div class="row">
                            <div class="col-md-1">
                                <button class="arrows" id="left-arrow"><i class="fa fa-angle-left" ></i></button>
                            </div>
                            <div class="col-md-10">
                                <h2><?php echo $strmonth . " " . $year; ?></h2>
                                <?php
                                $HELPER = new Helper();
                                $result = $HELPER->draw_calendar($month, $year, $roomtype);

                                echo $result;
                                ?>
                            </div>
                            <div class="col-md-1">
                                <button class="arrows" id="right-arrow"><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <?php include './footer.php'; ?>

        <div class="control-sidebar-bg"></div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="../js/plugins/sweet-alert-2/sweetalert2.min.js"></script>

        <script src="js/booking.js" type="text/javascript"></script>

    </body>
</html>