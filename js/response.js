$(document).ready(function () {

    var id = $("bookingid").val();
    var code = $("response").val();

    $.ajax({
        url: "ajax/booking/response.php",
        type: "POST",
        data: {
            bookingid: id,
            responsecode: code,
            actionUpdate: 'UPDATE'
        },
        dataType: "JSON",
        success: function (result) {
            alert(result);
        },
        error: function (error) {
            alert(error);
        }
    });
});

