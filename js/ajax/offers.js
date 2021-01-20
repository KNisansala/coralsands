$(document).ready(function () {
    $("#offers").on('click', '.delete-offers', function () {

        var r = confirm("Are you really want delete this offer?....");
        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/offers/delete-offers.php",
                type: "POST",
                data: {
                    Offers: true,
                    id: id,
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status === 'success') {
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
    $('#offer_' + id).remove();
}