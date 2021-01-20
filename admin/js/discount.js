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