<?php
require_once './php-header.php';

$about = new AboutUs();
$aboutus = $about->getAboutUs();
$imgOld = $aboutus['image_name'];   

if (isset($_POST['update'])) {

    $about = new AboutUs();
    $update = $about->update($_POST, $_FILES, $imgOld);
}

$details = $about->getAboutUs();
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
                        Manage About Us 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="content-manager.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="#">Update About Us</a></li>
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
                                                <input type="file" class="form-control" id="slider-image" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description" class="form-control longText" style="" rows="5"><?php echo $details['description']; ?></textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vision" class="col-sm-2 control-label">Vision</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="vision" class="form-control" value="<?php echo $details['vision']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mission" class="col-sm-2 control-label">Mission</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="mission" class="form-control" value="<?php echo $details['mission']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="strength" class="col-sm-2 control-label">Strength</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="strength" class="form-control" value="<?php echo $details['strength']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hitory" class="col-sm-2 control-label">History</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="history" class="form-control longText" style="" rows="5"><?php echo $details['history']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="description_g" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_g" class="form-control longText" rows="5"><?php echo $details['description_g']; ?> </textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vision_g" class="col-sm-2 control-label">Vision</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="vision_g" class="form-control" value="<?php echo $details['vision_g']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mission_g" class="col-sm-2 control-label">Mission</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="mission_g" class="form-control" value="<?php echo $details['mission_g']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="strength_g" class="col-sm-2 control-label">Strength</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="strength_g" class="form-control" value="<?php echo $details['strength_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hitory_g" class="col-sm-2 control-label">History</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="history_g" class="form-control longText" style="" rows="5"><?php echo $details['history_g']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="description_r" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_r" class="form-control longText" rows="5"><?php echo $details['description_r']; ?> </textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vision_r" class="col-sm-2 control-label">Vision</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="vision_r" class="form-control" value="<?php echo $details['vision_r']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mission_r" class="col-sm-2 control-label">Mission</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="mission_r" class="form-control" value="<?php echo $details['mission_r']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="strength_r" class="col-sm-2 control-label">Strength</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="strength_r" class="form-control" value="<?php echo $details['strength_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hitory_r" class="col-sm-2 control-label">History</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="history_r" class="form-control longText" style="" rows="5"><?php echo $details['history_r']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="description_c" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="description_c" class="form-control longText" rows="5"><?php echo $details['description_c']; ?> </textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vision_c" class="col-sm-2 control-label">Vision</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="vision_c" class="form-control" value="<?php echo $details['vision_c']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mission_c" class="col-sm-2 control-label">Mission</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="mission_c" class="form-control" value="<?php echo $details['mission_c']; ?>"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="strength_c" class="col-sm-2 control-label">Strength</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="strength_c" class="form-control" value="<?php echo $details['strength_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hitory_c" class="col-sm-2 control-label">History</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="history_c" class="form-control longText" style="" rows="5"><?php echo $details['history_c']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-info pull-right" name="update">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
        <?php include './footer.php'; ?>

        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
