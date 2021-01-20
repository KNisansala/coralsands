<?php
require_once './php-header.php';

if (isset($_POST['add-slider'])) {
    $slider = new Slider();

    $add = $slider->add($_POST, $_FILES);

    if ($add) {
        echo 'ok';
    } else {
        echo 'no';
    }
}

$slider = new Slider();

$images = $slider->getSlider();
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
                        Manage Slider 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Add New Slider</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="slider-image" name="image" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Image Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="title" id="imagetitle" placeholder="Image Title" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-info pull-right" name="add-slider">Add Slider</button>
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
                                            <div class="row"  id="slider"> 
                                                <?php
                                                foreach ($images as $image) {
                                                    ?>
                                                    <div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 20px;" id="slider_<?php echo $image['id']; ?>">
                                                        <div class="slider-image">
                                                            <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/slider/<?php echo $image['image_name']; ?>" > 
                                                                <img class="example-image img-responsive" src="../images/slider/<?php echo $image['image_name']; ?>" alt=""/> 
                                                            </a> 
                                                        </div>  
                                                        <div class="image-option"> 
                                                            <p class="maxlinetitle"><?php echo $image['title']; ?></p>
                                                            <a href="edit-slider.php?id=<?php echo $image['id']; ?>" class="btn btn-primary">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </a>
                                                            <a href="arrange-slider.php?id=<?php echo $image['id']; ?>" class="btn btn-primary">
                                                                <span class="glyphicon glyphicon-sort"></span>
                                                            </a> 
                                                            <a id="<?php echo $image['id']; ?>" class="btn btn-danger delete-slider-image"/>
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                            </a>
                                                        </div>
                                                    </div> 
                                                    <?php
                                                }
                                                ?>
                                            </div>
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

        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script src="../js/ajax/slider.js" type="text/javascript"></script>
    </body>
</html>
