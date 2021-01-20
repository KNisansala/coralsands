$(document).ready(function () {
    
    $('#change').click(function () {
        
        var percentage = $('#percentage').val();
        $.ajax({

            url: "ajax/prices/update-percentage.php",
            type: 'POST',
            data: { percentage: percentage },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    swal(
                            'Success...',
                            'Successfully Updated Percentage!',
                            'success'
                            );
                } else {
                    swal(
                            'Error...',
                            'Updating Percentage was Unsuccessfull!',
                            'error'
                            );
                }

            }

        });
        
    });
    
});