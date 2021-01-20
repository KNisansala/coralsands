$(document).ready(function () {
    $("#activities").on('click', '.delete-activities', function () {

        var r = confirm("Are you really want delete this activities?....");
        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/activities/delete-activities.php",
                type: "POST",
                data: {
                    Activities: true,
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
    $('#acti_' + id).remove();
}
