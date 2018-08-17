<?php
include './include.php';

$in = $_POST['arrival'];
$out = $_POST['departure'];

$roomtype = new RoomType();
$allmaintypes = $roomtype->getAllMainRoomType();
$subroomtypes = $roomtype->getAllSubRoomTypes();

$roombasis = new RoomBasis();
$roombasises = $roombasis->getAll();

$roomprice = new RoomPrice();

$bookedrooms = new BookedRooms(null);

$settings = new Settings();
$percentage = $settings->getPercentage();
?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <title>Booking | Coral Sands Hikkaduwa</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" type="text/css">
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all"> 
        <link rel="stylesheet" href="css/template.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/base-sizing.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One"> 
        <link rel="stylesheet" href="js/plugins/jquery-ui/jquery-ui.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/index.ico"> 
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
                                    <h1 class="tbk__title montserrat fs-57 lh-32 fw-extrabold tcolor">Booking</h1>
                                    <span><i class="icon-hotel"></i></span>
                                    <ul class="breadcrumb">
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-vthin tcolor"><a href="./">Home</a></li>
                                        <li class="tbk__title montserrat fs-14 lh-22 .fw-thin tcolor">Booking</li>
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

                                                <div class="col-lg-8 col-md-8 col-xs-12 mobile-marg">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs booking-tabs row" id="booking-tabs" role="tablist">
                                                                <li role="presentation" class="active col-xs-4"><a class="all-tabs" href="#booking-details" aria-controls="booking-details" role="tab" data-toggle="tab">Rooms</a></li>
                                                                <li role="presentation" class="col-xs-4"><a class="all-tabs" id="tab-of-yours" href="#your-details" aria-controls="your-details" role="tab" data-toggle="tab">Details</a></li>
                                                                <li role="presentation" class="col-xs-4"><a class="all-tabs" id="tab-of-booking" href="#final-booking" aria-controls="final-booking" role="tab" data-toggle="tab">Confirm</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content"> 
                                                        <div role="tabpanel" class="tab-pane active booking-box" id="booking-details">
                                                            <div class="row panel panel-default">
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group ">
                                                                        <label >Arrival Date</label>
                                                                        <span class="star">*</span>
                                                                        <input type="text" name="checkin" id="checkin" class="form-control input-validater" required="" value="<?php
                                                                        if (!empty($in)) {
                                                                            echo $in;
                                                                        } else {
                                                                            echo date("d-m-Y");
                                                                        }
                                                                        ?>">
                                                                        <span id="spanFdate"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label >Departure Date</label>
                                                                        <span class="star">*</span> 
                                                                        <?php
                                                                        $depdate = new DateTime();
                                                                        $depdate->add(new DateInterval('P1D'));
                                                                        $dep = $depdate->format('d-m-Y') . "";
                                                                        ?>
                                                                        <input type="text" name="checkout" id="checkout" class="form-control input-validater" required="" value="<?php
                                                                        if (!empty($out)) {
                                                                            echo $out;
                                                                        } else {
                                                                            echo $dep;
                                                                        }
                                                                        ?>">
                                                                        <span id="spanTdate"></span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <?php
                                                            foreach ($allmaintypes as $maintype) {
                                                                ?>
                                                                <input type="hidden" class="each-main-type" id="mainT-<?php echo $maintype['id']; ?>" typeid="<?php echo $maintype['id']; ?>"/>

                                                                <h3 class="main-room-name"><?php echo $maintype["room_type"]; ?></h3>

                                                                <div class="row room-types panel panel-default">   
                                                                    <div id="main-room-tab-<?php echo $maintype["id"]; ?>">
                                                                        <?php
                                                                        foreach ($subroomtypes as $subroomtype) {
                                                                            if ($maintype["id"] == $subroomtype['is_Child']) {
                                                                                $totalbooked = 0;
                                                                                $mainroomtype = RoomType::getAllRoomTypeById($subroomtype['is_Child']);
                                                                                $subrooms = RoomType::getAllSubRoomsByMain($mainroomtype['id']);

                                                                                foreach ($subrooms as $subroom) {
                                                                                    $bookedData = $bookedrooms->getByDateAndRoomType(date("Y-m-d"), $subroom['id']);
                                                                                    $booked = (int) $bookedData['booked_rooms'];
                                                                                    $totalbooked = $totalbooked + $booked;
                                                                                }

                                                                                $totalRooms = (int) $mainroomtype['num_of_room'];
                                                                                $available = $totalRooms - $totalbooked;

                                                                                $adultCount = (int) $subroomtype['num_of_adults'];
                                                                                $childCount = (int) $subroomtype['num_of_children'];
                                                                                $adultIcons = '';
                                                                                $childIcons = '';

                                                                                for ($i = 1; $i <= $adultCount; $i++) {
                                                                                    $adultIcons .= '<i class="fa fa-male" aria-hidden="true"></i>';
                                                                                }
                                                                                for ($i = 1; $i <= $childCount; $i++) {
//                                                                                    $childIcons .= '<small><i class="fa fa-child" aria-hidden="true"></i></small>';
                                                                                }
                                                                                ?>
                                                                                <div class="col-xs-12">
                                                                                    <h4 class="each-room-type" id="typedata-<?php echo $subroomtype['id']; ?>" typeid="<?php echo $subroomtype['id']; ?>" adults="<?php echo $subroomtype['num_of_adults']; ?>" children="<?php echo $subroomtype['num_of_children']; ?>" max-people="<?php echo $subroomtype['max_people']; ?>" extrabeds="<?php echo $subroomtype['num_of_extra_bed']; ?>" eb-price="<?php echo $subroomtype['extra_bed_price']; ?>" supplement="<?php echo $subroomtype['children_supplement']; ?>">
                                                                                        <?php echo $subroomtype['room_type'] . ' ' . $adultIcons . $childIcons; ?><small class="hidden"> - <span id="<?php echo $subroomtype['id']; ?>-available" class="mainid-<?php echo $mainroomtype['id']; ?>"><?php echo $available; ?></span> Rooms Available</small>
                                                                                    </h4>
                                                                                </div>

                                                                                <?php
                                                                                $date = date("Y-m-d");
                                                                                foreach ($roombasises as $roombasis) {
                                                                                    $price = $roomprice->getPrice($subroomtype['id'], $roombasis['id'], $date);
                                                                                    ?>
                                                                                    <div class="col-sm-6 col-xs-6 form-group">
                                                                                        <label><?php echo $roombasis['name']; ?></label>
                                                                                        <select id="<?php echo $subroomtype['id'] . '-' . $roombasis['id']; ?>" typename="<?php echo $subroomtype['room_type']; ?>" basisname="<?php echo $roombasis['name']; ?>" rtype="<?php echo $subroomtype['id']; ?>" rbasis="<?php echo $roombasis['id']; ?>" name="<?php echo $subroomtype['id'] . '-' . $roombasis['id']; ?>-price" class="form-control maintype-of-<?php echo $mainroomtype['id']; ?> prices-list type-of-<?php echo $subroomtype['id']; ?>">
                                                                                            <option selected="" value="0" each-price="0">- Please Select -</option>
                                                                                            <?php
                                                                                            for ($i = 1; $i <= $available; $i++) {
                                                                                                if ($i == 1) {
                                                                                                    $rm = 'Room';
                                                                                                } else {
                                                                                                    $rm = 'Rooms';
                                                                                                }
                                                                                                $eachPrice = $price['price'] * $i;
                                                                                                $eachPrice = number_format($eachPrice, 2, '.', '');
                                                                                                echo '<option value="' . $i . '" each-price="' . $eachPrice . '">' . $i . ' ' . $rm . ' - US$ ' . $eachPrice . '</option>';
                                                                                            }
                                                                                            ?>

                                                                                        </select>
                                                                                    </div>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </div> 
                                                                    <div class="alert alert-warning text-justify"  id="main-room-alert-<?php echo $maintype["id"]; ?>" style="display: none; margin: 10px 16px 15px 16px;">
                                                                        Sorry. No <?php echo $maintype["room_type"]; ?> are available on the selected dates.
                                                                        <br/>
                                                                        <!-- <a href="inquiry.php" class="btn btn-sm btn-default" style="margin-top: 5px;">Inquiry Now >>> </a> -->
                                                                    </div>
                                                                </div> 
                                                                <?php
                                                            }
                                                            ?>


                                                            <div id="roomdatas" class="panel panel-default row"  style="display: none;">

                                                                <h3 class="room-details-name">Room Details</h3>

                                                            </div>

                                                            <div class="booking-navig">
                                                                <div class="pull-right btn btn-default btn-nv btn-next" id="btn-next-2" dis="true" go="2">Next</div>
                                                            </div>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane booking-box" id="your-details"> 
                                                            <div class="row panel panel-default" style="padding-bottom: 20px;">
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group ">
                                                                        <label id="id-of-txtFullName">Your Name</label>
                                                                        <span class="star">*</span>
                                                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater person-data customer-data"  required="">
                                                                        <span id="spanFullName" ></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label id="id-of-txtCountry">Your Country</label>
                                                                        <span class="star">*</span>
                                                                        <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater person-data customer-data" required="">
                                                                        <span id="spanCountry" ></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label id="id-of-txtEmail">Your Email</label>
                                                                        <span class="star">*</span>
                                                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater person-data customer-data" required="">
                                                                        <span id="spanEmail" ></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label id="id-of-txtPhone">Your Contact Numbers</label>
                                                                        <span class="star">*</span>
                                                                        <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater person-data customer-data" required="">
                                                                        <span id="spanPhone" ></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 form-group">
                                                                    <label id="id-of-txtMessage">Your Message</label>
                                                                    <textarea name="txtMessage" id="txtMessage" rows="6" class="form-control person-data customer-data" placeholder="Write message here"></textarea>
                                                                    <span id="spanMessage" ></span>
                                                                </div>
                                                                <div class="col-xs-12 booking-navig">
                                                                    <div class="pull-left btn btn-default btn-nv btn-prev" id="btn-prev-2"  go="1">Previous</div>
                                                                    <div class="pull-right btn btn-default btn-nv btn-next" id="btn-next-3"  go="3">Next</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane booking-box bk-box" id="final-booking">

                                                            <div class="final-listing panel panel-default">
                                                                <div class="row">
                                                                    <div class="col-xs-5">
                                                                        <ul>
                                                                            <li>Name:</li>
                                                                            <li>Country:</li>
                                                                            <li>Email:</li>
                                                                            <li>Phone:</li>
                                                                            <li>Message:</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-xs-7">
                                                                        <ul>
                                                                            <li id="final-txtFullName"></li>
                                                                            <li id="final-txtCountry"></li>
                                                                            <li id="final-txtEmail"></li>
                                                                            <li id="final-txtPhone"></li>
                                                                            <li id="final-txtMessage"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <div class="final-dates">
                                                                            <span>Arrival Date:</span> <span id="final-checkin"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="final-dates">
                                                                            <span>Departure Date:</span> <span id="final-checkout"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <table id="final-table" class="table table-striped">
                                                                            <tr>
                                                                                <th>Type</th>
                                                                                <th class="hidden">Extra Beds</th>
                                                                                <th>Occupants</th>
                                                                                <th>Additional Children<br/> (5 - 11+ Years)</th>
                                                                                <th>Under 5 Years<br/> (No Charge)</th>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--<div class="form-group">-->
                                                            <div class="row">
                                                                <div class="col-sm-6 pull-right">
                                                                    <div class="row">
                                                                        <div class="col-xs-6"> 
                                                                            <?php include("./captchacode/captchacode-widget.php"); ?> 
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                            <label>Security Code:</label>
                                                                            <span class="star">*</span> 
                                                                            <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" required="" placeholder="Enter the security code >> ">
                                                                            <span id="capspan" ></span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="div-check pull-right">
                                                                <img src="captchacode/img/checking.gif" id="checking" alt="" />
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xs-12" style="margin-bottom: 10px;">  
                                                                    <label class="checkbox-container pull-right">Click here to indicate that you have read and agree to the booking <a href="terms_and_conditions.php" target="_blank" class="text-primary">terms and conditions.</a>.
                                                                        <input type="checkbox"  name="agree" id="agree">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>


                                                            <!-- Payment Gateway Form Start-->
                                                            <form id="payments" action="payments/PHP_VPC_3Party_Order_DO.php" method="post" accept-charset="UTF-8">
                                                                <input type="hidden" name="Title" value = "PHP VPC 3 Party Transacion">
                                                                <input type="hidden" name="virtualPaymentClientURL" size="65" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8"/>
                                                                <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"/>
                                                                <input type="hidden" name="vpc_MerchTxnRef" value="" size="20" maxlength="40"/>
                                                                <input type="hidden" name="vpc_AccessCode" value="C15D1837" size="20" maxlength="8"/>
                                                                <input type="hidden" name="vpc_Merchant" value="CORLSANDUSD" size="20" maxlength="16"/>
<!--                                                                <input type="hidden" name="vpc_Merchant" value="TESTCORLSANDUSD" size="20" maxlength="16"/>
                                                                <input type="hidden" name="vpc_AccessCode" value="AF20024B" size="20" maxlength="8"/>-->
                                                                <input type="hidden" name="vpc_OrderInfo" value="" size="20" maxlength="34"/>
                                                                <input type="hidden" name="vpc_Amount" value="" maxlength="10"/>
                                                                <input type="hidden" name="vpc_ReturnURL" size="65" value="http://coralsandshotel.com/booking_response.php" maxlength="250"/>
                                                                <input type="hidden" name="vpc_Locale" value="en_US" maxlength="10"/>
                                                                <input type="hidden" name="vpc_Currency" value="USD" maxlength="10"/>

                                                                <div class="row">
                                                                    <div class="col-xs-12 booking-navig" style="margin-top: 0px;">
                                                                        <div class="pull-left btn btn-default btn-nv btn-prev" id="btn-prev-1"  go="2">Previous</div>
                                                                        <div class="payment-imgs">
                                                                            <img src="images/payments/paymentimg1.jpg" alt=""/>
                                                                        </div>
                                                                        <button type="submit" id="btnSubmit" name="SubButL" class="btn btn-danger booking-btn pull-right bookingSubmit">PLACE BOOKING</button>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- Payment Gateway Form End-->

                                                            <!--</div>--> 
                                                            <div id="dismessage" style="text-align:center;"></div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="booking-price-wrap">
                                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 booking-price cart-desktop" id="cart">
                                                        <div class="cart-head">Your Price Summary</div>
                                                        <div class="price-box-container">
                                                            Number of Nights <span id="nights">0</span> & Number of Rooms <span id="cart-rooms">0</span> 
                                                            <b>Accommodation: </b><br/>US$ <span id="cart-rooms-price">0.00</span> <span class="strike-price"><b>US$ <span id="cart-price">0.00</span></b></span><hr style="margin-bottom:-6px;"/>
                                                            <span class="save-price"><b>You will save: US$ <span id="cart-save-price">0.00</span></b></span><hr style="margin-top:-4px;"/>
                                                            <div style="display: none;" id="hide-extrabeds"><b>Extra Beds: </b><br/>US$ <span id="cart-extrabeds">0.00</span><hr/></div>
                                                            <div style="display: none;" id="hide-supplement"><b>Child Supplement: </b><br/>US$ <span id="cart-supplement">0.00</span><hr/></div>
                                                            <b>Total Amount: </b><br/>US$ <span id="cart-subtotal">0.00</span><hr/>
                                                            <!--<b><span id="percentage"><?php echo $percentage; ?></span>% Discount:</b><br/>US$ <span id="cart-percentage">0.00</span><hr/>-->
                                                            <!--<b><span id="vat" vat="15">5</span>% VAT & 10% Service:</b><br/>US$ <span id="cart-vat">0.00</span><hr/>-->
                                                            <b><span id="percentage"><?php echo $percentage; ?></span>% Advance Payment: </b><br/>US$ <span id="cart-total">0.00</span><br/>  
                                                            <input type="hidden" id="discount-pe-day">
                                                        </div>
                                                        <!--                                                        <ul>
                                                                                                                    <li> no charge for children under 5 years sharing the parents' bed</li>
                                                                                                                    <li> suppliment of US$ 25 per child (5-11 + years) sharing a single / double room</li>
                                                                                                                    <li> suppliment of US$ 35 for an extra person aged above 12 years </li>
                                                                                                                </ul>-->
                                                        <div class="cart-head">Terms and Conditions</div>
                                                        <div class="cart-head2">
                                                            <ul class="cart-head2-ul">
                                                                <li class="cart-head2-li"> No charge for children under 5 years sharing the parents' bed</li>
                                                                <li class="cart-head2-li"> Supplement of US$ 25 per child (5-11 + years) sharing a single / double room</li>
                                                                <li class="cart-head2-li"> Supplement of US$ 35 for an extra person aged above 12 years </li>
                                                            </ul>
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

        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Sweet alert 2 -->
        <script type="text/javascript" src="js/plugins/sweet-alert-2/sweetalert2.min.js"></script>

        <!-- Garand sticky -->
        <script type="text/javascript" src="js/plugins/garand-sticky/jquery.sticky.js"></script>

        <!-- Jquery loader -->
        <script type="text/javascript" src="js/plugins/jquery-loading/jquery.loadingModal.min.js"></script>

        <!-- Country select -->
        <script type="text/javascript" src="js/plugins/country-select/js/countrySelect.min.js"></script>
        <script>$("#txtCountry").countrySelect();</script>

        <script src="js/booking.js" type="text/javascript"></script>
        <script src="js/ajax/booking.js" type="text/javascript"></script>
        <!--<script src="js/home-booking.js" type="text/javascript"></script>-->


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