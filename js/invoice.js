$(document).ready(function () {

    $('#btnPay').click(function (e) {

        var act = $(this).attr('act');
        if (act == 0) {
            e.preventDefault();
            swal(
                    'Error...',
                    'Invoice Already Expired!',
                    'error'
                    );
        }

    });

});
