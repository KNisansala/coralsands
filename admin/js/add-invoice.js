$(document).ready(function () {

    $('#add').click(function () {

        tinyMCE.triggerSave();

        var date = $('#date').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var description = $('#description').val();
        var amount = $('#amount').val();
        var due = $('#due').val();

        $('#date').css('border', 'solid 1px #d2d6de');
        $('#name').css('border', 'solid 1px #d2d6de');
        $('#email').css('border', 'solid 1px #d2d6de');
        $('#description').css('border', 'solid 1px #d2d6de');
        $('#amount').css('border', 'solid 1px #d2d6de');
        $('#due').css('border', 'solid 1px #d2d6de');

        if ($.trim(date) == '') {
            swal('Error.', 'Please eneter the invoice date.', 'error');
            $('#date').focus();
            $('#date').css('border', 'solid 1px red');
        } else if ($.trim(name) == '') {
            swal('Error.', 'Please eneter the name.', 'error');
            $('#name').focus();
            $('#name').css('border', 'solid 1px red');
        } else if ($.trim(email) == '') {
            swal('Error.', 'Please eneter the email.', 'error');
            $('#email').focus();
            $('#email').css('border', 'solid 1px red');
        } else if ($.trim(description) == '') {
            swal('Error.', 'Please eneter the invoice details.', 'error');
            $('#description').focus();
            $('#description').css('border', 'solid 1px red');
        } else if ($.trim(amount) == '') {
            swal('Error.', 'Please eneter the amount.', 'error');
            $('#amount').focus();
            $('#amount').css('border', 'solid 1px red');
        } else if ($.trim(due) == '') {
            swal('Error.', 'Please eneter the due date.', 'error');
            $('#due').focus();
            $('#due').css('border', 'solid 1px red');
        } else {

            $.ajax({

                url: "ajax/invoices/add-invoice.php",
                type: 'POST',
                data: {
                    date: date,
                    name: name,
                    email: email,
                    description: description,
                    amount: amount,
                    due: due
                },
                dataType: 'JSON',
                success: function (returndata) {

                    if (returndata.status === 2) {
                        $('.to-clear').val('');
                        tinyMCE.activeEditor.setContent('');
                        swal(
                                'Success...',
                                'Successfully Created Invoice!',
                                'success'
                                );
                    } else if (returndata.status === 1) {
                        $('.to-clear').val('');
                        swal(
                                'Error...',
                                'Error Sending Email BUT Invoice was Created!',
                                'error'
                                );
                    } else {
                        swal(
                                'Error...',
                                'Error Creating Invoice!',
                                'error'
                                );
                    }

                }

            });

        }


    });

});