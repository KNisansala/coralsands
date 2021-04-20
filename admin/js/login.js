$(document).ready(function () {
    $('#signin').click(function () {
        var username = $.trim($('#username').val());
        var password = $.trim($('#password').val());

        if (username.length > 0) {
            if (password.length > 0) {
                $.ajax({
                    url: "../ajax/login/login.php",
                    type: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    dataType: 'JSON',
                    success: function (returndata) {
                        if (returndata.status === 'success') {
                            window.location.href = '../login/verify-account.php';
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
                    'Please Enter Password!',
                    'error'
                );
            }
        } else {
            swal(
                'Error...',
                'Please Enter User Name!',
                'error'
            );
        }

    });
    $('#verify').click(function () {
        var resetcode = $.trim($('#reset-code').val());
        var user = $.trim($('#user').val());

        if (user.length > 0) {
            if (resetcode.length > 0) {
                $.ajax({
                    url: "../ajax/login/verify-account.php",
                    type: 'POST',
                    data: {
                        resetcode,
                        user
                    },
                    dataType: 'JSON',
                    success: function (returndata) {
                        if (returndata.status === 'success') {
                            window.location.href = '../index.php';
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
                    'Please Enter Reset Code!',
                    'error'
                );
            }
        } else {
            swal(
                'Error...',
                'Please login first!',
                'error'
            );
            setTimeout(() => {
                window.location.href = '../login/';
            }, 2500);
        }

    });
});