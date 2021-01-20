<?php
include './include.php';

//$id = $_GET['id'];
//
//$roomtype = new RoomType();
//
//$details = $roomtype->getAllRoomTypeById($id);
//
//$roomphoto = new RoomPhoto();
//
//$roomphotos = $roomphoto->getRoomPhotosByRoomTypeId($id);
//
//$features = new RoomFeatures();
//$id = $_GET['id'];
//
//$room = new Room();
//$roomtype = new RoomType($id);

$checkin = "";
$checkout = "";
$adult = "";
$children = "";
$roomId = "";

if (isset($_POST['checkin'])) {
    $checkin = $_POST['checkin'];
}

if (isset($_POST['checkout'])) {
    $checkout = $_POST['checkout'];
}
if (isset($_POST['adults'])) {
    $adult = $_POST['adults'];
}

if (isset($_POST['childrens'])) {
    $children = $_POST['childrens'];
}
if (isset($_POST['roomId'])) {
    $roomId = $_POST['roomId'];
}
?>
<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grandium - Responsive Hotel Template</title>
        <meta name="description" content="Responsive Hotel Template">
        <meta name="author" content="Loco Theme - locotheme.com">
        <meta name="keywords" content="hotel, hostel, motel, guesthouse, booking, accommodation, inn, spa, resort, travel, holiday, tourism, vacation, bootstrap, responsive">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="assets/img/apple-touch-icon-167x167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png">

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font.awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/magnific.popup.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">    
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">   

    </head>
    <body>

        <div class="site-loading">
            <img src="assets/img/loading.gif" alt="Loading">
        </div>

        <div class="site-backtop" title="Back to top">
            <i class="fa fa-angle-up"></i>
        </div>

        <?php include './header.php'; ?>

        <div class="site-main">
            <div class="section">
                <div class="widget-page-title">
                    <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
                    <div class="wrapper-inner">
                        <h5>GET IN TOUCH WITH US</h5>
                        <h1>Booking Page</h1>
                        <p></p>
                        <div class="widget-breadcrumb">
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">PAGES</a></li>
                                <li>BOOKING PAGE</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section cpadding_top">
                <div class="wrapper-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-form">
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Name</label>
                                        <span id="star">*</span>
                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                        <span id="spanFullName" ></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Email</label>
                                        <span id="star">*</span>
                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                        <span id="spanEmail" ></span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Country</label>
                                        <span id="star">*</span>
                                        <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                        <span id="spanCountry" ></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Contact Numbers</label>
                                        <span id="star">*</span>
                                        <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                        <span id="spanPhone" ></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group ">
                                            <label >Arrival Date</label>
                                            <span id="star">*</span>
                                            <input type="text" name="checkin" id="checkin" class="form-control input-validater datepicker" value="<?php echo $checkin; ?>">
                                            <span id="spanFdate"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label >Departure Date</label>
                                            <span id="star">*</span>
                                            <input type="text" name="checkout" id="checkout" class="form-control input-validater datepicker" value="<?php echo $checkout; ?>">
                                            <span id="spanTdate"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="">Night</label>
                                            <span id="star">*</span>
                                            <select name="txtNight" id="txtNight" class="form-control third form-control input-validater">
                                                <option selected="selected" value="">0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <span id="spanNight"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label >Rooms</label>
                                            <span id="star">*</span>
                                            <select name="txtRooms" id="txtRooms" class="form-control third form-control input-validater">
                                                <option selected="selected" value=""></option>
                                                <option>Standard Double Room</option>
                                                <option>Deluxe Double Room</option>
                                            </select>
                                            <span id="spanRooms"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">                                  
                                    <div class="col-xs-6">
                                        <div class="form-group ">
                                            <label>Adults</label>
                                            <span id="star">*</span>
                                            <input type="number" name="adults" id="adults" class="form-control" value="<?php echo $adult; ?>">
                                            <span id="spanAdult"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group ">
                                            <label >Children</label>
                                            <span id="star">*</span>
                                            <input type="number" name="childrens" id="childrens" class="form-control" value="<?php echo $children; ?>">
                                            <span id="spanChildren"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <span id="star">*</span>
                                    <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here"></textarea>
                                    <span id="spanMessage" ></span>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 row">
                                        <div class="col-sm-6">
                                            <label for="comment">Security Code:</label>
                                            <span id="star">*</span> 
                                            <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                            <span id="capspan" ></span> 
                                        </div>
                                        <div class="col-sm-6"> 
                                            <?php include("./booking-form/captchacode-widget.php"); ?> 
                                        </div>  
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-sm-4">
                                            <div class="div-check" >
                                                <img src="booking-form/img/checking.gif" id="checking"/>
                                            </div>
                                        </div>

                                        <div class="col-sm-8 text-right">
                                            <button type="submit" id="btnSubmit" class="btn btn-danger">SEND YOUR MESSAGE</button>
                                        </div> 
                                    </div>
                                </div> 
                                <div id="dismessage" align="center"></div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <?php include './footer.php'; ?>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.fitvids.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/magnific.popup.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/booking.form.js"></script>
        <script src="assets/js/contact.form.js"></script>
        <script src="booking-form/scripts.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script src="assets/js/gmap3.min.js"></script>

        <script src="assets/js/custom.js"></script>
    </body>
</html>