<?php
require_once './php-header.php';

$id = $_GET['id'];

$facilities = new Facilities();

$facimgname = $facilities->getById($id);

$imgOld = $facimgname['image_name'];

if (isset($_POST['edit'])) {

    $edit = $facilities->editById($_POST, $_FILES, $imgOld, $id);
    
    if($edit) {
        header("location: manage-facilities.php?message=success");
    } else {
        header("location: edit-facilities.php?id=" . $id . "&message=error");
    }
}

$facbyid = $facilities->getById($id);
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
        <script src="tinymce/js/tinymce/tinymce.min.js"></script> 
        <script>

            tinymce.init({
                selector: ".longText",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });

        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Facilities 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="manage-facilities.php"> Manage Facilities</a></li>
                        <li class="active"><a href="#">Edit Facilities</a></li>
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
                                            <label for="primary-image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="primary-image" name="primary-image">
                                                <p class="help-block">Automaticity cropping this image 200 X 200 pixels</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title" id="title" class="form-control" value="<?php echo $facbyid['title']; ?>"required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="introduction" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description" class="form-control longText" style="" rows="5"><?php echo $facbyid['description']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="title_g" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title_g" id="title_g" class="form-control" value="<?php echo $facbyid['title_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_g" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_g" class="form-control longText" rows="5"><?php echo $facbyid['description_g']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="title_r" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title_r" id="title_r" class="form-control" value="<?php echo $facbyid['title_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_r" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_r" class="form-control longText" rows="5"><?php echo $facbyid['description_r']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="title_c" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title_c" id="title_c" class="form-control" value="<?php echo $facbyid['title_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_c" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_c" class="form-control longText" rows="5"><?php echo $facbyid['description_c']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-info pull-right" name="edit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
        <?php include './footer.php'; ?>

        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
