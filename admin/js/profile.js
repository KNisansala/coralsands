$(document).ready(function () {

    $('#edit-profile').click(function () {

        var username = $.trim($('#username').val());
        var name = $.trim($('#name').val());
        var password = $.trim($('#password').val());
        var id = $('#userid').val();

        if (username.length > 0) {
            if (name.length > 0) {
                if (password.length > 0) {

                    $.ajax({

                        url: "ajax/login/profile.php",
                        type: 'POST',
                        data: {
                            username: username,
                            name: name,
                            password: password,
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (returndata) {

                            if (returndata.success === true) {
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
                            } else {
                                swal(
                                        'Error...',
                                        'Invalid ' + returndata.error + '!',
                                        'error'
                                        );
                            }

                        }

                    });

                } else {
                    swal(
                            'Error...',
                            'Please Enter Current Password!',
                            'error'
                            );
                }
            } else {
                swal(
                        'Error...',
                        'Please Enter Name!',
                        'error'
                        );
            }
        } else {
            swal(
                    'Error...',
                    'Please Enter Username!',
                    'error'
                    );
        }

    });

});