$(document).ready(function () {
    $("#gallery-type").on('click', '.delete-gallery-type', function () {
        var r = confirm("Are you really want delete this type?....");
        if (r) {
            var id = this.id;
            $.ajax({
                url: "../ajax/gallery/delete-gallery-type.php",
                type: "POST",
                data: {
                    Type: true,
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
    $('#type_' + id).remove();
}