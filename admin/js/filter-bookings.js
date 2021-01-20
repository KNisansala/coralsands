$(document).ready(function () {
    $("#find").click(function () {
        $(".tablebody").empty();
        var date_1 = $("#date1").val();
        var date_2 = $("#date2").val();
        var bookingtype = $("#type").val();

        $.ajax({
            url: "ajax/booking/filter-bookings.php",
            type: "POST",
            data: {
                date1: date_1,
                date2: date_2,
                type: bookingtype,
                actionGetCount: 'GETCOUNT'
            },
            dataType: "JSON",
            success: function (result) {
                console.log(result);
                $("#bookings").val(result.count);

                $.each(result.details, function (key, data) {

                    if (result.count !== 0) {
                        $(".filtertable").show();
                        $.each(data, function (key, val) {
                            var status;
                            
                            if(val.status == 0) {
                                status='Unpaid';
                            } else if(val.status == 1) {
                                status='Paid';
                            } else {
                                status='Canceled';
                            }
                            
                            var html;


                            html = '<tr>\n\
                            <td>' + val.id + '</td>\n\
                            <td>' + val.date + '</td>\n\
                            <td>' + val.name + '</td>\n\
                            <td>' + val.check_in + '</td>\n\
                            <td>' + val.check_out + '</td>\n\
                            <td>' + val.total_price + '</td>\n\
                            <td>' + status + '</td>\n\
                            <td><a href="view-filterbooking.php?id=' + val.id + '&date1=' + result.date1 + '&date2=' + result.date2 + '"><i class="fa fa-eye" title="View Booking"></i></a></td>\n\
                            </tr>';


                            $(".tablebody").append(html);

                        });
                    } else {
                        $(".filtertable").hide();
                    }
                });
            }

        });

    });
    $("#date1").change(function () {
        $("#bookings").val("");
    });
    $("#date2").change(function () {
        $("#bookings").val("");
    });

});

$(window).load(function () {
    $(".filtertable").hide();

    $(".tablebody").empty();
    var date_1 = $("#date1").val();
    var date_2 = $("#date2").val();
    var bookingtype = $("#type").val();

    $.ajax({
        url: "ajax/booking/filter-bookings.php",
        type: "POST",
        data: {
            date1: date_1,
            date2: date_2,
            type: bookingtype,
            actionGetCount: 'GETCOUNT'
        },
        dataType: "JSON",
        success: function (result) {
            console.log(result);
            $("#bookings").val(result.count);

            $.each(result.details, function (key, data) {

                if (result.count !== 0) {
                    $(".filtertable").show();
                    $.each(data, function (key, val) {
                        var status;
                            
                            if(val.status == 0) {
                                status='Unpaid';
                            } else if(val.status == 1) {
                                status='Paid';
                            } else {
                                status='Canceled';
                            }
                            
                        var html;


                        html = '<tr>\n\
                            <td>' + val.id + '</td>\n\
                            <td>' + val.date + '</td>\n\
                            <td>' + val.name + '</td>\n\
                            <td>' + val.check_in + '</td>\n\
                            <td>' + val.check_out + '</td>\n\
                            <td>' + val.total_price + '</td>\n\
                            <td>' + status + '</td>\n\
                            <td><a href="view-filterbooking.php?id=' + val.id + '&date1=' + result.date1 + '&date2=' + result.date2 + '"><i class="fa fa-eye" title="View Booking"></i></a></td>\n\
                            </tr>';


                        $(".tablebody").append(html);

                    });
                } else {
                    $(".filtertable").hide();
                }
            });
        }

    });

});



