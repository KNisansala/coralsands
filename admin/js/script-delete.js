$(document).ready(function () {
    $('.delete-booking').click(function () {
        swal({
        title: 'Are you sure?',
                text: "Are you really want delete this booking?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it !'
        }).then((result) => {
        if (result.value) {
        var bookingid = $(this).attr('id');
        var checkin = $(this).attr('checkin');
        var checkout = $(this).attr('checkout');

        $.ajax({
            url: "ajax/booking/delete-unpaid-booking.php",
            type: "POST",
            data: {
                id: bookingid,
                checkin: checkin,
                checkout: checkout
            },
            dataType: "JSON",
            success: function (result) {
                if (result.status === 'success') {
                    $('#booking-id-' + result.id).remove();
                    swal(
                            'Success...',
                            'Successfully Removed Booking!',
                            'success'
                            );
                } else {
                    swal(
                            'Error...',
                            'Removing Booking Unsuccessfull!',
                            'error'
                            );
                }


            }
        });

        }
    });
    });    
});

