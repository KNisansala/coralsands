<?php
require_once './php-header.php';

$id = $_GET['id'];

if(isset($_POST['edit'])){
    
   $galleryType = new GalleryType();
   
   $edit = $galleryType->editById($_POST, $id);
    
}

$galleryType = new GalleryType();

$type = $galleryType->getById($id);

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
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css"/>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Gallery
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="manage-gallery.php">Manage Gallery</a></li>
                        <li class="active">Edit Gallery Type</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Gallery Type</h3>
                                </div>
                                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="typeNmae" class="col-sm-2 control-label">Gallery Type</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="typeNmae" id="typeNmae" placeholder="Type" value="<?php echo $type['type-name'];?>"/>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="submit" name="edit" id="edit" class="btn btn-info pull-right">Update</button>
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

        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="../js/ajax/gallery.js" type="text/javascript"></script>
        <script src="../js/ajax/gallery-type.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
