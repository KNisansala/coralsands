$(document).ready(function () {

    setRooms();

    $("#checkin, #checkout").change(function () {
        setRooms();
        tabDis();
    });

});

function setRooms() {

    var date1 = $.trim($("#checkin").val());
    var date2 = $.trim($("#checkout").val());

//clear data
    $("#cart-rooms").text('0');
    $("#cart-extrabeds").text('0.00');
    $("#cart-rooms-price").text('0.00');
    $("#cart-subtotal").text('0.00');
    $("#cart-vat").text('0.00');
    $("#cart-total").text('0.00');
    $('#cart-price').text('0');
    $('#cart-save-price').text('0');
    $(".data-removal").remove();
    $("#roomdatas").hide();

    if ((date1.length > 0) && (date2.length > 0))
    {

        var checkin = $("#checkin").val();
        var checkout = $("#checkout").val();

        $.ajax({

            url: "ajax/booking/get-prices.php",
            type: 'POST',
            data: {checkin: checkin, checkout: checkout},
            dataType: 'JSON',
            success: function (returndata) {
                

                $.each(returndata, function (key, value) {


                    if (value.available <= 0) {
                        $('#main-room-tab-' + value.parent).hide();
                        $('#main-room-alert-' + value.parent).show();

                    } else {

                        $('#main-room-tab-' + value.parent).show();
                        $('#main-room-alert-' + value.parent).hide();
                        $("#" + key + "-available").text(value.available);
                        var available = parseInt($("#" + key + "-available").text());

                        $('#nights').text(value.days);
                        $('#discount-pe-day').val(value.discount);
//                       
                        $.each(value.prices, function (index, price) {
//                            
                            if (value.status === 'same') {
                                var selectId = key + '-' + index;
                                $('#' + selectId).empty();

                                var html = '<option selected="" value="0" each-price="0">- Please Select -</option>';
                                for (var i = 1; i <= available; i++) {

                                    price = (parseFloat(price)).toFixed(2);
                                    var thisPrice = (price * i).toFixed(2);

                                    if (!thisPrice.trim() || isNaN(thisPrice)) {
                                        $('#main-room-tab-' + value.parent).hide();
                                        $('#main-room-alert-' + value.parent).show();
                                    }

                                    var letterS = 's';
                                    if (i === 1) {
                                        letterS = '';
                                    }

                                    var discount = parseInt($('#discount-pe-day').val());
                                    html += '<option value="' + i + '" each-price="' + thisPrice + '" status="same">' + i + ' Room' + letterS + ' - US$ ' + ((parseInt(thisPrice)) + (discount * i)) * value.days + '</option>';

                                }

                                $('#' + selectId).append(html);
                            } else if (value.status === 'different') {
                                var selectId = key + '-' + index;
                                $('#' + selectId).empty();
                                
                                var html = '<option selected="" value="0" each-price="0">- Please Select -</option>';
                                for (var i = 1; i <= available; i++) {

                                    price = (parseFloat(price)).toFixed(2);
                                    var thisPrice = (price * i).toFixed(2);

                                    if (!thisPrice.trim() || isNaN(thisPrice)) {
                                        $('#main-room-tab-' + value.parent).hide();
                                        $('#main-room-alert-' + value.parent).show();
                                    }

                                    var letterS = 's';
                                    if (i === 1) {
                                        letterS = '';
                                    }

                                    var discount = parseInt($('#discount-pe-day').val());
                                    html += '<option value="' + i + '" each-price="' + thisPrice + '" status="different">' + i + ' Room' + letterS + ' - US$ ' + ((parseInt(thisPrice)) + (discount * i * value.days)) + '</option>';

                                }

                                $('#' + selectId).append(html);
                            }



                        });
                    }

                });

            }

        });

    }

}

function tabDis() {
    $('#tab-of-yours').prop('disabled', true);
    $('#tab-of-booking').prop('disabled', true);
}