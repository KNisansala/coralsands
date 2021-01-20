<?php
require_once './php-header.php';

$id = $_GET['id'];

if (isset($_POST['send'])) {

    $features = new RoomFeatures();

    $add = $features->add($_POST, $_FILES);
}

$features = new RoomFeatures();

$allfeatures = $features->getByRoomType($id);
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
                                <input type="hidden" name="room-type" id="room-type" value="<?php echo $id; ?>">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="image" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="features" class="col-sm-2 control-label">Room Feature</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features" id="features" placeholder="Room features" required="TRUE">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_g" class="col-sm-2 control-label">Room Feature</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_g" id="features_g" placeholder="Room features">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_r" class="col-sm-2 control-label">Room Feature</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_r" id="features_r" placeholder="Room features">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="features_c" class="col-sm-2 control-label">Room Feature</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="features_c" id="features_c" placeholder="Room features">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" name="send" id="send" class="btn btn-info pull-right">Add Feature</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
                                            if ($allfeatures) {
                                                ?>
                                                <div class="row" id="room-features"> 
                                                    <?php foreach ($allfeatures as $allfeature) {
                                                        ?>
                                                        <div class="col-md-3 col-sm-6 col-xs-12" style="padding-bottom: 20px;" id="feature_<?php echo $allfeature['id']; ?>">
                                                            <div class="slider-image">
                                                                <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/features/<?php echo $allfeature['image_name']; ?>"> 
                                                                    <img class="example-image img-responsive" src="../images/features/<?php echo $allfeature['image_name']; ?>" alt="" width="100" height="100"/> 
                                                                </a> 
                                                            </div>
                                                            <p class="maxlinetitle"><?php echo $allfeature['features']; ?></p>
                                                            <div class="image-option"> 
                                                                <a href="edit-room-features.php?id=<?php echo $allfeature['id']; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                </a>
                                                                <a href="arrange-room-features.php?id=<?php echo $id; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-sort"></span>
                                                                </a>
                                                                <a id="<?php echo $allfeature['id']; ?>" class="btn btn-danger delete-room-feature"/>
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
            <?php include './footer.php'; ?>
        </div>


        <script src="../js/ajax/gallery-type.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/ajax/room.js" type="text/javascript"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
