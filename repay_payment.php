<?php
include './include.php';

$id = $_GET['id'];

$BOOKING = new Booking($id);
$rooms = BookingRoomDetails::getRoomTypeDetailsByID($id);

$arr = explode(".", $BOOKING->advance);
$price = $arr[0] . $arr[1];
?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <meta name="keywords" content="premium html template, unique premium template, multipurpose template">
        <meta name="description" content="Kallyas is an ultra-premium, responsive theme built for todays websites. Create your website, fast.">
        <title>Repay | Coral Sands Hikkaduwa</title>
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
        <link rel="stylesheet" href="css/sliders/magnific.popup.css" type="text/css"/>
        <link rel="stylesheet" href="booking-form/style.css" type="text/css"/>

        <link rel="stylesheet" href="css/booking.css" type="text/css"/>
        <style>
            #btnSubmit {
                margin-top: 0px;
            }  
        </style>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                var id = $("input[name=vpc_OrderInfo]").val();
                var uniqueone = Date.now();
                $("input[name=vpc_MerchTxnRef]").val(id + '-' + uniqueone);
            });

        </script>
        <script>
            $(document).ready(function () {
                
                var height = $(".final-listing").outerHeight(true);
                

                $(".wi-p60hre").wrapInner(function () {
                    return "<div style=height:" + height + "px;></div>";
                });
            });
        </script>


    </head>

    <body class="">
        <?php include 'header.php'; ?>
        <?php include 'login-form.php'; ?>

        <div id="page_wrapper">
            <div class="header-section">
                <div class="parallax" style="background-image:url(images/banners/inquiry.jpg); background-repeat:repeat;">
                    <div class="dot-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="parallax-text">
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor">Repay Payment</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Repay Payment Page</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>


                    <section class="hg_section sec1">
                        <!--<div class="container">-->
                        <div class="section cpadding_top">
                            <div class="wi-p60hre">
                                <div class="col-md-8 col-md-offset-2 response">
                                    <div class="final-listing">
                                        <div class="row">
                                            <table>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><?php echo $BOOKING->name; ?></td>
                                                </tr>
                                                
                                                <tr class="hidden-xs">
                                                    <td>Date of Booking:</td>
                                                    <td><?php echo $BOOKING->date; ?></td>
                                                </tr>
                                                <tr class="visible-xs">
                                                    <td>Date:</td>
                                                    <td><?php echo $BOOKING->date; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country:</td>
                                                    <td><?php echo $BOOKING->country; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Amount:</td>
                                                    <td><?php echo 'US$ ' . $BOOKING->total; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Advance Amount:</td>
                                                    <td><?php echo 'US$ ' . $BOOKING->advance; ?></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="final-dates">
                                                    <span>Check In:</span> <span><?php echo $BOOKING->checkin; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="final-dates">
                                                    <span>Check Out:</span> <span><?php echo $BOOKING->checkout; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table id="final-table" class="table table-striped table-responsive">
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Basis</th>
                                                        <th>Extra Beds</th>
                                                        <th>Adults</th>
                                                        <th>Children</th>
                                                    </tr>

                                                    <?php
                                                    foreach ($rooms as $room) {
                                                        ?>
                                                        <tr>
                                                            <th>
                                                                <?php
                                                                $roomtype = RoomType::getAllRoomTypeById($room['room_type']);
                                                                echo $roomtype['room_type'];
                                                                ?>
                                                            </th>
                                                            <th>
                                                                <?php
                                                                $roombasis = RoomBasis::getRoomBasisById($room['room_basis']);
                                                                echo $roombasis['name'];
                                                                ?>
                                                            </th>
                                                            <th><?php
                                                                if (!empty($room[' no_of_extra_beds'])) {
                                                                    echo $room[' no_of_extra_beds'];
                                                                } else {
                                                                    echo '0';
                                                                }
                                                                ?></th>
                                                            <th><?php echo $room['no_of_adults']; ?></th>
                                                            <th><?php echo $room['no_of_children']; ?></th>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>

                                        <form id="payments" action="payments/PHP_VPC_3Party_Order_DO.php" method="post" accept-charset="UTF-8">
                                            <input type="hidden" name="Title" value = "PHP VPC 3 Party Transacion">
                                            <input type="hidden" name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"/>
                                            <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8"/>
                                            <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"/>
                                            <input type="hidden" name="vpc_AccessCode" value="AF20024B" size="20" maxlength="8"/>
                                            <input type="hidden" name="vpc_MerchTxnRef" value="" size="20" maxlength="40"/>
                                            <input type="hidden" name="vpc_Merchant" value="TESTCORLSANDUSD" size="20" maxlength="16"/>
                                            <input type="hidden" name="vpc_OrderInfo" value="<?php echo $BOOKING->id; ?>" size="20" maxlength="34"/>
                                            <input type="hidden" name="vpc_Amount" value="<?php echo $price; ?>" maxlength="10"/>
                                            <input type="hidden" name="vpc_ReturnURL" size="65" value="http://coralsandshotel.com/booking_response.php" maxlength="250"/>
                                            <input type="hidden" name="vpc_Locale" value="en_US" maxlength="10"/>
                                            <input type="hidden" name="vpc_Currency" value="USD" maxlength="10"/>

                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-5 btns">
                                                    <button type="submit" id="btnSubmit" name="SubButL" class="btn btn-danger">Pay Now</button>
                                                </div>

                                            </div>
                                        </form>


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
        <script src="js/slider/magnific.popup.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Demo panel -->
        <script type="text/javascript" src="js/dp.js"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/ajax/booking.js" type="text/javascript"></script>

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