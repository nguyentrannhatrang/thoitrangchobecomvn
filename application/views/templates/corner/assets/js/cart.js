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
                    if(data.summary !== 'undefined'){
                        fill_data_cart(data.data,data.summary,true);
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
                    if(data.summary !== 'undefined'){
                        fill_data_cart(data.data,data.summary);
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
    $('#shopping-cart').click(function (e) {
        e.preventDefault();
        var quantity = $(this).find('.total-quantity').text();
        quantity = parseInt(quantity);
        if(quantity>0)
            show_popup_cart();
    });
    function show_popup_cart() {
        $('#popup_add_to_cart').modal();
    }
    function fill_data_cart(data,summary,showPopup) {
        var showPopup = showPopup || false;
        $('#popup_add_to_cart .content').empty();
        var has_cart = false;
        if(typeof data !=='undefined' && data){
            var html = $('#row_in_cart').html();
            $.each(data,function (id,aSize) {
                if(aSize){
                    $.each(aSize,function (size,data_cart) {
                        var row = html;
                        row = row.replace('{{name-size}}',data_cart.name + ' ' +data_cart.size,row);
                        row = row.replace('{{quantity}}',data_cart.quantity,row);
                        row = row.replace('{{price}}',NTNT.format_price(data_cart.quantity*data_cart.price),row);
                        $('#popup_add_to_cart .content').append(row);
                        has_cart = true;
                    })
                }
            })
        }
        if(summary && typeof summary.total !== 'undefined'){
            $('#popup_add_to_cart .inform-total .total span').text(NTNT.format_price(summary.total)+'VND');
        }
        if(summary && typeof summary.quantity !== 'undefined'){
            $('#popup_add_to_cart span.total-quantity').text(summary.quantity);
        }
        if(has_cart && showPopup)
            show_popup_cart();
    }
})