<?php
require_once './php-header.php';

$id = $_GET['id'];

if (isset($_POST['add'])) {
    $actPhoto = new ActivityPhotos();

    $add = $actPhoto->add($_POST, $_FILES);
}

$activities =  new ActivityPhotos();

$activityPhotos = $activities->getAllByActivityId($id);

?>
<!DOCTYPE html>
<html lang="en">
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
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css"/>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Activities 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active"><a href="manage-activities.php">Manage Activities</a></li>
                        <li><a href="add-activity-photo.php">Add Activity photo</a></li>
                    </ol>
                </section>

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 content">
                        <div class="nav-tabs-custom">
                            <div class="tab-content">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="slider-image" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="introduction" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Image Title"/>
                                            </div>
                                        </div>
                                        <input type="hidden" name="activity_id" id="actity_id" value="<?php echo $id; ?>"/>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-info pull-right" name="add">Add</button>
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
                                            if ($activityPhotos) {
                                                ?>
                                                <div class="row" id="activitiy-photo"> 
                                                    <?php foreach ($activityPhotos as $activityPhoto) {
                                                        ?>
                                                        <div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 20px;" id="actpho_<?php echo $activityPhoto['id']; ?>">
                                                            <div class="slider-image">
                                                                <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/Things_to_do/photos/<?php echo $activityPhoto['image_name'];?>"> 
                                                                    <img class="example-image img-responsive" src="../images/Things_to_do/photos/<?php echo $activityPhoto['image_name']; ?>" alt=""/> 
                                                                </a> 
                                                            </div>  
                                                            <div class="image-option"> 
                                                                <p><?php echo $activityPhoto['title']; ?></p>
                                                                <a href="edit-activity-photo.php?id=<?php echo $activityPhoto['id']; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                </a>
                                                                <a href="arrange-activity-photo.php?id=<?php echo $id; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                                                                </a>
                                                                <a id="<?php echo $activityPhoto['id']; ?>" title="Delete This Facilities" class="btn btn-danger delete-activity-photo">
                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
        
        <script src="../js/ajax/activity-photo.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
