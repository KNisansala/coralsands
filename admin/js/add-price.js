$(document).ready(function () {

//    $('.price-add-area').hide();
//
//    $('.by-basis').click(function () {
//        $('.price-add-area').hide();
//        $('.remove-alrt').remove();
//        var typeId = $(this).attr('type');
//        var basisId = $(this).attr('basis');
//        var typeName = $(this).attr('typename');
//        var basisName = $(this).attr('basisname');
//
//        $('#add-head').text(typeName + ' - ' + basisName);
//        $('#add-head').attr('type-id', typeId);
//        $('#add-head').attr('basis-id', basisId);
//        $('.price-add-area').fadeIn().show();
//
//    });


    $('#add').click(function () {


//        var typeId = $(this).attr('type');
//        var basisId = $(this).attr('basis');
//
//        $('#add-head').attr('type-id', typeId);
//        $('#add-head').attr('basis-id', basisId);

//        var type = $('#type').val();
//        var basis = $('#basis').val();
//        var start = $('#start').val();
//        var end = $('#end').val();
//        var price = $('#price').val();

        var basis = [];
       
        var basis = $('basis').val();
        alert(basis);

        $.ajax({

            url: "ajax/prices/add-room-price2.php",
            type: 'POST',
            data: {
                type: type,
                basis: basis,
                start: start,
                end: end,
                price: price
            },
            dataType: 'JSON',
            success: function (returndata) {

                if (returndata.status === 1) {
                    var status = 'success';
                    var msg = 'Successfully Added a New Price!';
                    $('.clear-inp').val('');
                } else {
                    var status = 'danger';
                    var msg = 'Error Adding Price!';
                }
                var html = '<div class="remove-alrt alert alert-' + status + ' alert-dismissable">\n\
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' + msg + '\n\
                            </div>';
                $('.remove-alrt').remove();
                $('.price-add-area').append(html).fadeIn();
            }

        });

    });

});