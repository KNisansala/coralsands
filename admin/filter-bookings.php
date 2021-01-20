<?php
require_once './php-header.php';
$date = date("Y-m-d");
$datein = $_GET['date1'];
$dateout = $_GET['date2'];

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
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Filter Bookings
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="booking-manager.php"><i class="fa fa-list"></i> Booking Manager</a></li>
                        <li>Filter Bookings</li>
                    </ol>
                </section>
                <section class="content connectedSortable">
                    <div class="filter">
                        <div class="row">
                            <div class="col-xs-4 col-lg-offset-2 text-center">

                                <div class="home-box box-bg-green">
                                    <div class="home-box-layer">
                                        <div class="box-circ">
                                            <span class="home-box-icon box-bg-green"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                        </div>
                                        <?php
                                        $todayCheckIns = Booking::countFilterBookings('check_in', $date);

                                        echo $todayCheckIns;
                                        ?> 
                                    </div>
                                </div>
                                <span class="home-box-title">Today Arrivals</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="home-box box-bg-red">
                                    <div class="home-box-layer">
                                        <div class="box-circ">
                                            <span class="home-box-icon box-bg-red"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                        </div>
                                        <?php
                                        $todayCheckOuts = Booking::countFilterBookings('check_out', $date);

                                        echo $todayCheckOuts;
                                        ?> 
                                    </div>
                                </div>
                                <span class="home-box-title">Today Departures</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12 content">
                                    <div class="col-md-3 content">
                                        <div class="form-group">
                                            <label for="date1" class="col-sm-12 control-label">From</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="date1" required="TRUE" value="<?php if($datein) { echo $datein; } else { echo $date; } ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 content">
                                        <div class="form-group">
                                            <label for="date2" class="col-sm-12 control-label">To</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="date2" placeholder="Room Name" required="TRUE" value="<?php if($dateout) { echo $dateout; } else { echo $date; } ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 content">
                                        <div class="form-group">
                                            <label for="type" class="col-sm-12 control-label">Type</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" id="type" name="type">
                                                    <option value="0">Arrival</option>
                                                    <option value="1">Departure</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 content">
                                        <div class="form-group">
                                            <label for="bookings" class="col-sm-12 control-label">No Of Arrivals / Departures</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" name="bookings" id="bookings" placeholder="0" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="find" id="find" class="btn btn-info pull-right">Find</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filtertable">
                        <div class="filter">
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
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody class="tablebody">

                                    </tbody>


                                    <tfoot>
                                        <tr>
                                            <th>ID</th> 
                                            <th>Date</th>
                                            <th>Customer Name</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <?php include './footer.php'; ?>

            <div class="control-sidebar-bg"></div>
        </div>
        <script src="plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script src="js/filter-bookings.js" type="text/javascript"></script>

        <script>
            $(function () {
                $("#sortable").sortable();
                $("#sortable").disableSelection();
            });
        </script>
        <script>
            $(function () {
                $("#date1").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
                $("#date2").datepicker({
                    dateFormat: 'yy-mm-dd'
                });

            });
        </script>
    </body>
</html>
