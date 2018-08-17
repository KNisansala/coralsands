<?php
$date = date("Y-m-d");
$priceD = RoomPrice::getPrice(4, 1, $date);
if (!$priceD) {
    $priceD = DefaultRoomPrice::getPriceByIds(4, 1);
}
$priceS = RoomPrice::getPrice(7, 1, $date);
if (!$priceS) {
    $priceS = DefaultRoomPrice::getPriceByIds(7, 1);
}
?>
<div class="kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme">
    <div class="kl-loader">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewbox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"><path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path><path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z" transform="rotate(98.3774 20 20)"><animatetransform attributetype="xml" attributename="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatcount="indefinite"></animatetransform></path></svg>
    </div>
    <div class="bgback">
    </div>
    <div class="th-sparkles">
    </div>
    <div class="iosSlider kl-slideshow-inner animateme" data-trans="6000" data-autoplay="1" data-infinite="true" data-when="span" data-from="0" data-to="0.75" data-translatey="300" data-easing="linear">
        <div class="kl-iosslider hideControls">
            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url(images/slider-image/slider1.jpg);">
                </div>
                <div class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle">
                    <!-- Captions animateme wrapper -->
                    <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                        <!-- Main Big Title -->
                        <h2 class="main_title has_titlebig kl-ios-has-sqbox">
                            <span class="kl-ios-sqbox"></span>
                            <span>WELCOME TO<br><strong>CORAL SANDS HOTEL</strong></span>
                        </h2>
                        <!-- Main Big Title -->

                        <!-- Big Title -->
                        <div class="main-slider-topic"><h3 class="title_big"><strong>HIKKADUWA </strong><br>
                                    SRI LANKA</h3></div>
                        <!--/ Big Title -->

                        <!-- Link more buttons -->
                        <div class="more">
                            <!-- Button full color style -->
                        </div>
                        <!--/ Link more buttons -->
                    </div>
                    <!--/ Captions animateme wrapper -->
                </div>
            </div>
            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url('images/slider-image/slider2.jpg');">
                </div>
                <div class="container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle">
                    <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                    </div>
                    <!-- Captions animateme wrapper -->
                    <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                        <!-- Small Title -->
                        <h3 class="title_big" style="margin-bottom: 20px;"><strong>DELUXE ROOMS</strong></h3>
                        <!--/ Small Title -->
                        <!-- Big Title -->
                        <h3 class="title_big rooms">
                            From US$ <?php echo round($priceD['price']); ?> <span style="font-size: 14px;">per night</span>
                        </h3>
                        <!--/ Big Title -->

                        <!-- Link more button -->
                        <a class="more" href="booking.php" target="_self">BOOK NOW</a>
                        <!--/ Link more button -->

                    </div>
                </div>
                <div id="dl-room-1" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-3.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
                <div id="dl-room-2" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-2.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
                <div id="dl-room-3" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-1.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
            </div>
            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url(images/slider-image/slider3.jpg);">
                </div>
                <div class="kl-slide-overlay">
                </div>
                <div class="container kl-iosslide-caption kl-ioscaption--style4 fromright klios-alignright kl-caption-posv-middle">
                    <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                    </div>
                    <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">

                        <!-- Small Title -->
                        <h4 class="title_big" style="margin-bottom: 20px;"><span style="ff-alternative">STANDARD ROOMS</span></h4>
                        <!--/ Small Title -->
                        <!-- Big Title -->
                        <h3 class="title_big rooms">
                            <span style="ff-alternative">
                                From US$ <?php echo round($priceS['price']); ?> <span style="font-size: 14px;">per night</span>
                            </span>
                        </h3>
                        <!--/ Big Title -->

                        <!-- Link button -->
                        <a class="more " href="booking.php" target="_self">BOOK NOW</a>
                        <!--/ Link button -->

                    </div>
                </div> 
                <div id="dl-room-4" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle  hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-6.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
                <div id="dl-room-5" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-5.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
                <div id="dl-room-6" class="container kl-iosslide-caption kl-ioscaption--style5 zoomin klios-aligncenter kl-caption-posv-middle hidden-sm hidden-xs hidden-xxs">
                    <img  src="images/slider-image/deluxe-room-th-4.jpg" class="main_title has_titlebig kl-ios-has-sqbox room-thum-slider"/>
                </div>
            </div>
            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url(images/slider-image/slider4.jpg);">
                </div>
            </div>
            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url(images/slider-image/slider5.jpg);">
                </div>
            </div>

            <div class="item iosslider__item">
                <div class="slide-item-bg" style="background-image:url(images/slider-image/slider8.jpg);">
                </div>
            </div>

        </div>
        <div class="kl-iosslider-prev">
            <span class="thin-arrows ta__prev"></span>
            <div class="btn-label">
                PREV
            </div>
        </div>
        <div class="kl-iosslider-next">
            <span class="thin-arrows ta__next"></span>
            <div class="btn-label">
                NEXT
            </div>
        </div>
    </div>
    <div class="kl-ios-selectors-block bullets2">
        <div class="selectors">
            <div class="item iosslider__bull-item first">
            </div>
            <div class="item iosslider__bull-item">
            </div>
            <div class="item iosslider__bull-item">
            </div>
            <div class="item iosslider__bull-item">
            </div>
            <div class="item iosslider__bull-item">
            </div>
            <div class="item iosslider__bull-item">
            </div>
        </div>
    </div>
    <div class="scrollbarContainer">
    </div>
    <div class="kl-bottommask kl-bottommask--shadow_ud">
    </div>
</div>