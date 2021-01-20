<?php
require_once './php-header.php';

if (isset($_POST['send'])) {
    $photo = new RoomPhoto();
    $result = $photo->add($_POST, $_FILES);

    if ($result) {

        $status_message = "Add New Room Photo Successfully";
    } else {
        $status_message = "oops! Something Wrong...";
    }
}

$id = $_GET['id'];

$details = RoomPhoto::getRoomPhotosByRoomTypeId($id);
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
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="add-room-type.php">Manage Room Type</a></li>
                        <li class="active">Add New Room Type Photo</li>
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
                                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" id="photo">
                                    <div class="box-body">
                                        <input type="hidden" class="form-control" name="room_type" id="room_type" value="<?php echo $id; ?>" >
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Photo</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="image" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="caption" class="col-sm-2 control-label">Caption</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="submit" name="send" id="send" class="btn btn-info pull-right">Add Photo</button>
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
                                    <h3 class="box-title"></h3>
                                </div>
                                <div class="panel-content">
                                    <div class="panel panel-default"> 
                                        <div class="panel-body"> 
                                            <?php
                                            if ($details) {
                                                ?>
                                                <div class="row"> 
                                                    <?php foreach ($details as $detail) {
                                                        ?>
                                                        <div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 20px;">
                                                            <div class="slider-image">
                                                                <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/room-type/photo/<?php echo $detail['image_name']; ?>"> 
                                                                    <img class="example-image img-responsive" src="../images/room-type/photo/thumb/<?php echo $detail['image_name']; ?>" alt=""/> 
                                                                </a> 
                                                            </div>  
                                                            <div class="image-option"> 
                                                                <p class="maxlinetitle"><?php echo $detail['caption']; ?></p>
                                                                <a href="edit-room-photo.php?id=<?php echo $detail['id']; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                </a>
                                                                <a href="arrange-room-photos.php?type=<?php echo $id; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-sort"></span>
                                                                </a>
                                                                <a id="<?php echo $detail['id']; ?>" class="btn btn-danger delete-room-photo">
                                                                    <span class="glyphicon glyphicon-trash"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            } else {
                                                echo 'No Resulit in Database';
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
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script>
            $('.delete-room-photo').click(function (e) {
                var r = confirm("Are you really want delete this Room Type Photo?....");

                if (r) {
                    window.location.replace("delete-room-type-photo.php?id=" + this.id);
                }
            });
        </script>
    </body>
</html>
