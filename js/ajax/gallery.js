$(document).ready(function () {
    $("#gallery").on('click', '.delete-gallery', function () {
        var r = confirm("Are you really want delete this picture?....");

        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/gallery/delete-gallery.php",
                type: "POST",
                data: {
                    Gallery: true,
                    Id: id
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {
                        $("#gal_" + id).remove();
                    } else {
                        alert('wrong');
                    }
                }
            });
            
        }
    });
});

