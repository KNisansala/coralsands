$(window).load(function () {

    $(".send-email").click(function () {

        var bookingid = $(this).attr("id");



        $.ajax({

            url: "ajax/booking/send-email.php",

            type: "POST",

            data: {

                id: bookingid

            },

            dataType: "JSON",

            success: function (result) {

                if (result.status === 'success') {

                    swal(

                        'Success...',

                        'Email has been sent successfully...!',

                        'success'

                    );

                } else if (result.status === 'invalid_booking') {

                    swal(

                        'Error...',

                        'Invalid Booking Id...',

                        'error'

                    );

                } else {

                    swal(

                        'Error...',

                        'Emai was not sent...',

                        'error'

                    );

                }

            }

        });

    });

});





