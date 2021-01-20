$(document).ready(function () {

    $('.update-discount').change(function () {

        var data = $(this).val();
        var disId = $(this).attr('disid');
        var column = $(this).attr('column');
   
//        alert([data, disId, column]);
        $.ajax({

            url: "ajax/prices/update-discount.php",
            type: 'POST',
            data: {
                id: disId,
                data: data,
                column: column
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    swal(
                            'Success...',
                            'Successfully Updated!',
                            'success'
                            );
                } else {
                    swal(
                            'Error...',
                            'Update Unsuccessful!',
                            'error'
                            );
                }

            }

        });

    });

    $('.delete-price').click(function () {

        var id = $(this).attr('priceid');

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it !'
        }).then((result) => {
            if (result.value) {

                $.ajax({

                    url: "ajax/prices/delete-room-price.php",
                    type: 'POST',
                    data: {id: id},
                    dataType: 'JSON',
                    success: function (returndata) {

                        if (returndata.status === 1) {
                            $('#price-row-' + returndata.id).remove();
                            swal(
                                    'Success...',
                                    'Successfully Removed Price!',
                                    'success'
                                    );
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

$('.delete-discount').click(function () {

    var id = $(this).attr('dis-id');

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it !'
    }).then((result) => {
        if (result.value) {

            $.ajax({

                url: "ajax/prices/delete-discount.php",
                type: 'POST',
                data: {id: id},
                dataType: 'JSON',
                success: function (returndata) {

                    if (returndata.status === 1) {
                        $('#dis-row-' + returndata.id).remove();
                        swal(
                                'Success...',
                                'Successfully Removed Invoice!',
                                'success'
                                );
                    } else {
                        swal(
                                'Error...',
                                'Removing Invoice Unsuccessfull!',
                                'error'
                                );
                    }

                }

            });

        }
    });

});