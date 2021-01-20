var tabbing = false;

$(document).ready(function () {

//    $("#cart").sticky({topSpacing:150});

    $(".prices-list").change(function () {

        $(".each-room-type").each(function (index) {

            var typeOfThis = $(this).attr('typeid');

            var rooms = parseInt($("#" + typeOfThis + "-available").text());
            $('.type-of-' + typeOfThis).children().removeAttr('disabled style');

            var selectedRms = 0;

            $(".type-of-" + typeOfThis).each(function (index) {
                selectedRms += parseInt($(this).val());
            });

            var leftRms = rooms - selectedRms;
            var thisRms = 0;

            $(".type-of-" + typeOfThis).each(function (index) {

                thisRms = parseInt($(this).find('option:selected').val());
                var availableThis = leftRms + thisRms;
                var selectableRms = 0;

                if (thisRms < availableThis) {
                    selectableRms = availableThis;
                } else {
                    selectableRms = thisRms;
                }

                for (var i = 1; i <= rooms; i++) {
                    if (i > selectableRms) {
                        $(this).children('option[value="' + i + '"]').attr({disabled: 'disabled', style: 'display:none;'});
                    }
                }
            });

        });

        var selectedRooms = $(this).val();
        var selectedType = $(this).attr('rtype');
        var typeName = $(this).attr('typename');
        var basisName = $(this).attr('basisname');
        var typeId = $(this).attr('rtype');
        var basisId = $(this).attr('rbasis');
        var typeAndBasis = this.id;
        var getType = '#typedata-' + selectedType;
        var adults = $(getType).attr('adults');
        var children = $(getType).attr('children');
        var extrabeds = $(getType).attr('extrabeds');
        var ebPrice = $(getType).attr('eb-price');
        var oneRoomPrice = $("#" + typeAndBasis + " option[value='1']").attr('each-price');

        var adultsHtml = null;
        for (var i = 1; i <= adults; i++) {
            adultsHtml += '<option value="' + i + '">' + i + '</option>';
        }
        var childrenHtml = '<option value="0">0</option>';
        for (var i = 1; i <= children; i++) {
            childrenHtml += '<option value="' + i + '">' + i + '</option>';
        }
        var bedsHtml = '<option value="0">0</option>';
        for (var i = 1; i <= extrabeds; i++) {
            bedsHtml += '<option value="' + i + '">' + i + '</option>';
        }

        $('#room-details').show();
        $('.selected-type-' + typeAndBasis).remove();
        var roomDatas = null;
        var finalDatas = null;
        for (var i = 1; i <= selectedRooms; i++) {

            var uniqueId = typeAndBasis + '-' + i;
            finalDatas = '<tr class="data-removal selected-type-' + typeAndBasis + ' room-type-' + typeId + ' room-basis-' + basisId + '">\n\
                            <td id="fin-type-' + uniqueId + '">' + typeName + ' - ' + basisName + '</td>\n\
                            <td id="fin-extrabeds-' + uniqueId + '">0</td>\n\
                            <td id="fin-adults-' + uniqueId + '">1</td>\n\
                            <td id="fin-children-' + uniqueId + '">0</td>\n\
                          </tr>';
            roomDatas = '<div class="row data-removal each-room selected-type-' + typeAndBasis + ' room-type-' + typeId + ' room-basis-' + basisId + '">\n\
                            <div class="col-xs-12"><h6 style="margin-bottom: -4px;">' + typeName + ' - ' + basisName + '</h6></div>\n\
                            <div class="col-xs-4">\n\
                                <div class="form-group ">\n\
                                    <label class="room-label">Extra Beds</label>\n\
                                    <span id="star">*</span>\n\
                                    <select name="extrabeds-' + uniqueId + '" id="extrabeds-' + uniqueId + '" typeof="extrabeds" oneprice="' + ebPrice + '" class="form-control to-final extrabeds extrabeds-type-' + typeId + ' extrabeds-basis-' + basisId + '">\n\
                                        ' + bedsHtml + '\n\
                                    </select>\n\
                                    <span id="spanExtrabeds-' + typeAndBasis + '"></span>\n\
                                </div>\n\
                            </div>\n\
                            <div class="col-xs-4">\n\
                                <div class="form-group ">\n\
                                    <label class="room-label">Adults</label>\n\
                                    <span id="star">*</span>\n\
                                    <select name="adults-' + uniqueId + '" id="adults-' + uniqueId + '" typeof="adults" class="form-control to-final adults adults-type-' + typeId + ' adults-basis-' + basisId + '">\n\
                                        ' + adultsHtml + '\n\
                                    </select>\n\
                                    <span id="spanAdult-' + typeAndBasis + '"></span>\n\
                                </div>\n\
                            </div>\n\
                            <div class="col-xs-4">\n\
                                <div class="form-group ">\n\
                                    <label class="room-label">Children</label>\n\
                                    <span id="star">*</span>\n\
                                    <select name="children-' + uniqueId + '" id="children-' + uniqueId + '" typeof="children" class="form-control to-final children children-type-' + typeId + ' children-basis-' + basisId + '">\n\
                                        ' + childrenHtml + '\n\
                                    </select>\n\
                                    <span id="spanChildren-' + typeAndBasis + '"></span>\n\
                                </div>\n\
                            </div>\n\
                            <input type="hidden" class="extra-bed-price" value="' + ebPrice + '"/>\n\
                            <input type="hidden" class="one-room-price" value="' + oneRoomPrice + '"/>\n\
                            <input type="hidden" class="this-room-type" value="' + typeId + '"/>\n\
                            <input type="hidden" class="this-room-basis" value="' + basisId + '"/>\n\
                        </div>';

            $("#roomdatas").append(roomDatas);
            $("#final-table").append(finalDatas);

        }

        allowSecondTab();
        allowThirdTab();
    });

    $('#roomdatas, .room-types').on('change', '.extrabeds, .prices-list', function () {

        var roomsCount = 0;
        var subTotal = 0.00;
        var roomsPrice = 0.00;
        var extraBedsPrice = 0.00;
        var vat = parseInt($("#vat").attr('vat'));
        var nights = parseInt($('#nights').text());
        var oneEB = 0.00;
        var totalExtraBeds = 0;

        $(".prices-list").each(function (index) {
            roomsCount += parseInt($(this).val());
            roomsPrice += parseFloat($(this).find('option:selected').attr('each-price'));
        });

        $(".extrabeds").each(function (index) {
            totalExtraBeds = parseInt($(this).val());
            oneEB = parseFloat($(this).attr('oneprice'));
            extraBedsPrice += oneEB * totalExtraBeds;
        });

        roomsPrice = roomsPrice * nights;
        extraBedsPrice = extraBedsPrice * nights;
        subTotal = roomsPrice + extraBedsPrice;
        var cartVat = subTotal / 100 * vat;
        var total = subTotal + cartVat;

        $("#cart-rooms").text(roomsCount);
        $("#cart-rooms-price").text(roomsPrice.toFixed(2));
        $("#cart-extrabeds").text(extraBedsPrice.toFixed(2));
        $("#cart-subtotal").text(subTotal.toFixed(2));
        $("#cart-vat").text(cartVat.toFixed(2));
        $("#cart-total").text(total.toFixed(2));

    });

    $('#roomdatas').on('change', '.children', function () {

        var childrenCount = parseInt($(this).val());

        $(this).parent().parent().siblings('.child-ages').remove();

        if (childrenCount > 0) {

            var options = '<option value="2" selected="">2</option>';
            for (var i = 3; i <= 12; i++) {
                options += '<option value="' + i + '">' + i + '</option>';
            }

            var ageBoxes = '';
            for (var i = 1; i <= childrenCount; i++) {
                ageBoxes += '<select class="form-control age-child" name="child-' + i + '" id="child-' + i + '">\n\
                            ' + options + '\n\
                            </select>';
            }

            var html = '<div class="col-xs-12 child-ages">\n\
                    <label class="room-label">Children Ages: </label>\n\
                    ' + ageBoxes + '\n\
                    </div>';

            $(this).parent().parent().parent().append(html);
        }

    });

    $("#btnSubmit").click(function (e) {
        e.preventDefault();

        var capt = $.trim($("#captchacode").val());
        if (capt.length > 0) {

            var datetime = new Date();
            var date = datetime.getFullYear() + "-" + datetime.getMonth() + "-" + datetime.getDate();
            var name = $("#txtFullName").val();
            var country = $("#txtCountry").val();
            var email = $("#txtEmail").val();
            var contact = $("#txtPhone").val();
            var checkin = $("#checkin").val();
            var checkout = $("#checkout").val();
            var message = $("#txtMessage").val();
            var total = $("#cart-total").text();
            var code = $('#captchacode').val();

            var roomTypes = [];

            $(".each-room").each(function (index) {

                var roomtype = $(this).children(".this-room-type").val();
                var roombasis = $(this).children(".this-room-basis").val();
                var roomprice = $(this).children(".one-room-price").val();
                var extrabedprice = $(this).children(".extra-bed-price").val();
                var noofextrabed = $(this).children().children(".form-group").children(".extrabeds").val();
                var nooadults = $(this).children().children(".form-group").children(".adults").val();
                var noofchildren = $(this).children().children(".form-group").children(".children").val();

                var childrenages = [];
                var arrString = null;

                $(this).children().children(".age-child").each(function (index) {

                    var age = $(this).val();

                    childrenages.push(age);
//                console.log(childrenages);

                });


                arrString = childrenages.join(", ");

                var roomType = [];

                roomType.push(roomtype);
                roomType.push(roombasis);
                roomType.push(roomprice);
                roomType.push(extrabedprice);
                roomType.push(noofextrabed);
                roomType.push(nooadults);
                roomType.push(noofchildren);
                roomType.push(arrString);

                roomTypes.push(roomType);

            });

            var bookedRooms = [];


            $(".each-room-type").each(function (index) {
                var typeid = $(this).attr("typeid");
                var noofrooms = 0;
                $("[rtype=" + typeid + "]").each(function (index) {
                    var rooms = $(this).val();

                    noofrooms += parseInt(rooms);
                });



                var bookedRoom = [];

                bookedRoom.push(typeid);
                bookedRoom.push(noofrooms);

                bookedRooms.push(bookedRoom);

            });

            $('#ayesh-1').val(code);
            $('#ayesh-2').val(date);
            $('#ayesh-3').val(name);
            $('#ayesh-4').val(country);
            $('#ayesh-5').val(email);
            $('#ayesh-6').val(contact);
            $('#ayesh-7').val(checkin);
            $('#ayesh-8').val(checkout);
            $('#ayesh-9').val(message);
            $('#ayesh-10').val(total);
            $('#ayesh-11').val(roomTypes);
            $('#ayesh-12').val(bookedRooms);
            $('#ayesh-13').val('ADDBOOKING');



//            $.ajax({
//                url: "ajax/booking/booking.php",
//                type: "POST",
//                data: {
//                    captchacode: code,
//                    bookingdate: date,
//                    cname: name,
//                    ccountry: country,
//                    cemail: email,
//                    ccontact: contact,
//                    checkindate: checkin,
//                    checkoutdate: checkout,
//                    msg: message,
//                    totalprice: total,
//                    roomtypes: roomTypes,
//                    bookedrooms: bookedRooms,
//                    actionAddBooking: 'ADDBOOKING'
//                },
//                dataType: "JSON",
//                success: function (result) {
//                    if (result.error === 1) {
//                        $('body').loadingModal('destroy');
//                        $('#captchacode').focus();
//                        swal(
//                                'Error...',
//                                'Incorrect security code!',
//                                'error'
//                                );
//
//                    } else if (result.error === 2) {
//                        swal(
//                                'Error...',
//                                'Technical error!',
//                                'error'
//                                );
//
//                    } else {
//                        var id = result.bookingid;
//                        var total = result.totalprice;
//                        var res = total.split(".");
//                        var totalprice1 = res[0] + res[1];
//
//                        $("input[name=vpc_Amount]").val(totalprice1);
//                        $("input[name=vpc_OrderInfo]").val(id);
//
//                        $("#payments").submit();
//                    }
//                }
//            });

        } else {
            $('#captchacode').focus();
            swal(
                    'Error...',
                    'Please enter security code!',
                    'error'
                    );
        }

    });

    $(".prices-list").change(function () {

        var roomtype = $(this).attr("roomtype");
        var roombasis = $(this).attr("roombasis");
        var noofrooms = $(this).val();

    });

    $(".btn-next, .all-tabs").click(function () {

        $('#final-checkin').text($('#checkin').val());
        $('#final-checkout').text($('#checkout').val());
        $('#final-txtCountry').text($('#txtCountry').val());

        var id = this.id;

        if (checkDate('#checkin')) {

            if (checkDate('#checkout')) {

                if (checkRoomSelection()) {

                    if ((id === 'btn-next-2') || (id === 'tab-of-yours')) {
                        var go = parseInt($(this).attr('go')) - 1;
                        $('#booking-tabs li:eq(' + go + ') a').tab('show');
                        $('html, body').stop().animate({
                            scrollTop: $(".cpadding_top").offset().top
                        }, 1000);
                    }

                    if ((id === 'btn-next-3') || (id === 'tab-of-booking')) {
                        //#txtCountry, #txtEmail, #txtFullName, #txtMessage, #txtPhone
                        var checkr = 0;
                        var errorMsg = null;
                        var focussing = null;
                        $(".customer-data").each(function (index) {
                            if (checkStr('#' + this.id) === false) {
                                checkr += 1;
                                if (errorMsg === null) {
                                    errorMsg = $('#id-of-' + this.id).text();
                                    focussing = this.id;
                                }
                            } else {
                                if (this.id === 'txtEmail') {
                                    if (!validateEmail($(this).val())) {
                                        checkr += 1;
                                        errorMsg = 'a valid email';
                                        focussing = 'txtEmail';
//                                        swal(
//                                                'Error...',
//                                                'Please enter a valid email!',
//                                                'error'
//                                                );
                                    }
                                }
                            }
                        });
                        if (checkr === 0) {
                            var go = parseInt($(this).attr('go')) - 1;
                            $('#booking-tabs li:eq(' + go + ') a').tab('show');
                            $('html, body').stop().animate({
                                scrollTop: $(".cpadding_top").offset().top
                            }, 1000);
                        } else {
                            $('#' + focussing).focus();
                            swal(
                                    'Error...',
                                    'Please enter ' + errorMsg + '!',
                                    'error'
                                    );
                        }

                    }

                } else {
                    swal(
                            'Error...',
                            'Please select atleast one room!',
                            'error'
                            );
                }

            } else {
                $('#checkout').focus();
                swal(
                        'Error...',
                        'Please enter departure date!',
                        'error'
                        );
            }

        } else {
            $('#checkin').focus();
            swal(
                    'Error...',
                    'Please enter arrival date!',
                    'error'
                    );
        }

    });

    $('.btn-prev').click(function () {
        var go = parseInt($(this).attr('go')) - 1;

        $('#booking-tabs li:eq(' + go + ') a').tab('show');

        $('html, body').stop().animate({
            scrollTop: $(".cpadding_top").offset().top
        }, 1000);
    });



    $(".person-data").change(function () {

        var fId = '#final-' + this.id;
        $(fId).text($(this).val());

    });

    $('#roomdatas').on('change', '.to-final', function () {

        var idOf = '#fin-' + this.id;
        $(idOf).text($(this).val());


    });

    $(window).load(function () {

        $('#tab-of-yours, #tab-of-booking').prop('disabled', true);

    });

    $('#txtCountry, #txtEmail, #txtFullName, #txtMessage, #txtPhone').change(function () {
        allowThirdTab();
    });

});

