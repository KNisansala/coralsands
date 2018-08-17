<?PHP
include './include.php';

$id = $_GET['id'];

$activities = new Activities();

$details = $activities->getById($id);

$activityphotos = new ActivityPhotos();

$images = $activityphotos->getAllByActivityId($id);

$allactivities = $activities->getAll();
?>

<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <meta name="keywords" content="premium html template, unique premium template, multipurpose template">
        <meta name="description" content="Kallyas is an ultra-premium, responsive theme built for todays websites. Create your website, fast.">
        <title>Excursions | Coral Sands Hikkaduwa</title>
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
                <div class="parallax" style="background-image:url(images/banners/things-to-do.jpg); background-repeat:repeat;">
                    <div class="dot-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="parallax-text">
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor"><?php echo $details['title']; ?></h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="things_to_do.php">Excursions</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor"><?php echo $details['title']; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>

                    <section class="hg_section sec1">
                        <div class="section">
                            <div class="wrapper-inner">
                                <div class="widget-rooms-detail">
                                    <div class="widget-inner wi-p60">

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="room-slider">

                                                    <div  class="owl-carousel owl-theme slider-activity">
                                                        <?php
                                                        foreach ($images as $image) {
                                                            ?>
                                                            <div>
                                                                <a href="images/Things_to_do/photos/<?php echo $image['image_name']; ?>"  title="<?php echo $details['title']; ?>" class="popup-gallery"><img src="images/Things_to_do/photos/<?php echo $image['image_name']; ?>" alt="<?php echo $details['title']; ?>"></a>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>




                                                    </div>
                                                </div>
                                                <div class="room-desc">
                                                    <h2 class="tbk__title montserrat fs-35 lh-44 fw-bold tcolor"><?php echo $details['title']; ?></h2>
                                                    <?php echo $details['description']; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 hidden-sm hidden-xs">
                                                <?php
                                                foreach ($allactivities as $allactivity) {
                                                    ?>
                                                    <div class="other-activities">
                                                        <div class="col-sm-5 act-img">
                                                            <img src="images/Things_to_do/thumb/<?php echo $allactivity['image_name']; ?>" class="img-responsive" alt="" title="" />
                                                        </div>
                                                        <div class="col-sm-7 act-desc">
                                                            <h4 class="tbk__title montserrat fs-18 lh-20 fw-extrabold tcolor"><a href="view_activities.php?id=<?php echo $allactivity['id']; ?>"><?php
                                                                    if (strlen($allactivity['title']) > 10) {
                                                                        echo substr($allactivity['title'], 0, 10) . '...';
                                                                    } else {
                                                                        echo $allactivity['title'];
                                                                    };
                                                                    ?></a></h4>
                                                            <?php
                                                            echo substr($allactivity['shortDescription'], 0, 50) . '...';
                                                            ?>
                                                        </div>
                                                    </div>
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

                $('.slider-activity').owlCarousel({
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