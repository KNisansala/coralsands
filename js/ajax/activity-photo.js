
$(document).ready(function () {
    $("#activitiy-photo").on('click', '.delete-activity-photo', function () {

        var r = confirm("Are you really want delete this activities photo?....");

        var id = this.id;

        if (r) {
            $.ajax({
                url: "../ajax/activities/delete-activity-photo.php",
                type: "POST",
                data: {
                    ActivityPhoto: true,
                    ID: id
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
    $('#actpho_' + id).remove();
}