function allowSecondTab() {
    var date1 = $.trim($("#checkin").val());
    var date2 = $.trim($("#checkout").val());

    if ((date1.length > 0) && (date2.length > 0)) {

        var selectCount = 0;
        $(".prices-list").each(function (index) {
            selectCount += parseInt($(this).val());
        });

        if (selectCount > 0) {
            $('#tab-of-yours').prop('disabled', false);
            tabbing = true;
        } else {
            $('#tab-of-yours').prop('disabled', true);
            tabbing = false;
        }
    } else {
        $('#tab-of-yours').prop('disabled', true);
        tabbing = false;
    }
}

function allowThirdTab() {

    var name = $.trim($("#txtFullName").val());
    var country = $.trim($("#txtCountry").val());
    var email = $.trim($("#txtEmail").val());
    var phone = $.trim($("#txtPhone").val());
    var msg = $.trim($("#txtMessage").val());

    if ((name.length > 0) && (country.length > 0) && (email.length > 0) && (validateEmail(email)) && (phone.length > 0) && (msg.length > 0) && (tabbing === true)) {
        $('#tab-of-booking').prop('disabled', false);
    } else {
        $('#tab-of-booking').prop('disabled', true);
    }

}

function checkDate(dateId) {
    var res;
    var date = $.trim($(dateId).val());
    if (date.length > 0) {
        res = true;
    } else {
        res = false;
    }
    return res;
}
function checkRoomSelection() {
    var res;
    var selectCount = 0;
    $(".prices-list").each(function (index) {
        selectCount += parseInt($(this).val());
    });
    if (selectCount > 0) {
        res = true;
    } else {
        res = false;
    }
    return res;
}
function checkStr(strId) {
    var res;
    var str = $.trim($(strId).val());
    if (str.length > 0) {
        res = true;
    } else {
        res = false;
    }
    return res;
}
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,8})?$/;
    return emailReg.test($email);
}


$(document).ajaxStart(function () {
    $('body').loadingModal({
        position: 'auto',
        text: '',
        color: '#05e0e9',
        opacity: '0.5',
        backgroundColor: 'rgb(0,0,0)',
        animation: 'foldingCube'
    });
});
$(document).ajaxStop(function () {
    $('body').loadingModal('destroy');
});
