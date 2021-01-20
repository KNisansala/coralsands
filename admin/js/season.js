$(document).ready(function () {

    $('.delete-season-price').click(function () {

        var start = $(this).attr('start');
        var end = $(this).attr('end');


        swal({
            title: 'Are you sure?',
            text: "This Will Remove all the Pricess related to this season,You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it !'
        }).then((result) => {
            if (result.value) {

                $.ajax({

                    url: "ajax/prices/delete-season.php",
                    type: 'POST',
                    data: {
                        start: start,
                        end: end
                    },
                    dataType: 'JSON',
                    success: function (returndata) {

                        if (returndata.status === 1) {
                            swal(
                                    'Success...',
                                    'Successfully Removed Price!',
                                    'success'
                                    );
                            window.location.reload();
                        } else {
                            swal(
                                    'Error...',
                                    'Removing Price Unsuccessful!',
                                    'error'
                                    );
                        }

                    }

                });

            }
        });

    });

});