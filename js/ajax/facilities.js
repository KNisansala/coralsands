$(document).ready(function () {
    $("#facilities").on('click', '.delete-facilities', function () {
        var r = confirm("Are you really want delete this facilities?....");

        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/facilities/delete-facilities.php",
                type: "POST",
                data: {
                    Facilities: true,
                    Id: id
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
    $('#facilities_' + id).remove();
}


