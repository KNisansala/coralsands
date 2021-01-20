$(document).ready(function () {

    $('.resend-mail').click(function () {

        var id = $(this).attr('inv-id');

        $.ajax({

            url: "ajax/invoices/resend-mail.php",
            type: 'POST',
            data: {id: id},
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    swal(
                            'Success...',
                            'Successfully Re-sent Invoice!',
                            'success'
                            );
                } else {
                    swal(
                            'Error...',
                            'Re-sending Unsuccessfull!',
                            'error'
                            );
                }

            }

        });

    });

    $('.update-inv').click(function () {

        var id = $(this).attr('inv-id');

        $.ajax({
            url: "ajax/invoices/get-invoice.php",
            type: 'POST',
            data: {id: id},
            dataType: 'JSON',
            success: function (invoice) {
                console.log(invoice);
                $('#update').attr('inv-id', invoice.id);
                $('#date').val(invoice.date);
                $('#name').val(invoice.customer_name);
                $('#email').val(invoice.email);
                tinymce.activeEditor.setContent(invoice.description);
                $('#amount').val(invoice.amount);
                $('#due').val(invoice.due_date);

                $('#update-form').hide();
                $('#update-form').fadeIn().show();
                $('html, body').animate({scrollTop: $('#scrol-top').position().top}, 'slow');
            }
        });


    });

    $('.status-class').on('click', '.delete-inv', function () {
//    $('.delete-inv').click(function () {

        var id = $(this).attr('inv-id');

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

                    url: "ajax/invoices/delete-invoice.php",
                    type: 'POST',
                    data: {id: id},
                    dataType: 'JSON',
                    success: function (returndata) {

                        if (returndata.status === 1) {
                            $('#inv-row-' + returndata.id).remove();
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

    $('#update').click(function () {
        tinyMCE.triggerSave();
        var id = $(this).attr('inv-id');
        var date = $('#date').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var description = $('#description').val();
        var amount = $('#amount').val();
        var due = $('#due').val();


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
        } else if ($.trim(amount) == '' || parseFloat(amount) < 1) {
            swal('Error.', 'Please eneter the valid amount.', 'error');
            $('#amount').focus();
            $('#amount').css('border', 'solid 1px red');
        } else if ($.trim(due) == '') {
            swal('Error.', 'Please eneter the due date.', 'error');
            $('#due').focus();
            $('#due').css('border', 'solid 1px red');
        } else {

            $.ajax({

                url: "ajax/invoices/update-invoice.php",
                type: 'POST',
                data: {
                    id: id,
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
                        $('#date-' + id).text(date);
                        $('#name-' + id).text(name);
                        $('#email-' + id).text(email);
                        $('#description-' + id).text(description);
                        $('#amount-' + id).text(amount);
                        $('#due-' + id).text(due);
                        $('#update-form').fadeOut().hide();
                        swal(
                                'Success...',
                                'Invoice was Updated!',
                                'success'
                                );
                    } else if (returndata.status === 1) {
                        $('#date-' + id).text(date);
                        $('#name-' + id).text(name);
                        $('#email-' + id).text(email);
                        $('#description-' + id).text(description);
                        $('#amount-' + id).text(amount);
                        $('#due-' + id).text(due);
                        $('#update-form').fadeOut().hide();
                        swal(
                                'Error...',
                                'Error Sending Email BUT Invoice Updated!',
                                'error'
                                );
                    } else {
                        swal(
                                'Error...',
                                'Error Updating Invoice!',
                                'error'
                                );
                    }

                }

            });
        }
    });

    $('.refund-inv').click(function () {

        $('#do-refund').attr('inv-id', $(this).attr('inv-id'));
        $("#myModal").modal('show');

    });

    $('#do-refund').click(function () {

        var id = $(this).attr('inv-id');
        var amount = $('#ref-amount').val();
        var reason = $('#ref-reason').val();
        var date = $('#ref-date').val();

        $("#myModal").modal('hide');

        $.ajax({

            url: "ajax/invoices/refund-invoice.php",
            type: 'POST',
            data: {
                id: id,
                amount: amount,
                reason: reason,
                date: date
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    $('#status-' + returndata.id).text('');
                    $('#status-' + returndata.id).html('<span class="text-warning">Refund</span> <span class="btn btn-danger pull-right delete-inv" inv-id="' + returndata.id + '"><i class="fa fa-trash" aria-hidden="true"></i></span><span class="btn btn-info pull-right refund-view" inv-id="' + returndata.id + '" style="margin-right: 2px;"><i class="fa fa-info-circle" aria-hidden="true"></i></span>');
                    $('#ref-amount, #ref-date, #ref-reason').val('');

                    swal(
                            'Success...',
                            'Successfully Marked Refund!',
                            'success'
                            );
                } else {
                    swal(
                            'Error...',
                            'Marking Refund Unsuccessfull!',
                            'error'
                            );
                }

            }

        });

    });

    $('#close-form').click(function () {

        $('#update-form').fadeOut();

    });

    $('.status-class').on('click', '.refund-view', function () {

        var id = $(this).attr('inv-id');

        $.ajax({

            url: "ajax/invoices/view-refund.php",
            type: 'POST',
            data: {id: id},
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {

                    swal({
                        title: '<h2><b class="text-info">Refund Details for #' + returndata.id + '</b></h2><hr/>',
                        html: '<table class="refund-box"><tr><td>Amount:</td><td>$' + returndata.amount + '</td></tr><br/><tr><td>Date:</td><td>' + returndata.date + '</td></tr><br/><tr><td>Reason:</td><td>' + returndata.reason + '</td></tr></table>'
                    });
                } else {
                    swal(
                            'Error...',
                            'Details can not be viewed!',
                            'error'
                            );
                }

            }

        });

    });

    $('.paid-view').click(function () {

        var id = $(this).attr('inv-id');
        window.location.replace("https://www.coralsandshotel.com/admin/view-invoices.php?id="+id);

//        $.ajax({
//
//            url: "ajax/invoices/view-paid.php",
//            type: 'POST',
//            data: {id: id},
//            dataType: 'JSON',
//            success: function (returndata) {
//
//                if (returndata.status === 1) {
//
//                    swal({
//                        title: '<h2><b class="text-info">Payment Details : #2500' + returndata.id + '</b></h2><hr/>',
//                        html: '<table class="refund-box"><tr><td>Amount:</td><td>$' + returndata.amount + '</td></tr><tr><td>Date:</td><td>' + returndata.date + '</td></tr><tr><td>Reference Number:</td><td>' + returndata.reference + '</td></tr></table>'
//                    });
//                } else {
//                    swal(
//                            'Error...',
//                            'Viewing Unsuccessfull!',
//                            'error'
//                            );
//                }
//
//            }
//
//        });

    });

});