<?php
require_once './php-header.php';

$BOOKING = new Booking(NULL);
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
        <link href="css/calendar.css" rel="stylesheet" type="text/css"/>
        <link href="../js/plugins/sweet-alert-2/sweetalert2.min.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Bookings
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="booking-manager.php"><i class="fa fa-list"></i> Booking Manager</a></li>
                        <li>Manage Bookings</li>
                    </ol>
                </section>

                <div class="container">
                    <div class="datatable1">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width:5%">ID</th> 
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Total Price</th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($BOOKING->getPaidBooking() as $key => $booking) {
                                    ?>
                                    <tr id="booking-id-<?php echo $booking['id']; ?>">
                                        <td style="width:10%"><?php echo $booking['id']; ?></td> 
                                        <td style="width:10%"><?php echo $booking['date']; ?></td>
                                        <td style="width:30%"><?php echo $booking['name']; ?></td>
                                        <td style="width:10%"><?php echo $booking['check_in']; ?></td>
                                        <td style="width:10%"><?php echo $booking['check_out']; ?></td>
                                        <td style="width:10%"><?php echo $booking['total_price']; ?></td>
                                        <td style="width:10%"> 
                                            <a class="btn btn-sm btn-default" href="view-booking.php?id=<?php echo $booking['id']; ?>" id="<?php echo $booking['id']; ?>" title="View Booking"><i class="glyphicon glyphicon-eye-open"></i></a> | 
                                            <a class="cancel-booking btn btn-sm btn-danger" id="<?php echo $booking['id']; ?>" checkin="<?php echo $booking['check_in']; ?>" checkout="<?php echo $booking['check_out']; ?>" title="Cancel Booking"><i class="glyphicon glyphicon-remove-circle"></i></a>
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
                                    <th>Customer Name</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Total Price</th>
                                    <th>Option</th>
                                </tr>
                            </tfoot>

                        </table>
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
        <script src="js/booking.js" type="text/javascript"></script>
        <script src="js/script-cancel.js" type="text/javascript"></script>

        <script src="plugins/jquery-datatable/jquery.dataTables.js" type="text/javascript"></script> 
        <script src="../js/plugins/sweet-alert-2/sweetalert2.min.js" type="text/javascript"></script>
    </body>
</html>