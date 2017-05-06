jQuery(function($){
    $('#pa_size').change(function () {
        change_size();
        $('#quantity').change();
    });
    $('#quantity').change(function () {
        var total = parseInt($(this).val()) * parseFloat($('#product_price').val());
        $('#total-price').text(NTNT.format_price(total));
    });


    function change_size() {
        var size_change = $('#pa_size').val();
        if(!size_change){
            $('#quantity').attr('min',0);
            $('#quantity').attr('max',0);
            $('#quantity').val(0);
            $('#out_stock').text('');
            return ;
        }
        var quantity = 0;
        if(typeof size_quantity !== 'undefined'){
            var details = jQuery.parseJSON(size_quantity);
            $.each(details,function(size,arr){
                if(size_change == size){
                    if(arr['quantity'] !== 'undefined'){
                        quantity = parseInt(arr['quantity']);
                    }
                }
            });           
        }
        $('#quantity').attr('min',0);
        $('#quantity').attr('max',quantity);
        if(quantity >0) {
            $('#quantity').val(1);
            $('#out_stock').text('');
        }
        else {
            $('#quantity').val(0);
            $('#out_stock').text('Đã hết hàng');
        }
    }

})