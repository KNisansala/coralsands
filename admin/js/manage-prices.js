$(document).ready(function () {

    $('.update-price').change(function () {

        var data = $(this).val();
        var priceId = this.id;
        var column = $(this).attr('column');

        $.ajax({

            url: "ajax/prices/update-room-price.php",
            type: 'POST',
            data: {
                id: priceId,
                data: data,
                column: column
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
					$('#'+priceId).css({"background-color":"green"}); 
                } else {
                     $('#'+priceId).css({"background-color":"red"}); 
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