<?php
require_once './php-header.php';

$id = $_GET['id'];

$image = RoomPhoto::getRoomPhotoById($id);

$imageold = $image['image_name'];

if (isset($_POST['send'])) {
    $photo = new RoomPhoto();
    $result = $photo->editRoomPhotoById($_POST, $_FILES, $id, $imageold);

    if ($result) {

        $status_message = "Add New Room Photo Successfully";
    } else {
        $status_message = "oops! Something Wrong...";
    }
}

$detail = RoomPhoto::getRoomPhotoById($id);

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
                        Manage Room Type
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Manage Room Type</a></li>
                        <li class="active">Edit Room Type Photo</li>
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
                                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Photo</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="caption" class="col-sm-2 control-label">Caption</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="caption" id="caption" value="<?php echo $detail['caption'];?>" >
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="submit" name="send" id="send" class="btn btn-info pull-right">Update</button>
                                            </div>
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

        <div class="control-sidebar-bg"></div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
