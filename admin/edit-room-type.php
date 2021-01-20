<?php
require_once './php-header.php';

$roombasisobj = new RoomBasis();
$roombasises = $roombasisobj->getAll();

$defaultprice = new DefaultRoomPrice();
$parentrooms = RoomType::getParentRooms();
$id = $_GET['id'];

$roomType = RoomType::getAllRoomTypeById($id);
$imageold = $roomType['main_photo'];

if (isset($_POST['send'])) {
    $room = new RoomType();
    $result = $room->edit($_POST, $_FILES, $imageold, $id);

    if ($result) {
        if ($roomType['is_Child'] <> 0) {
            $prices = $_POST['price'];

            foreach ($prices as $key => $price) {
                $defaultprice->updatePrice($id, $key, $price);
            }
        }

        $status_message = TRUE;
    } else {
        $status_message = FALSE;
    }
}
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
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="add-room-type.php">Manage Room Type</a></li>
                        <li class="active">Edit Room Type</li>
                    </ol>
                </section>

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="content">
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
                                        <?php
                                        if ($status_message === TRUE) {
                                            ?>
                                            <div class="alert alert-success">Room details added successfully!</div>
                                            <?php
                                        } elseif ($status_message === FALSE) {
                                            ?>
                                            <div class="alert alert-danger">Oops! Something Wrong...</div>
                                            <?php
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="room_type" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type" id="room_type" placeholder="Room Type" required="TRUE" value="<?php echo $roomType['room_type']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="main_photo" class="col-sm-2 control-label">Main Photo</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="main_photo">
                                            </div>
                                        </div>
                                        <div id='colparent' class="<?php
                                        if ($roomType['is_Child'] != '0') {
                                            echo 'hidden';
                                        }
                                        ?>">
                                            <div class="form-group">
                                                <label for="num_of_room" class="col-sm-2 control-label">Number Of Rooms</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="num_of_room" id="num_of_room" placeholder="Number Of Rooms" value="<?php echo $roomType['num_of_room']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div id='colchild' class="<?php
                                        if ($roomType['is_Child'] === '0') {
                                            echo 'hidden';
                                        }
                                        ?>">
                                            <div class="form-group">
                                                <label for="parentrooms" class="col-sm-2 control-label">Select Parent Room</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="parentrooms" name="parentrooms">
                                                        <option value="0">-- Please Select --</option>
                                                        <?php
                                                        foreach ($parentrooms as $parentroom) {
                                                            ?>
                                                            <option value="<?php echo $parentroom['id']; ?>" <?php
                                                            if ($roomType['is_Child'] === $parentroom['id']) {
                                                                echo 'selected=true';
                                                            }
                                                            ?>><?php echo $parentroom['room_type']; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="num_of_adults" class="col-sm-2 control-label">Number Of Adults</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="num_of_adults" id="num_of_adults" placeholder="Number Of Adults" value="<?php echo $roomType['num_of_adults']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="num_of_children" class="col-sm-2 control-label">Number Of Children</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="num_of_children" id="num_of_children" placeholder="Number Of Children" value="<?php echo $roomType['num_of_children']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="num_of_max_people" class="col-sm-2 control-label">Number Of Maximum People</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="max_people" id="max_people" placeholder="Number Of Maximum People" value="<?php echo $roomType['max_people']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="children_supplement" class="col-sm-2 control-label">Children Supplement</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="children_supplement" id="children_supplement" placeholder="Children Supplement" value="<?php echo $roomType['children_supplement']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription" id="shortDecription" placeholder="Short Decription" required="TRUE" value="<?php echo $roomType['shortDescription']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description" class="form-control longText" rows="5"><?php echo $roomType['description']; ?> </textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_g" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_g" id="room_type_g" placeholder="Room Type" value="<?php echo $roomType['room_type_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_g" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_g" id="shortDecription_g" placeholder="Short Decription" value="<?php echo $roomType['shortDescription_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_g" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_g" class="form-control longText" rows="5"> <?php echo $roomType['description_g']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_r" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_r" id="room_type_r" placeholder="Room Type" value="<?php echo $roomType['room_type_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_r" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_r" id="shortDecription_r" placeholder="Short Decription" value="<?php echo $roomType['shortDescription_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_r" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_r" class="form-control longText" rows="5"><?php echo $roomType['description_r']; ?> </textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_c" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_c" id="room_type_c" placeholder="Room Type" value="<?php echo $roomType['room_type_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_c" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_c" id="shortDecription_c" placeholder="Short Decription" value="<?php echo $roomType['shortDescription_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_c" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_c" class="form-control longText" rows="5"> <?php echo $roomType['description_c']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" name="send" id="send" class="btn btn-info pull-right">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
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
