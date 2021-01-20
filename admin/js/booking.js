$(window).load(function () {

    var year = $(".date").attr("year");
    var month = $(".date").attr("month");
    var day = $(".date").attr("day");
    var days_in_month = $(".date").attr("days-in-month");
    var roomtype = $(".roomtype").attr("roomid");


//    for (day = 1; day <= days_in_month; day++) {
//
//        var date = year + "-" + month + "-" + day;
//
//        $.ajax({
//            url: "ajax/booking/available.php",
//            type: "POST",
//            data: {
//                startdate: date,
//                type: roomtype,
//                days: day,
//                actionCurrentMonth: 'CURRENTMONTH'
//            },
//            dataType: "JSON",
//            success: function (result) {
//                $("#roomtype_" + result.day).val(result.rooms);
//            }
//        });
//    }
});

$(document).ready(function () {
    $("#right-arrow").click(function () {
        var oldyear = $(".date").attr("year");
        var oldmonth = $(".date").attr("month");
        var day = $(".date").attr("day");
        var days_in_month = $(".date").attr("days-in-month");
        var roomtype = $(".roomtype").attr("roomid");

        $.ajax({
            url: "ajax/booking/available.php",
            type: "POST",
            data: {
                year: oldyear,
                month: oldmonth,
                type: roomtype,
                actionNext: 'NEXT'
            },
            dataType: "JSON",
            success: function (result) {
                var year = result.newyear;
                var month = result.newmonth;
                var roomtype = result.roomtype;

                window.location.href = "calendar.php?year=" + year + "&month=" + month + "&roomtype=" + roomtype + "";

            }
        });

    });

    $("#left-arrow").click(function () {
        var oldyear = $(".date").attr("year");
        var oldmonth = $(".date").attr("month");
        var day = $(".date").attr("day");
        var days_in_month = $(".date").attr("days-in-month");
        var roomtype = $(".roomtype").attr("roomid");

        $.ajax({
            url: "ajax/booking/available.php",
            type: "POST",
            data: {
                year: oldyear,
                month: oldmonth,
                type: roomtype,
                actionPrev: 'PREV'
            },
            dataType: "JSON",
            success: function (result) {
                var year = result.newyear;
                var month = result.newmonth;
                var roomtype = result.roomtype;

                window.location.href = "calendar.php?year=" + year + "&month=" + month + "&roomtype=" + roomtype + "";

            }
        });

    });

    $(".roomtype").change(function (e) {


        var id = $(this).attr("day");

        var year = $(".date").attr("year");
        var month = $(".date").attr("month");
        var day = id;
        var roomtype = $("#roomtype_" + id).attr("roomid");
        var availableNow = $(this).attr('available');
        var newrooms = $("#roomtype_" + id).val();
        $.ajax({
            url: "ajax/booking/set-available.php",
            type: "POST",
            data: {
                date: year + '-' + month + '-' + day,
                type: roomtype,
                availablenow: availableNow,
                newrooms: newrooms
            },
            dataType: "JSON",
            success: function (result) {

//                if (result.error == 1) {
//                    swal(
//                            'Error...',
//                            'New availability must be less than current availability!',
//                            'error'
//                            );
//                    $('#roomtype_' + id).css('background-color', '#ff8080');
//                } else if ....

                if (result.success == 0) {
                    swal(
                            'Error...',
                            'Technical Error!',
                            'error'
                            );
                    $('#roomtype_' + id).css('background-color', '#ff8080');
                } else if (result.success == 1) {
                    $('#roomtype_' + id).css('background-color', '#68f291');

//                        swal(
//                                'Success...',
//                                'Successfully Updated!',
//                                'success'
//                                );
                }
                //location.reload();
            }
        });



    });

//    $(".roomtype").keypress(function (e) {
//        if ((e.keyCode == 13)) {
//
//            var id = $(this).attr("day");
//
//            var year = $(".date").attr("year");
//            var month = $(".date").attr("month");
//            var day = id;
//            var roomtype = $("#roomtype_" + id).attr("roomid");
//            var availableNow = $(this).attr('available');
//            var newrooms = $("#roomtype_" + id).val();
//            $.ajax({
//                url: "ajax/booking/set-available.php",
//                type: "POST",
//                data: {
//                    date: year + '-' + month + '-' + day,
//                    type: roomtype,
//                    availablenow: availableNow,
//                    newrooms: newrooms
//                },
//                dataType: "JSON",
//                success: function (result) {
//
//                    if (result.error == 1) {
//                        swal(
//                                'Error...',
//                                'New availability must be less than current availability!',
//                                'error'
//                                );
//                    } else if (result.success == 0) {
//                        swal(
//                                'Error...',
//                                'Technical Error!',
//                                'error'
//                                );
//                    } else if (result.success == 1) {
//                        swal(
//                                'Success...',
//                                'Successfully Updated!',
//                                'success'
//                                );
//                    }
//                    location.reload();
//                }
//            });
//
//        }
//
//    });
});







