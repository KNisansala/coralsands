
$(document).ready(function () {

    $('#room').on('keyup', '.room_num', function () {
        var value = $('#' + this.id).val();
        var roomId = this.id;

        $.ajax({
            url: "../ajax/room/edit-room.php",
            type: "POST",
            data: {
                editRoom: true,
                roomNum: value,
                roomId: roomId
            },
            dataType: "JSON",
            success: function (data) {
                if (data.status == 'exists') {
                    alert('exists');

                }
            }

        });
    });
});

$(document).ready(function () {

    $('#room').on('click', '.delete-room', function () {
        var r = confirm("Are you really want delete this room Number?....");
        if (r) {
            var roomId = this.id;
            $.ajax({
                url: "../ajax/room/delete-room.php",
                type: "POST",
                data: {
                    deleteRoom: true,
                    roomId: roomId
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {
                        roomId.fadeOut().remove();
                    } else {
                        alert("can't delete the row");
                        return false;
                    }
                }
            });
            RemoveRow(roomId);
        }
    });
});

function RemoveRow(id) {
    $('#row_' + id).remove();
}

$(document).ready(function () {
    $(".add-room").click(function () {
        var roomNum = $('#room_num').val();
        var roomType = $('#room_type').val();

        $.ajax({
            url: "../ajax/room/add-room.php",
            type: "POST",
            data: {
                addRoom: true,
                roomNum: roomNum,
                roomType: roomType
            },
            dataType: "JSON",
            success: function (data) {
                if (data.status == 'empty') {
                    alert('Please Add Room Number !');
                } else if (data.status == 'success') {

                    $("#room_num").val("");

                    var html = '';
                    html += '<div class="row" id="room">';
                    html += '<div class="room" id="row_' + data.lastId + '">';
                    html += '<div class="col-md-12"  style="margin-bottom: 20px;">';
                    html += '<div class="col-md-4">';
                    html += '<input name="room_num" class="form-control room_num" id="' + data.lastId + '" type="text" value="' + data.roomNum + '">';
                    html += '</div>';
                    html += '<div class="col-md-2">';
                    html += '<a id="' + data.lastId + '" title="Delete This Details" class="btn btn-danger delete-room">';
                    html += '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
                    html += '</a>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    $('#room').append(html);
                } else if (data.status == 'exists') {
                    alert('exists');
                    $("#room_num").val("");
                }

            }
        });
    });
});

$(document).ready(function () {

    $("#room-features").on('click', '.delete-room-feature', function () {
        
        var r = confirm("Are you really want delete this Feature?....");
        
        if (r) {
            var id = this.id;
            $.ajax({
                url: "../ajax/room/delete-room-features.php",
                type: "POST",
                data: {
                    Features: true,
                    Id: id
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {
                        id.fadeOut().remove();
                    } else {
                        alert("can't delete the row");
                        return false;
                    }
                }
            });
            RemoveRow(id);
        }
    });
});

function RemoveRow(id) {
    $('#feature_' + id).remove();
}



