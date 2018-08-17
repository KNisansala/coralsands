<?php
include './include.php';

if ($_GET['id']) {

    $ref = 'Reference: #' . $_GET['ref'];

    $id = (int) $_GET['id'];
    $invoices = new Invoices();
    $inv = $invoices->getById($id);

    if ($inv['status'] == 1) {
        $status = 'Paid';
    } else {
        if ($inv['due_date'] < date('Y-m-d')) {
            $status = 'Expired';
        } else {
            $status = 'Unpaid';
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <title>Web Invoice | Coral Sands Hikkaduwa</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" type="text/css">
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/ios/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/dp.css" type="text/css" media="all">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.default.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.transitions.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/sliders/owl.carousel/owl.theme.green.css" type="text/css" media="all">
        <link rel="stylesheet" href="js/plugins/jquery-ui/jquery-ui.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico">
        <link rel="stylesheet" href="css/sliders/magnific.popup.css" type="text/css"/>
        <link rel="stylesheet" href="booking-form/style.css" type="text/css"/>
        <link rel="stylesheet" href="js/plugins/sweet-alert-2/sweetalert2.min.css" type="text/css"/>
        <link rel="stylesheet" href="js/plugins/country-select/css/countrySelect.min.css" type="text/css"/>
        <link rel="stylesheet" href="js/plugins/jquery-loading/jquery.loadingModal.min.css" type="text/css"/>

        <link rel="stylesheet" href="css/booking.css" type="text/css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>

        <style type="text/css">
            table {
                border: 1px solid #d0d0d0;
            }
            th {
                border-bottom: 1px solid #d0d0d0;
                padding: 15px 10px 10px 25px;
                text-align: left;
                margin: 0px;
            }
            td {
                padding: 10px 10px 5px 10px;
                text-align: left;
                margin: 0px;
            }
            .contact-form ul {
                font-size: 18px;
                list-style-type: square;
                margin: 0px 20px 30px 10%;
            }
            .contact-form ul li {
                padding: 5px;
            }
            .bdr {
                border-left: 1px solid #d0d0d0;
            }
            .bdr-top {
                border-top: 1px solid #d0d0d0;
            }
            .bb {
                font-weight: bold;
            }
            .right {
                text-align: right;
            }
            @media (max-width: 450px) {
                ul { font-size: 14px; }
                td { font-size: 12px; }
            }
        </style>

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
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor">Web Invoice</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Web Invoice Page</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>


                    <section class="hg_section sec1">
                        <!--<div class="container">-->
                        <div class="section cpadding_top">
                            <div class="booking-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-form">
                                            <div class="row">

                                                <?php
                                                if ($_GET['id'] && $inv) {

                                                    if ($_GET['pay'] == 'error') {
                                                        ?>
                                                        <div class="alert alert-danger"><b>Sorry! Your transaction was not successful. <?php echo $ref; ?></b></div>
                                                        <?php
                                                    } elseif ($_GET['pay'] == 'success') {
                                                        ?>
                                                        <div class="alert alert-success"><b>Your payment has been successfully processed. Thank you!.  <?php echo $ref; ?></b></div>
                                                        <?php
                                                    } elseif ($inv["status"] == 1) {
                                                        ?>
                                                        <div class="alert alert-warning"><b>We have already received the payment for this invoice .</b></div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <div class="col-xs-12" style="background-color: #ffffff;">
                                                        <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                                            <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                                            <img src="images/logo/logo.png" alt="Coral Sands"/><br/>
                                                            <span>No.326, Galle Rd, Hikkaduwa, Sri Lanka</span><br/>
                                                            <span>Email: coralsands@stmail.lk</span><br/>
                                                            <span>Phone: +94 (0)91 227 7513 / +94 (0)91 227 7436</span>
                                                        </div>
                                                        <ul>
                                                            <li><span class="bb">Web Invoice Status : </span><?php echo $status; ?><span></span></li>
                                                            <li><span class="bb">Web Invoice ID : </span>#2500<?php echo $inv["id"]; ?><span></span></li>
                                                            <li><span class="bb">Date of Web Invoice : </span><?php echo $inv["date"]; ?><span></span></li>
                                                            <li><span class="bb">Due Date : </span><?php echo $inv["due_date"]; ?><span></span></li>
                                                            <li><span class="bb">Customer : </span><span><?php echo $inv["customer_name"]; ?></span></li>
                                                        </ul>
                                                        <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                                            <tr>
                                                                <th width="100%" colspan="2">Description</th> 
                                                            </tr>
                                                            <tr>
                                                                <td  colspan="2"><?php echo $inv["description"]; ?></td>
                                                            </tr>
                                                            <tr style="height: 70px;"> 
                                                                <td class="bdr" colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bdr-top right"><b>Requested Advance:</b></td>
                                                                <td class="bdr bdr-top right"><b>$ <?php echo $inv["amount"]; ?></b></td>
                                                            </tr>
                                                        </table>
                                                        <div style="text-align: center; margin: 35px 0px;">

                                                            <!-- Payment Gateway Form Start-->
                                                            <?php
                                                            $payAmount = str_replace('.', '', $inv["amount"]);

                                                            $date_now = date("Y-m-d"); // this format is string comparable

                                                            if ($date_now <= $inv["due_date"]) {
                                                                $act = 1;
                                                            } else {
                                                                $act = 0;
                                                            }
                                                            ?>
                                                            <form id="invoice-pay" action="payments/PHP_VPC_3Party_Order_DO.php" method="post" accept-charset="UTF-8">
                                                                <input type="hidden" name="Title" value = "PHP VPC 3 Party Transacion">
                                                                <input type="hidden" name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8"/>
                                                                <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"/>
                                                                <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo str_replace(':', 'a', str_replace(' ', '', date("Y-m-d H:i:s"))); ?>" size="20" maxlength="40"/>
                                                                <input type="hidden" name="vpc_AccessCode" value="C15D1837" size="20" maxlength="8"/>
                                                                <input type="hidden" name="vpc_Merchant" value="CORLSANDUSD" size="20" maxlength="16"/>
    <!--                                                                <input type="hidden" name="vpc_Merchant" value="TESTCORLSANDUSD" size="20" maxlength="16"/>
                                                                <input type="hidden" name="vpc_AccessCode" value="AF20024B" size="20" maxlength="8"/>-->
                                                                <input type="hidden" name="vpc_OrderInfo" value="<?php echo $inv["id"]; ?>" size="20" maxlength="34"/>
                                                                <input type="hidden" name="vpc_Amount" value="<?php echo $payAmount; ?>" maxlength="10"/>
                                                                <input type="hidden" name="vpc_ReturnURL" size="65" value="http://<?php echo str_replace("www.", "", $_SERVER['HTTP_HOST']); ?>/invoice_response.php" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Locale" value="en_US" maxlength="10"/>
                                                                <input type="hidden" name="vpc_Currency" value="USD" maxlength="10"/>


                                                                <?php
                                                                if ($inv['status'] == 0) {
                                                                    ?>
                                                                    <button type="submit" id="btnPay" name="btnPay" act="<?php echo $act; ?>" style="font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">PAY NOW</button>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </form>
                                                            <!-- Payment Gateway Form End-->                                                            
                                                        </div>
                                                    </div>

                                                    <?php
                                                } else {
                                                    echo 'Wrong try!';
                                                }
                                                ?>

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
        <script src="js/slider/magnific.popup.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Demo panel -->
        <script type="text/javascript" src="js/dp.js"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <!--<script src="booking-form/scripts.js" type="text/javascript"></script>-->

        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="js/plugins/sweet-alert-2/sweetalert2.min.js"></script>

        <!-- Jquery loader -->
        <script type="text/javascript" src="js/plugins/jquery-loading/jquery.loadingModal.min.js"></script>

        <!-- Country select -->
        <script type="text/javascript" src="js/plugins/country-select/js/countrySelect.min.js"></script>
        <script>$("#txtCountry").countrySelect();</script>

        <script src="js/invoice.js" type="text/javascript"></script>
        <!--<script src="js/ajax/booking.js" type="text/javascript"></script>-->
        <script type="text/javascript">
            $("#checkin").click(function () {
                $('#checkin').focus();
            });

            $("#checkout").click(function () {
                $('#checkout').focus();
            });

            $(function () {

                /* global setting */
                var datepickersOpt = {
                    dateFormat: 'dd-mm-yy',
                    minDate: 0
                };

                $("#checkin").datepicker($.extend({
                    onSelect: function () {
                        var minDate = $(this).datepicker('getDate');
                        minDate.setDate(minDate.getDate() + 1); //add two days
                        $("#checkout").datepicker("option", "minDate", minDate);
                        setRooms();
                        tabDis();
                    },
                    dateFormat: 'dd-mm-yy'
                }, datepickersOpt));

                $("#checkout").datepicker($.extend({
                    onSelect: function () {
                        var maxDate = $(this).datepicker('getDate');
                        maxDate.setDate(maxDate.getDate() - 1);
                        $("#checkin").datepicker("option", "maxDate", maxDate);
                        setRooms();
                        tabDis();
                    },
                    dateFormat: 'dd-mm-yy'
                }, datepickersOpt));
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