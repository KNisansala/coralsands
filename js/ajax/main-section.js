$(document).ready(function () {

    $("#main-section").on('click', '.delete-main-section', function () {
        var r = confirm("Are you really want delete this main section?....");

        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/main-section/delete-main-section.php",
                type: "POST",
                data: {
                    Section: true,
                    Id: id,
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {
                        id.fadeOut().remove();
                    } else {
                        alert('wrong');
                    }
                }
            });
            RemoveRow(id);
        }
    });
});

function RemoveRow(id) {
    $('#mainsec_' + id).remove();
}