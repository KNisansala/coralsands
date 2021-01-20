<?php
include './include.php';

$roomtype = new RoomType();
$roomtypes = $roomtype->getParentRooms();
$features = new RoomFeatures();
$getAll = $features->getAll();
?>


<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <meta name="keywords" content="premium html template, unique premium template, multipurpose template">
        <meta name="description" content="Kallyas is an ultra-premium, responsive theme built for todays websites. Create your website, fast.">
        <title>Accommodation | Coral Sands Hikkaduwa</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" type="text/css">
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/ios/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/dp.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.default.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.transitions.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.green.css" type="text/css" media="all">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">
        <link href="css/responsive_1.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>

        <style>
            @media (max-width: 480px) {
                .room-btn{margin: 20px 5px 20px 0;}
            }
        </style>


    </head>

    <body class="">
        <?php include 'header.php'; ?>
        <?php include 'login-form.php'; ?>
        <!-- Page Wrapper -->
        <div id="page_wrapper">
            <div class="header-section">
                <div class="parallax" style="background-image:url(images/banners/accommodation.jpg); background-repeat:repeat;">
                    <div class="dot-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="parallax-text">
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor hidden-xs hidden-sm">Accommodation</h1>
                                    <h1 class="acco tbk__title montserrat fs-38 lh-32 fw-extrabold tcolor visible-xs visible-sm">Accommodation</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Accommodation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>

                    <section class="hg_section rooms">
                        <?php
                        foreach ($roomtypes as $roomtype) {
                            $date = date("Y-m-d");
                            $subroomtypes = RoomType::getAllSubRoomsByMain($roomtype['id']);
                            ?>
                            <div class="section room-sec">
                                <div class="wrapper-inner">
                                    <div class="widget-rooms-list">
                                        <div class="rooms-item">
                                            <div class="item-photo">
                                                <a href="view_accommodation.php?id=<?php echo $roomtype['id']; ?>" style="background-image: url(images/room-type/thumb/<?php echo $roomtype['main_photo']; ?>)"></a>
                                            </div>
                                            <div class="item-desc">
                                                <h2 class="tbk__title montserrat fs-40 lh-32 fw-extrabold tcolor"><a href="view_accommodation.php?id=<?php echo $roomtype['id']; ?>"><?php echo $roomtype['room_type']; ?></a></h2>
                                                <p><?php echo $roomtype['shortDescription']; ?></p>
                                                <div class="row" style="text-align: center;">
                                                    <a href="view_accommodation.php?id=<?php echo $roomtype['id']; ?>" class="btn-fullcolor room-btn">Read More</a>
                                                    <a href="booking.php?id=<?php echo $roomtype['id']; ?>" class="btn-fullcolor room-btn">Book Now</a>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-inner">

                                                    <?php
                                                    foreach ($subroomtypes as $subroomtype) {
                                                        $price = RoomPrice::getPrice($subroomtype['id'], 1, $date);
                                                        if (!$price) {
                                                            $price = DefaultRoomPrice::getPriceByIds($subroomtype['id'], 1);
                                                        }
                                                        ?>
                                                        <div class="tbk__title montserrat fs-16 lh-15 fw-extrabold tcolor"><a><?php echo $subroomtype['room_type']; ?></a></div>
                                                        <div class="tbk__title montserrat fs-20 lh-15 fw-extrabold tcolor">US$ <?php echo round($price['price']); ?></div>
                                                        <div class="tbk__title montserrat fs-13 lh-15 fw-extrabold tcolor discount"><a>US$ <?php echo (float) $price['price'] + 10; ?></a></div>
                                                        <?php
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </section>
                    <?php include 'footer.php'; ?>
                </div>
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
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>

        <!-- Code provided by Google -->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

        <!-- Flag click handler -->
        <script type="text/javascript">
            $('.toplang-item a').click(function () {

                var lang = $(this).data('lang');
                var $frame = $('.goog-te-menu-frame:first');
                if (!$frame.size()) {
                    alert("Error: Could not find Google translate frame.");
                    return false;
                }
                $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
                return false;
            });
        </script>

    </body>
</html>