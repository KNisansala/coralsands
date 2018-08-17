<?php
include './include.php';

$Introduction = new Introduction();
$Introductions = $Introduction->getIntroduction();

$mainsection = new MainSection();
$mainsections = $mainsection->getAll();

$offer = new Offers();
$offers = $offer->getAll();

$comment = new GuestComments();
$comments = $comment->getAll();
?>

<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <title>Hikkaduwa Hotels | Beach Hotels in Hikkaduwa | Coral Sands Hotel Hikkaduwa</title>
        <meta name="keywords" content="coral sands hotel hikkaduwa, hikkaduwa coral sands hotel, hikkaduwa hotels, hotels in hikkaduwa,  hotels hikkaduwa, beach hotels in hikkaduwa, hikkaduwa beach hotels">
        <meta name="description" content="Located on the pristine beaches of Hikkaduwa, Coral Sands Hotel offers you an unmatched stretch of beach, with snorkeling, scuba diving, and a plethora of varieties of tropical fish at your fingertips.">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" type="text/css">
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/ios/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.default.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.transitions.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.green.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">

        <style>
            input[type="number"]::-webkit-outer-spin-button,
            input[type="number"]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            input[type="number"] {
                -moz-appearance: textfield;
            }

        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
    </head>

    <body class="">
          
        <!-- HEADER -->
        <?php include 'header.php'; ?>
        <!--/ HEADER -->

        <!-- LOGIN FORM -->
        <?php include 'login-form.php'; ?>
        <!--/ LOGIN FORM -->

        <!-- Page Wrapper -->
        <div id="page_wrapper">

            <!-- SLIDER -->
            <?php include 'slider.php'; ?>
            <!--/ SLIDER -->

            <!-- BOOKING -->
            <section class="hg_section bg-white ptop-0 hidden-xs hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="action_box style3" data-arrowpos="center" style="margin-top:-25px;">
                                <div class="action_box_inner">
                                    <div class="col-md-12"><h6 class="tbk__title montserrat fs-28 lh-28 fw-bold">BOOK DIRECT WITH US TO - GET THE BEST RATES</h6></div>
                                    <div class="action_box_content">
                                        <div class="ac-content-text">
                                            <div id="check">
                                                <div class="centre">
                                                    <form action="booking.php" method="post">
                                                        <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" required="" /><i class="fa fa-calendar-o"></i></div>
                                                        <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" required="" /><i class="fa fa-calendar-o"></i></div>

                                                        <div class="field select">
                                                            <input type="number" id="adults-home" name="adults-home" placeholder="No of Adults">

                                                        </div>
                                                        <div class="field select">
                                                            <input type="number" id="children-home" name="children-home" placeholder="No of Children">
                                                        </div>
                                                        <button id="booking" name="booking"><span style="color: #E7AB14">Book a Room</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ BOOKING -->

            <!-- WELCOME MESSAGE -->
            <section class="hg_section bg-white ptop-65">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="kl-title-block clearfix text-center tbk-symbol-- tbk-icon-pos--after-title hidden-xs">
                                <h3 class="tbk__title montserrat fs-44 lh-44 fw-bold tcolor"><?php echo $Introductions['title']; ?></h3>
                                <div class="tbk__subtitle fs-18 fw-vthin"><?php echo $Introductions['description']; ?></div>
                            </div>
                            <div class="kl-title-block clearfix tbk-symbol-- tbk-icon-pos--after-title visible-xs">
                                <h3 class="tbk__title montserrat text-center fs-32 lh-34 fw-bold tcolor"><?php echo $Introductions['title']; ?></h3>
                                <div class="tbk__subtitle fs-18 fw-vthin text-justify"><?php echo $Introductions['description']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ WELCOME MESSAGE -->

            <!-- SUBSECTION -->
            <section class="hg_section bg-white seconds-section hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($mainsections as $mainsection) {
                            ?>
                            <div class="col-md-4 col-sm-4">
                                <a class="imgboxes4_link imgboxes-wrapper" href="<?php echo $mainsection['link']; ?>">
                                    <div class="kf-staff-thumb">
                                        <figure>
                                            <img src="images/subsection/<?php echo $mainsection['image_name']; ?>" alt="" title="" class="img-responsive imgbox_image cover-fit-img">

                                            <div class="kf-overlay">

                                                <h5><?php echo $mainsection['title']; ?></h5>
                                                <?php echo $mainsection['description']; ?>

                                            </div>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>


            <!-- Responsive subsection -->
            <section class="hg_section ptop-25 pbottom-25 visible-sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="screenshot-box kl-style-2 fixclear">
                                <div id="subsection-slider-sm" class="owl-carousel owl-theme">
                                    <?php
                                    foreach ($mainsections as $mainsection) {
                                        ?>
                                        <div class="item1">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">

                                                    <div class="kf-staff-thumb">
                                                        <figure>
                                                            <img src="images/subsection/<?php echo $mainsection['image_name']; ?>" alt="" title="" class="img-responsive imgbox_image cover-fit-img">

                                                            <div class="subsectin-details p-30">

                                                                <h5 class="tbk__title montserrat fs-26 lh-44 fw-bold tcolor"><?php echo $mainsection['title']; ?></h5>
                                                                <?php echo $mainsection['description']; ?>

                                                            </div>
                                                        </figure>
                                                        <a class="btn btn-fullcolor subsection-media" href="<?php echo $mainsection['link']; ?>">Read More</a>
                                                    </div>
                                                    </a>
                                                </div>

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
            </section>
            <!-- Responsive subsection -->
            <!--/ SUBSECTION -->
            <!-- OFFERS -->
            <div class="parallax" style="background-image:url(images/banners/183.jpg); background-repeat:repeat;">
                <div class="dot-layer1">
                    <section class="hg_section offers">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="screenshot-box kl-style-2 fixclear">
                                        <div id="offers-slider" class="owl-carousel owl-theme">
                                            <?php
                                            foreach ($offers as $offer) {
                                                ?>
                                                <div class="item1">
                                                    <div class="row">
                                                        <div class="col-lg-5 offers-details">
                                                            <h3 class="tbk__title montserrat fs-38 lh-46 fw-bold">
                                                                <span class="text-custom fw-normal tcolor"><?php echo $offer['title']; ?></span>
                                                            </h3>
                                                            <div class="features">
                                                                <?php echo $offer['description']; ?>
                                                            </div>
                                                            <a href="offers.php" class="btn btn-fullcolor btn-third">FIND OUT MORE</a>
                                                        </div>
                                                        <div class="col-lg-7 offers-img">
                                                            <img src="images/offers/<?php echo $offer['image_name']; ?>" alt="Owl Image">
                                                        </div>
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

                    </section>
                </div>
            </div>
            <!--/ OFFERS -->

            <!-- Feedbacks -->
            <section class="hg_section bg-white ptop-45 pbottom-45">
                <div class="full_width">
                    <!-- Title with montserrat font -->
                    <h1 class="m_title montserrat" id="feedback-topic">Feedback</h1>
                    <!--/ Title -->
                    <div id="feedback" class="owl-carousel owl-theme">
                        <?php
                        foreach ($comments as $comment) {
                            ?>
                            <div class="item1">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <h3 class="m_title montserrat"><a><?php echo $comment['name']; ?></a></h3>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <img class="center-img img-circle" src="images/comment/<?php echo $comment['image_name']; ?>" alt="Owl Image">
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <?php echo $comment['comment']; ?>
                                        <center>
                                            <img src="images/comment-trip-advisor.png" style="border-radius: 0;">
                                        </center>
                                        <b>  <?php echo $comment['country']; ?>
                                        </b>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>


                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--/ full_width -->
            </section>
            <!--/ Feedbacks -->

            <!-- FOOTER -->
            <?php include 'footer.php'; ?>
            <!--/ FOOTER -->
        </div>
        <!--/ Page Wrapper -->

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
        <script src="js/slider/owl.carousel/owl.carousel.js" type="text/javascript"></script>
        <script>


            $(document).ready(function () {

                $('#offers-slider').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
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
                        960: {
                            items: 2
                        },
                        1000: {
                            items: 1
                        }
                    }
                });

                $('#feedback').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
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
                })

                $('#subsection-slider-sm').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        960: {
                            items: 2
                        },
                        1000: {
                            items: 1
                        }
                    }
                })

            });


        </script>
        <!-- Code provided by Google -->
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
            }
        </script>
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

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
                    numberOfMonths: 2,
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

                $("#departure").datepicker({dateFormat: 'dd-mm-yy', numberOfMonths: 2, });
            });

        </script>

    </body>
</html>