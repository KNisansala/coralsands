<?php
include './include.php';

$activities = new Activities();
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/ios/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/dp.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.green.css" rel="stylesheet" type="text/css"/>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>


    </head>

    <body class="">
        <?php include 'header.php'; ?>
        <?php include 'login-form.php'; ?>

        <!-- Page Wrapper -->
        <div id="page_wrapper">
            <div class="header-section">
                <div class="parallax" style="background-image:url(images/banners/things-to-do.jpg); background-repeat:repeat;">
                    <div class="dot-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="parallax-text">
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor">Excursions</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Excursions</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>

                    </div>

                    <section class="hg_section sec1">
                        <div class="wrapper-inner wi-pb0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!-- Latest posts default style element -->
                                    <div class="latest_posts default-style">
                                        <div class="row">
                                            <?php
                                            foreach ($allactivities as $allactivity) {
                                                ?>
                                                <div class="col-sm-6 col-lg-4 post">
                                                    <!-- Post link wrapper -->
                                                    <a href="view_activities.php?id=<?php echo $allactivity['id']; ?>" class="hoverBorder plus">
                                                        <!-- Border wrapper -->
                                                        <span class="hoverBorderWrapper">
                                                            <!-- Image -->
                                                            <img src="images/Things_to_do/thumb/<?php echo $allactivity['image_name']; ?>" class="img-responsive" alt="" title="" />
                                                            <!--/ Image -->

                                                            <!-- Hover border/shadow -->
                                                            <span class="theHoverBorder"></span>
                                                            <!--/ Hover border/shadow -->
                                                        </span>
                                                        <!--/ Border wrapper -->

                                                        <!-- Button -->
                                                        <h6>Read more +</h6>
                                                        <!--/ Button -->
                                                    </a>
                                                    <!--/ Post link wrapper -->

                                                    <div class="activity-desc">
                                                        <!-- Title with link -->
                                                        <h3 class="m_title"><a href="view_activities.php?id=<?php echo $allactivity['id']; ?>"><?php echo $allactivity['title']; ?></a></h3>
                                                        <h4 class="tbk__subtitle fs-18 lh-32 fw-vthin text-justify">
                                                            <?php
                                                            echo substr($allactivity['shortDescription'], 0, 100) . '...';
                                                            ?>
                                                        </h4>
                                                        <!--/ Title with link -->
                                                    </div>
                                                </div>
                                                <!--/ col-sm-6 col-lg-4 post -->
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!--/ Latest posts default style element -->
                                </div>
                                <!--/ col-md-12 col-sm-12 -->
                            </div>
                            <!--/ row -->
                        </div>
                        <!--/ container -->
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