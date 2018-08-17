<?php
include './include.php';
?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <meta name="keywords" content="premium html template, unique premium template, multipurpose template">
        <meta name="description" content="Kallyas is an ultra-premium, responsive theme built for todays websites. Create your website, fast.">
        <title>Booking | Coral Sands Hikkaduwa</title>
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
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor">Inquiry</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Inquiry</li>
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
                                                                    <label class="">Nights</label>
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
                                                                    <label >Room Category</label>
                                                                    <span id="star">*</span>
                                                                    <select name="txtRooms" id="txtRooms" class="form-control third form-control input-validater">
                                                                        <option selected="selected" value="">-- Please Select --</option>
                                                                        <option>Standard Double Room</option>
                                                                        <option>Deluxe Double Room</option>
                                                                    </select>
                                                                    <span id="spanRooms"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">                                  
                                                            <div class="col-md-3">
                                                                <div class="form-group ">
                                                                    <label>Adults</label>
                                                                    <span id="star">*</span>
                                                                    <input type="number" name="adults" id="adults" class="form-control" value="<?php echo $adult; ?>">
                                                                    <span id="spanAdult"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group ">
                                                                    <label >Children (less than 12 years)</label>
                                                                    <select name="childrens" id="childrens" class="form-control third form-control input-validater">
                                                                        <option selected="selected" value="0">-- Please Select --</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                    <span id="spanChildren"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group ">
                                                                    <label >Ages of the Children</label><br /> 
                                                                    <div class="col-xs-4 child">
                                                                        <select name="child_age1" id="child_age1" class="form-control third form-control input-validater">
                                                                            <option selected="selected" value="0">-- Select --</option>
                                                                            <?php
                                                                            for ($i = 2; $i <= 11; $i++) {
                                                                                ?>
                                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <option value="11+">11+</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-4 child">
                                                                        <select name="child_age2" id="child_age2" class="form-control third form-control input-validater">
                                                                            <option selected="selected" value="0">-- Select --</option>
                                                                            <?php
                                                                            for ($i = 2; $i <= 11; $i++) {
                                                                                ?>
                                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <option value="11+">11+</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-4 child">
                                                                        <select name="child_age3" id="child_age3" class="form-control third form-control input-validater">
                                                                            <option selected="selected" value="0">-- Select --</option>
                                                                            <?php
                                                                            for ($i = 2; $i <= 11; $i++) {
                                                                                ?>
                                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <option value="11+">11+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">   
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label >Basis </label>
                                                                    <span id="star">*</span>
                                                                    <select name="txtBasis" id="txtBasis" class="form-control third form-control input-validater">
                                                                        <option selected="selected" value="">-- Please Select --</option>
                                                                        <option>Bed & Breakfast</option>
                                                                        <option>Half Board </option>
                                                                        <option>Full Board</option>
                                                                    </select>
                                                                    <span id="spanBasis"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">  
                                                            <div class="col-md-12 form-group">
                                                                <label>Your Message</label>
                                                                <span id="star">*</span>
                                                                <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here"></textarea>
                                                                <span id="spanMessage" ></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">  
                                                            <div class="col-md-12 form-group">
                                                                <div class="form-group">
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
                                                            </div>
                                                        </div>
                                                        <div class="row"> 
                                                            <div id="dismessage" align="center"></div>
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
        <script src="js/cart.js" type="text/javascript"></script>

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

        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="js/plugins/sweet-alert-2/sweetalert2.min.js"></script>

        <!-- Garand sticky -->
        <script type="text/javascript" src="js/plugins/garand-sticky/jquery.sticky.js"></script>

        <!-- Jquery loader -->
        <script type="text/javascript" src="js/plugins/jquery-loading/jquery.loadingModal.min.js"></script>

        <!-- Country select -->
        <script type="text/javascript" src="js/plugins/country-select/js/countrySelect.min.js"></script>
        <script>$("#txtCountry").countrySelect();</script>


     <!--<script src="js/home-booking.js" type="text/javascript"></script>-->
        <script type="text/javascript">

            $(function () {

                /* global setting */
                var datepickersOpt = {
                    dateFormat: 'dd-mm-yy',
                    numberOfMonths: 1,
                    minDate: 0
                };

                $("#checkin").datepicker($.extend({
                    onSelect: function () {
                        var minDate = $(this).datepicker('getDate');
                        minDate.setDate(minDate.getDate() + 1); //add two days
                        $("#checkout").datepicker("option", "minDate", minDate);
                    },
                    dateFormat: 'dd-mm-yy'
                }, datepickersOpt));
                $("#checkout").datepicker({dateFormat: 'dd-mm-yy'});

            });
        </script>
        <script src="booking-form/scripts.js" type="text/javascript"></script>

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