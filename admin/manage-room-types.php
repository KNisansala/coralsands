<?php
require_once './php-header.php';

$roombasisobj = new RoomBasis();
$roombasises = $roombasisobj->getAll();

$defaultprice = new DefaultRoomPrice();

$parentrooms = RoomType::getParentRooms();
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
                        Manage Rooms 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Manage Rooms</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">

                                <div class="box-header with-border">
                                    <h3 class="box-title">Manage Main Room Types</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="panel panel-default"> 
                                        <div class="panel-body"> 
                                            <?php
                                            if ($parentrooms) {
                                                ?>
                                                <div class="row"> 
                                                    <?php
                                                    foreach ($parentrooms as $parentroom) {
                                                        if ($parentroom['is_Child'] === '0') {
                                                            ?>
                                                            <div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 20px;">
                                                                <div class="slider-image">
                                                                    <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/room-type/<?php echo $parentroom['main_photo']; ?>"> 
                                                                        <img class="example-image img-responsive" src="../images/room-type/thumb/<?php echo $parentroom['main_photo']; ?>" alt=""/> 
                                                                    </a> 
                                                                </div>  
                                                                <div class="image-option"> 
                                                                    <p class="maxlinetitle"><?php echo $parentroom['room_type']; ?></p>
                                                                    <a href="add-room.php?id=<?php echo $parentroom['id']; ?>" title="Add Room" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="add-room-photo.php?id=<?php echo $parentroom['id']; ?>" title="Add Room Photo" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="add-room-features.php?id=<?php echo $parentroom['id']; ?>" title="Add Room Features" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="edit-room-type.php?id=<?php echo $parentroom['id']; ?>" title="Edit Room Type" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="arrange-room-type.php?type=main" title="Arrange Room Type" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a id="<?php echo $parentroom['id']; ?>" title="Delete This Room Type" class="btn btn-danger delete-room-type">
                                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            } else {
                                                echo 'No Results in the Database';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>   

                            <div class="box box-info">

                                <div class="box-header with-border">
                                    <h3 class="box-title">Manage Sub Room Types</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="panel panel-default"> 
                                        <div class="panel-body"> 
                                            <?php
                                            foreach ($parentrooms as $parentroom) {
                                                ?>
                                                <h3><?php echo $parentroom['room_type']; ?></h3>
                                                <?php
                                                $subrooms = RoomType::getAllSubRoomsByMain($parentroom['id']);

                                                if ($subrooms) {
                                                    ?>
                                                    <div class="row"> 
                                                        <?php
                                                        foreach ($subrooms as $subroom) {
                                                            ?>
                                                            <div class="col-md-4 col-sm-6 col-xs-12" style="padding-bottom: 20px;">
                                                                <div class="slider-image">
                                                                    <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/room-type/<?php echo $subroom['main_photo']; ?>"> 
                                                                        <img class="example-image img-responsive" src="../images/room-type/thumb/<?php echo $subroom['main_photo']; ?>" alt=""/> 
                                                                    </a> 
                                                                </div>  
                                                                <div class="image-option"> 
                                                                    <p class="maxlinetitle"><?php echo $subroom['room_type']; ?></p>

                                                                    <a href="add-room-photo.php?id=<?php echo $subroom['id']; ?>" title="Add Room Photo" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="edit-room-type.php?id=<?php echo $subroom['id']; ?>" title="Edit Room Type" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a href="arrange-room-type.php?type=sub&mainid=<?php echo $subroom['is_Child']; ?>" title="Arrange Room Type" class="btn btn-primary">
                                                                        <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a id="<?php echo $subroom['id']; ?>" title="Delete This Room Type" class="btn btn-danger delete-room-type">
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
                                                    echo 'No Results in the Database';
                                                }
                                                ?>
                                                <?php
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
            $('.delete-room-type').click(function (e) {
                var r = confirm("Are you really want delete this Room Type?....");

                if (r) {
                    window.location.replace("delete-room-type.php?id=" + this.id);
                }
            });
        </script>
    </body>
</html>
