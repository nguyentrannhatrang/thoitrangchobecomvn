jQuery(function($){
    getCart();
    $('#add_to_cart').click(function (e) {
        e.preventDefault();
        $('#error_pa_size').text('');
        $('#error_quantity').text('');
        // var form = $(this).parent('.frm-product');
        if(!$('#frm-product #pa_size').val()){
            $('#error_pa_size').text('Chọn kích cỡ');
            return;
        }
        if(!$('#frm-product #quantity').val()){
            $('#error_quantity').text('Chọn số lượng');
            return;
        }
        var option = {
            type: 'POST',
            url: '/cart/addCart',
            dataType: 'json',
            data: $('#frm-product').serialize(),
            success:  function(data) {
                if(data !== 'undefined'){
                    if(data.summary != 'undefined'){
                        $('.view-cart a.cart-contents span.total-quantity').text(data.summary.quantity);
                        $('.view-cart a.cart-contents span.amount').text(NTNT.format_price(data.summary.total));
                    }
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    });

    $('.remove_item').click(function (e) {
       e.preventDefault();
        $(this).parent().parent('.cart_item').remove();
    });

    function getCart() {
        var option = {
            type: 'GET',
            url: '/cart/getCart',
            dataType: 'json',
            success:  function(data) {
                if(data !== 'undefined'){
                    if(data.summary != 'undefined'){
                        $('.view-cart a.cart-contents span.total-quantity').text(data.summary.quantity);
                        $('.view-cart a.cart-contents span.amount').text(NTNT.format_price(data.summary.total));
                    }
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    }
})