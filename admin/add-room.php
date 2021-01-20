<?php
require_once './php-header.php';

$id = $_GET['id'];

$type = RoomType::getAllRoomTypeById($id);
$rooms = Room::getAllRoomByRoomTypeId($id);
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
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Rooms 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="add-room-type.php">Manage Room Type</a></li>
                        <li class="active">Add Room Number</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Room</h3>
                                </div>
                                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="col-sm-8">
                                                <input type="hidden" class="form-control" name="room_type" id="room_type" value="<?php echo $id; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="room_num" class="col-sm-2 control-label">Room Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_num" id="room_num" placeholder="Room Number" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="button" name="send" id="send" class="btn btn-info pull-right add-room">Add Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Room</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="panel panel-default"> 
                                        <div class="panel-body" id="room"> 

                                            <?php
                                            if ($rooms) {
                                                ?>

                                                <?php
                                                foreach ($rooms as $room) {
                                                    ?> 
                                                    <div class="row" > 
                                                        <div class="room" id="row_<?php echo $room['id']; ?>">
                                                            <div class="col-md-12"  style="margin-bottom: 20px;">
                                                                <div class="col-md-4">
                                                                    <input type="text" name="roon_num" class="form-control room_num" id="<?php echo $room['id']; ?>" value="<?php echo $room['room_num']; ?>"/>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a id="<?php echo $room['id']; ?>"  title="Delete This Details" class="btn btn-danger delete-room">
                                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                            } else {
                                                echo 'No Result in Database';
                                            }
                                            ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include './footer.php'; ?>

        <div class="control-sidebar-bg"></div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/ajax/room.js" type="text/javascript"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
