<?php
require_once './php-header.php';

if(isset($_POST['add'])){
    
    $comment = new GuestComments();
    
    $add = $comment->add($_POST, $_FILES);
}

$commnet = new GuestComments();

$comments = $commnet->getAll();
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
                        Manage Guest Comments 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active"><a href="#">Add Guest COmments</a></li>
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
                                                <input type="file" class="form-control" id="slider-image" name="image" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment" class="col-sm-2 control-label">Comment</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="comment" class="form-control longText" style="" rows="5"></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name_g" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name_g" id="name_g" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country_g" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="country_g" id="country_g" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment_g" class="col-sm-2 control-label">Comment</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="comment_g" class="form-control longText" rows="5"></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name_r" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name_r" id="name_r" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country_r" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="country_r" id="country_r" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment_r" class="col-sm-2 control-label">Comment</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="comment_r" class="form-control longText" rows="5"></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name_c" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name_c" id="name_c" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country_c" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="country_c" id="country_c" class="form-control" placeholder="Enter Country">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment_c" class="col-sm-2 control-label">Comment</label>
                                            <div class="col-sm-8">
                                                <textarea id="longText" name="comment_c" class="form-control longText" rows="5"></textarea> 
                                            </div>
                                        </div>
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
                                            if ($comments) {
                                                ?>
                                                <div class="row" id="comment"> 
                                                    <?php foreach ($comments as $comment) {
                                                        ?>
                                                        <div class="col-md-3 col-sm-6 col-xs-12" style="padding-bottom: 20px;" id="comm_<?php echo $comment['id']; ?>">
                                                            <div class="slider-image center-block">
                                                                <img src="../images/comment/<?php echo $comment['image_name'];?>" class="img-circle center-block"/>
                                                            </div>  
                                                            <div class="image-option text-center"> 
                                                                <p class="maxlinetitle"><?php echo $comment['name']; ?></p>
                                                                <a href="edit-guest-comment.php?id=<?php echo $comment['id']; ?>" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                </a>
                                                                <a href="arrange-guest-comment.php" class="btn btn-primary">
                                                                    <span class="glyphicon glyphicon-sort"></span>
                                                                </a>
                                                                <a id="<?php echo $comment['id']; ?>" class="btn btn-danger delete-comment">
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

        <script src="../js/ajax/activities.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script src="../js/ajax/comment.js" type="text/javascript"></script>
    </body>
</html>
