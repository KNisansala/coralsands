<?php
include './include.php';

$id = $_GET['id'];

$roomtype = new RoomType();

$details = $roomtype->getAllRoomTypeById($id);

$subroomtypes = $roomtype->getAllSubRoomsByMain($id);

$roomphoto = new RoomPhoto();

$roomphotos = $roomphoto->getRoomPhotosByRoomTypeId($id);
$roomtype = new RoomType();

$features = new RoomFeatures();

$date = date("Y-m-d");
$price = RoomPrice::getPrice($id, 2, $date);
if (!$price) {
    $price = DefaultRoomPrice::getPriceByIds($id, 2);
}
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
        <!--<link rel="stylesheet" href="css/fonts/font.awesome.min.css" type="text/css"/>-->
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
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>

        <link rel="stylesheet" href="css/sliders/magnific.popup.css" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>


    </head>

    <body class="">
        <?php include 'header.php'; ?>
        <?php include 'login-form.php'; ?>

        <div id="page_wrapper">
            <div class="header-section">
                <div class="parallax" style="background-image:url(images/banners/accommodation.jpg); background-repeat:repeat;">
                    <div class="dot-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="parallax-text">
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor"><?php echo $details['room_type']; ?></h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="accommodation.php">Accommodation</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor"><?php echo $details['room_type']; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>

                    <section class="hg_section sec1">
                        <div class="wi-rooms wrapper-inner">
                            <div class="widget-rooms-detail">
                                <div class="widget-inner wi-p60">

                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="room-slider">
                                                <!--<div class="room-price">$ <?php echo $price['price']; ?> <small>PER NIGHT</small></div>-->
                                                <div  class="owl-carousel owl-theme slider-accommodation">
                                                    <?php
                                                    foreach ($roomphotos as $roomphoto) {
                                                        ?>
                                                        <div>
                                                            <a href="images/room-type/photo/<?php echo $roomphoto['image_name']; ?>"  title="Single Room" class="popup-gallery"><img src="images/room-type/photo/<?php echo $roomphoto['image_name']; ?>" alt="Owl Image"></a>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="room-features">
                                                <h2 class="tbk__title montserrat fs-44 lh-44 fw-bold tcolor">Room Features</h2>
                                                <?php
                                                foreach ($features->getByRoomType($id) as $feature) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3">
                                                            <img src="images/features/<?php echo $feature['image_name']; ?>" alt="" class="img-circle facility-img"/>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-9 room-features-list">
                                                            <h3 class="tbk__title montserrat fs-25 lh-44 fw-extrabold"><a><?php echo $feature['features']; ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-9 col-sm-9">
                                            <div class="room-desc">
                                                <h2 class="tbk__title montserrat fs-35 lh-44 fw-extrabold tcolor"><?php echo $details['room_type']; ?></h2>
                                                <?php echo $details['description']; ?>
                                            </div>
                                            <div class="row">
                                                <!--<div class="col-lg-12">-->
                                                <?php
                                                foreach ($subroomtypes as $subroomtype) {
                                                    $adultCount = (int) $subroomtype['num_of_adults'];
                                                    $childCount = (int) $subroomtype['num_of_children'];
                                                    $adultIcons = '';
                                                    $childIcons = '';

                                                    for ($i = 1; $i <= $adultCount; $i++) {
                                                        $adultIcons .= '<i class="fa fa-male fa-2x" aria-hidden="true"></i>';
                                                    }
                                                    for ($i = 1; $i <= $childCount; $i++) {
//                                                        $childIcons .= '<small><i class="fa fa-child fa-2x" aria-hidden="true"></i></small>';
                                                    }
                                                    ?>
                                                    <div class="col-lg-4 col-sm-4">
                                                        <div class="sub-room">
                                                            <span class="center-img" style="color: #2a166f;"><?php echo $adultIcons . $childIcons; ?></span>
                                                            <h4 class="tbk__title montserrat fs-22 lh-30 fw-extrabold tcolor"><?php echo $subroomtype['room_type']; ?></h4>
                                                            <p><?php echo substr($subroomtype['shortDescription'], 0, 80) . "..."; ?></p>
                                                            <?php
                                                            $price = RoomPrice::getPrice($subroomtype['id'], 1, $date);
                                                            if (!$price) {
                                                                $price = DefaultRoomPrice::getPriceByIds($subroomtype['id'], 1);
                                                            }
                                                            ?> 
                                                            <h5 class="tbk__title montserrat fs-20 lh-20 fw-extrabold tcolor room-price-2">US$ <?php echo round($price['price']); ?></h5>
                                                            <div class="tbk__title montserrat fs-15 lh-15 fw-extrabold tcolor discount"><a>US$ <?php echo (float) $price['price'] + 10; ?></a></div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <!--</div>-->
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-3">
                                            <div class="room-booking">

                                                <h2 class="tbk__title montserrat fs-35 lh-44 fw-bold tcolor">Book Now</h2>
                                                <div class="data-form">
                                                    <form method="post" action="booking.php" name="form1">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <i class="fa fa-calendar-o" id="idatepicker1"></i>
                                                                <input type="text" name="arrival" placeholder="CHECK IN" class="datepicker" id="arrival" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <i class="fa fa-calendar-o" id="idatepicker2"></i>
                                                                <input type="text" name="departure" placeholder="CHECK OUT" class="datepicker" id="departure" required>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <select  name="adults" id="adults">
                                                                    <option selected="" value="0">ADULTS</option>
                                                                    <?php
                                                                    $n = $details['num_of_adults'];
                                                                    for ($i = 1; $i <= $n; $i++) {
                                                                        ?>
                                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <select name="childrens" id="child1">
                                                                    <option selected="" value="0">CHILDREN</option>
                                                                    <?php
                                                                    $n = $details['num_of_children'];
                                                                    for ($i = 1; $i <= $n; $i++) {
                                                                        ?>
                                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <input type="hidden" name="roomId" id="roomId" class="form-control" value="<?php echo $details['room_type']; ?>">  
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button type="submit" name="booking" class="booking-btn">Book Now</button>
        <!--                                                        <a href="booking.php?id=<?php echo $details['id']; ?>" class="btn btn-default">Book Now This Room</a>-->
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

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
        <script src="js/slider/owl.carousel/owl.carousel.js" type="text/javascript"></script>

        <script src="js/slider/magnific.popup.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {

                $('.slider-accommodation').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $('#adults1').on('click', function () {
                $('#adults').trigger('click');
                //                alert(123);
            });
        </script>
        <script type="text/javascript">
            $("#arrival").click(function () {
                $('#arrival').focus();
            });

            $("#departure").click(function () {
                $('#departure').focus();
            });

            $(function () {

                /* global setting */
                var datepickersOpt = {
                    dateFormat: 'dd-mm-yy',
                    numberOfMonths: 1,
                    minDate: 0
                };

                $("#arrival").datepicker($.extend({
                    onSelect: function () {
                        var minDate = $(this).datepicker('getDate');
                        minDate.setDate(minDate.getDate() + 1); //add two days
                        $("#departure").datepicker("option", "minDate", minDate);
                    },
                    dateFormat: 'dd-mm-yy'
                }, datepickersOpt));

                
                $("#departure").datepicker({dateFormat: 'dd-mm-yy'});
            });

        </script>

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