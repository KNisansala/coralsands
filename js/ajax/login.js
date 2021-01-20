$(document).ready(function () {

    $(".login").click(function () {
        var username = $('#username').val();
        var password = $('#password').val();
        
        $.ajax({
            url: "../../ajax/login/login.php",
            type: "POST",
            data: {
                login: true,
                username: username,
                password: password
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'empty') {
                    alert('please enter username and password');
                } else if (data.status == 'wrong') {
                    $("#username").val("");
                    $("#password").val("");
                    alert('wrong');
                }else if(data.status == 'ok'){
                    window.location.href = '../../admin/index.php';
                }
            }
        });
    });
});

$(document).ready(function () {

    $(".edit-profile").click(function () {
        var name = $('#name').val();
        var username = $('#username').val();
        var oldpassword = $('#oldpassword').val();
        var newpassword = $('#newpassword').val();
        var comfirmpass = $('#confirmpass').val();

        $.ajax({
            url: "../ajax/login/edit-profile.php",
            type: "POST",
            data: {
                edit: true,
                name: name,
                username: username,
                oldpassword: oldpassword,
                newpassword: newpassword,
                comfirmpass: comfirmpass
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'empty') {
                    alert('empty');
                } else if (data.status == 'ok') {
                    window.location.href = '../admin/login/index.php';
                } else if (data.status == 'wrong') {
                    alert('dont match new password');
                } else {
                    alert('dont match old password');
                }
            }
        });
    });
});


