<?php
require_once './php-header.php';

$year = $_GET['year'];
$month = $_GET['month'];
$roomtype = $_GET['roomtype'];

$strmonth = date("F", mktime(0, 0, 0, $month, 10));
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <meta name="keywords" content="premium html template, unique premium template, multipurpose template">
        <meta name="description" content="Kallyas is an ultra-premium, responsive theme built for todays websites. Create your website, fast.">
        <title>Coral Sands Hikkaduwa</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" type="text/css">
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/ios/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/dp.css" type="text/css" media="all">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One">
        <!--<link rel="stylesheet" href="css/custom.css" type="text/css" media="all">-->
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.default.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.transitions.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.green.css" type="text/css" media="all">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">
        <link href="css/calendar.css" rel="stylesheet" type="text/css"/>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <button class="arrows" id="left-arrow"><i class="fa fa-angle-left" ></i></button>
                </div>
                <div class="col-md-10">


                    <h2><?php echo $strmonth . " " . $year; ?></h2>
                    <?php
                    $HELPER = new Helper();
                    $result = $HELPER->draw_calendar($month, $year, $roomtype);

                    echo $result;
                    ?>
                </div>
                <div class="col-md-1">
                    <button class="arrows" id="right-arrow"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <div class="row">

            </div>


        </div>

        <!-- ToTop trigger -->
        <a href="#" id="totop">TOP</a>
        <!--/ ToTop trigger -->

        <!-- JS FILES/ These should be loaded in every page -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/kl-plugins.js"></script>

        <!-- JS FILES/ Loaded on this page -->
        <!-- Requried js script for Slideshow Scroll effect -->
        <script type="text/javascript" src="js/plugins/scrollme/jquery.scrollme.js"></script>

        <!-- Required js script for iOS Slider -->
        <script type="text/javascript" src="js/plugins/_sliders/ios/jquery.iosslider.min.js"></script>

        <!-- Required js trigger for iOS Slider -->
        <script type="text/javascript" src="js/trigger/slider/ios/kl-ios-slider.js"></script>

        <!-- CarouFredSel - Required js script for Screenshot box Partners Carousel -->
        <script type="text/javascript" src="js/plugins/_sliders/caroufredsel/jquery.carouFredSel-packed.js"></script>

        <!-- Required js trigger for Screenshot Box Carousel -->
        <script type="text/javascript" src="js/trigger/kl-screenshot-box.js"></script>

        <!-- Required js trigger for Partners Carousel -->
        <script type="text/javascript" src="js/trigger/kl-partners-carousel.js"></script>	

        <!-- Custom Kallyas JS codes -->
        <script type="text/javascript" src="js/kl-scripts.js"></script>

        <!-- Demo panel -->
        <script type="text/javascript" src="js/dp.js"></script>
        <script src="js/booking.js" type="text/javascript"></script>
    </body>

</html>
