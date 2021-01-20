$(document).ready(function () {

    $('#confirmpassword, #newpassword').on('keyup', function () {

        if ($('#confirmpassword').val() === $('#newpassword').val()) {

            $('#message').html('Password is matching').css('color', 'green');
//            $('#change-pass').prop('disabled', false);
        } else {
            $('#message').html('Password is not matching').css('color', 'red');
//            $('#change-pass').prop('disabled', true);
        }
    });

    $('#change-pass').click(function () {

        var oldPass = $.trim($('#oldpassword').val());
        var newPass = $.trim($('#newpassword').val());
        var confirmPass = $.trim($('#confirmpassword').val());
        var id = $('#userid').val();

        if (oldPass.length > 0) {
            if (newPass.length > 5) {
                if (confirmPass.length > 5) {

                    $.ajax({

                        url: "ajax/login/change-password.php",
                        type: 'POST',
                        data: {
                            oldpass: oldPass,
                            newpass: newPass,
                            confirmpass: confirmPass,
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (returndata) {

                            if (returndata.success === true) {
                                $('#oldpassword, #newpassword, #confirmpassword').val('');
                                $('#message').text('');
                                swal(
                                        'Success...',
                                        'Successfully Updated!',
                                        'success'
                                        );
                            } else if (returndata.success === false) {
                                swal(
                                        'Error...',
                                        'Update was Unsuccessful!',
                                        'error'
                                        );
                            } else if (returndata.error === 'password') {
                                swal(
                                        'Error...',
                                        'Old Password is Incorrect!',
                                        'error'
                                        );
                            } else if (returndata.error === 'match') {
                                swal(
                                        'Error...',
                                        'New Password and Confirm Password is not Matching!',
                                        'error'
                                        );
                            } else if (returndata.error === 'user') {
                                swal(
                                        'Error...',
                                        'Invalid User!',
                                        'error'
                                        );
                            }

                        }

                    });

                } else {
                    swal(
                            'Error...',
                            'Confirm Password Must be atleast 6 Characters Long!',
                            'error'
                            );
                }
            } else {
                swal(
                        'Error...',
                        'New Password Must be atleast 6 Characters Long!',
                        'error'
                        );
            }
        } else {
            swal(
                    'Error...',
                    'Please Enter Old Password!',
                    'error'
                    );
        }

    });

});