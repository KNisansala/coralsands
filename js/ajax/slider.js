$(document).ready(function () {
    $("#slider").on('click', '.delete-slider-image', function () {
        var r = confirm("Are you really want delete this slider?....");
        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/slider/delete-slider.php",
                type: "POST",
                data: {
                    Slider: true,
                    SliderId: id
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
    $('#slider_' + id).remove();
}

