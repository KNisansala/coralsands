<?php
require_once './php-header.php';

$id = $_GET['id'];

$roomfeature = new RoomFeatures();

$images = $roomfeature->getById($id);


$imgOld = $images['image_name'];

if(isset($_POST['edit'])){
    
   $features = new RoomFeatures(); 
   
   $edit = $features->editById($_POST, $_FILES, $imgOld, $id);
   
   if($edit) {
       header('location: add-room-features.php?id='.$images["room-type"]);
   } else {
       header('location: edit-room-features.php?id='.$id .'&message=error');
   }
    
}

$features = new RoomFeatures();

$detail = $features->getById($id);
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

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Rooms Features 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="add-room-type.php">Manage Room Type</a></li>
                        <li class="active">Add Room Features</li>
                    </ol>
                </section>
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 content">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#eng" data-toggle="tab">English</a></li>
                                <li><a href="#ger" data-toggle="tab">Germen</a></li>
                                <li><a href="#rus" data-toggle="tab">Russia</a></li>
                                <li><a href="#chi" data-toggle="tab">China</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="features" class="col-sm-2 control-label">Room Features</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features" id="features" placeholder="Room features" required="TRUE" value="<?php echo $detail['features']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_g" class="col-sm-2 control-label">Room Features</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_g" id="features_g" placeholder="Room features" value="<?php echo $detail['features_g']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_r" class="col-sm-2 control-label">Room Features</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_r" id="features_r" placeholder="Room Features" value="<?php echo $detail['features_r']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_c" class="col-sm-2 control-label">Room Features</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_c" id="features_c" placeholder="Room Features" value="<?php echo $detail['features_c']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" name="edit" id="edit" class="btn btn-info pull-right">Edit Feature</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include './footer.php'; ?>

        <script src="../js/ajax/gallery-type.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/ajax/room.js" type="text/javascript"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
