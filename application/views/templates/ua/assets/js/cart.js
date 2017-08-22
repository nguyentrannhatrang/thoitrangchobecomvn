jQuery(function($){
    getCart();
    /*$(document).click(function () {
        show_popup_cart();
    });*/
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
                $('#quantity_mobile').val(0);
                $('#quantity').val(0);
                $('#pa_size_mobile').val('');
                $('#pa_size').val('');
                if(data !== 'undefined'){
                    if(data.summary !== 'undefined'){
                        if(typeof data_cart !== 'undefined'){
                            data_cart = data.data;
                        }
                        fill_data_cart(data.data,data.summary,true);
                        $('#shopping-cart span.total-quantity').text(data.summary.quantity);
                    }
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    });
    $('#add_to_cart_mobile').click(function (e) {
        e.preventDefault();
        $('#error_pa_size_mobile').text('');
        $('#error_quantity_mobile').text('');
        // var form = $(this).parent('.frm-product');
        if(!$('#frm-product-mobile #pa_size_mobile').val()){
            $('#error_pa_size_mobile').text('Chọn kích cỡ');
            return;
        }
        if(!$('#frm-product-mobile #quantity_mobile').val()){
            $('#error_quantity_mobile').text('Chọn số lượng');
            return;
        }
        var option = {
            type: 'POST',
            url: '/cart/addCart',
            dataType: 'json',
            data: $('#frm-product-mobile').serialize(),
            success:  function(data) {
                $('#quantity_mobile').val(0);
                $('#quantity').val(0);
                $('#pa_size_mobile').val('');
                $('#pa_size').val('');
                if(data !== 'undefined'){
                    if(data.summary !== 'undefined'){
                        if(typeof data_cart !== 'undefined'){
                            data_cart = data.data;
                        }
                        fill_data_cart(data.data,data.summary,true);
                        $('#shopping-cart span.total-quantity').text(data.summary.quantity);
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
    $(document).on('click','.remove-item-product',function (e) {
        e.preventDefault();
        var option = {
            type: 'GET',
            url: $(this).attr('data-remove'),
            dataType: 'json',
            success:  function(data) {
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    });
    function getCart() {
        var option = {
            type: 'GET',
            url: '/cart/getCart',
            dataType: 'json',
            success:  function(data) {
                if(data !== 'undefined'){
                    if(data.summary !== 'undefined'){
                        if(typeof data_cart !== 'undefined'){
                            data_cart = data.data;
                        }
                        fill_data_cart(data.data,data.summary);
                        $('#shopping-cart span.total-quantity').text(data.summary.quantity);
                        //$('.view-cart a.cart-contents span.amount').text(NTNT.format_price(data.summary.total));
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
                        row = row.replace('{{name-size}}',data_cart.name + ' - ' +data_cart.size,row);
                        row = row.replace('{{src}}','src="/attachments/shop_images/' + data_cart.image + '"',row);
                        row = row.replace('{{price-unit}}',NTNT.format_price(data_cart.price),row);
                        row = row.replace('{{quantity}}',data_cart.quantity,row);
                        row = row.replace('{{price}}',NTNT.format_price(data_cart.quantity*data_cart.price),row);
                        $('#popup_add_to_cart .content').append(row);
                        has_cart = true;
                    })
                }
            })
        }
        if(summary && typeof summary.total !== 'undefined'){
            $('#popup_add_to_cart .inform-total .total span').text(NTNT.format_price(summary.total)+' đồng');
        }
        if(summary && typeof summary.quantity !== 'undefined'){
            $('#popup_add_to_cart span.total-quantity').text(summary.quantity);
        }
        if(has_cart && showPopup){
            show_popup_cart();
        }

    }


    $(document).ready(function () {
        $(".chat_fb").click(function() {
            $('.fchat').toggle('slow');
        });
        $( "#txt-search" ).autocomplete({
            source: availableTags
        });
        $('#btn-search').click(function () {
            $('#search-header').submit();
        });
        $("#chat-box-message a.button-toggle").click(function (e) {
            e.preventDefault();
            $("#chat-box-message .chat-main").toggle();
        })
        $("#district").change(function (e) {
            e.preventDefault();
            $("#frm-search-schools").submit();
        })
    });
})