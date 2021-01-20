$(window).scroll(function () {
    if ($(window).width() > 995) {

        var scrolled = $(window).scrollTop(),
                height = 300,
//            footer = 1200,

                _cart = $('body .cart-desktop');

        if (scrolled >= height) {
            _cart.addClass('fixed-cart');

//        if(scrolled >= footer) {
//            _cart.removeClass('fixed-cart');
//        }
        } else {
            _cart.removeClass('fixed-cart');
        }
    } 
});

