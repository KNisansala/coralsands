$(document).ready(function () {
    $("#comment").on('click', '.delete-comment', function () {

        var r = confirm("Are you really want delete this comment?....");

        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/comment/delete-comment.php",
                type: "POST",
                data: {
                    Comment: true,
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
})

function RemoveRow(id) {
    $('#comm_' + id).remove();
}
