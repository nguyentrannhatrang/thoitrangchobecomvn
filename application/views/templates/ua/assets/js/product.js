jQuery(document).ready(function () {


//jQuery(function($){

    var page = 1;
    $(document).on('change','#pa_size',function () {
        change_size();
        $('#quantity').change();

    });
    $(document).on('change','#pa_size_mobile',function () {
        change_size_mobile();
        $('#quantity_mobile').change();

    });
    function plus_price_by_size(size_current){
        var result = 0;
        if(typeof size_price !== 'undefined'){
            var details = jQuery.parseJSON(size_price);
            $.each(details,function(size,price){
                if(size_current == size){
                    result = price;
                }
            });
        }
        return parseInt(result);
    }
    $(document).on('change','#quantity',function () {
        //var total = parseInt($(this).val()) * parseFloat($('#product_price').val());
        var total =plus_price_by_size($('#pa_size').val());
        if(total > 0)
            $('.total-price').removeClass('hide');
        else{
            if(!$('.total-price').hasClass('hide'))
                $('.total-price').addClass('hide');
        }
        total = total*$(this).val();
        $('#total-price').text(NTNT.format_price(total));
    });
    $(document).on('change','#quantity_mobile',function () {
        //var total = parseInt($(this).val()) * parseFloat($('#product_price_mobile').val());
        var total =plus_price_by_size($('#pa_size_mobile').val());
        if(total > 0)
            $('.total-price-mobile').removeClass('hide');
        else{
            if(!$('.total-price-mobile').hasClass('hide'))
                $('.total-price-mobile').addClass('hide');
        }
        total = total*$(this).val();
        $('#total-price-mobile').text(NTNT.format_price(total));
    });

    function change_size_mobile() {
        change_size(true);
    }
    function change_size(is_mobile) {
        var is_mobile = is_mobile || false;
        var mobile = '';
        if(is_mobile)
            mobile = '_mobile';
        var size_change = $('#pa_size' + mobile).val();
        if(!size_change){
            $('#quantity' + mobile).attr('min',0);
            $('#quantity' + mobile).attr('max',0);
            $('#quantity' + mobile).val(0);
            $('#out_stock' + mobile).text('');
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
        //get quantity in cart
        var quantity_booked = get_quantity_in_cart($('#product_id').val(),size_change);
        quantity = quantity - quantity_booked;
        if(quantity <0) quantity = 0;
        $('#quantity' + mobile).attr('min',0);
        $('#quantity' + mobile).attr('max',quantity);
        if(quantity >0) {
            $('#quantity' + mobile).val(1);
            $('#out_stock' + mobile).text('');
        }
        else {
            $('#quantity' + mobile).val(0);
            $('#out_stock' + mobile).text('Đã hết hàng');
        }
    }

    /**
     *
     * @param product
     * @param size_id
     * @returns {number}
     */
    function get_quantity_in_cart(product,size_id){
        var result = 0;
        if(typeof data_cart !== 'undefined' && data_cart !== ''){
            $.each(data_cart,function (id,aSize) {
                if(id == product){
                    if(aSize){
                        $.each(aSize,function (size,data_size) {
                            if(size == size_id){
                                result = data_size.quantity;
                                return false;
                            }
                        })
                    }
                }
            });
        }
        return result;
    }
    $(document).on('click','#submit',function (e) {
        e.preventDefault();
        $('#review_error').text('');
        //check valid
        if($('#comment').val() == ''){
            $('#review_error').text('Vui lòng nhập comment');
            return;
        }
        if($('#author').val() == ''){
            $('#review_error').text('Vui lòng nhập tên');
            return;
        }
        if($('#email').val() == ''){
            $('#review_error').text('Vui lòng nhập email');
            return;
        }
        if(!validateEmail($('#email').val())){
            $('#review_error').text('Email không đúng');
            return;
        }
        if($('#product_id').val() == '') return;
        post_comment($('#product_id').val());
    });
    if($('#number_review').val() >0){
        load_comment($('#product_id').val());
    }
    $('#load_more').click(function (e) {
        e.preventDefault();
        load_comment($('#product_id').val());
    });
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    function load_comment(product) {
        var product = product || 1;
        var option = {
            type: 'GET',
            url: '/product/loadComment/'+product+'/'+page,
            dataType: 'json',
            success:  function(data) {
                if(data !== 'undefined' && data.data !== 'undefined'){
                    var date_comments = data.data;
                    $.each(date_comments, function(index, value) {
                        var template = $('#template-comment-view').html();
                        template = template.replace("{{name}}", value.name);
                        template = template.replace("{{comment}}", value.message);
                        template = template.replace("{{time}}", value.created);
                        $('#comments').append(template);
                    });
                    page++;
                }
                if(data === 'undefined' || data.count === 'undefined' || data.count<10){
                    $('#load_more').css('display','none');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    }
    function post_comment(product) {
        var product = product || 1;
        var option = {
            type: 'POST',
            url: '/product/saveComment/'+product,
            dataType: 'json',
            data:$('#commentform').serialize(),
            success:  function(data) {
                if(data !== 'undefined' && data.result !== 'undefined' && data.result){
                    $('#comment').val('');
                    $('#author').val('');
                    $('#email').val('');
                    $('#review_success').text('Thành công');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    }
    Photoswipe();
    function Photoswipe(){
        var $pswp = $('.pswp')[0];
        var image = [];

        $('.pictures').each( function() {
            var $pic     = $(this),
                getItems = function() {
                    var items = [];
                    $pic.find('a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            $width  = $size[0],
                            $height = $size[1];

                        var item = {
                            src : $href,
                            w   : $width,
                            h   : $height
                        }

                        items.push(item);
                    });
                    return items;
                }
            var items = getItems();

            /* $.each(items, function(index, value) {
             image[index]     = new Image();
             image[index].src = value['src'];
             });*/

            $pic.on('click', 'li', function(event) {
                event.preventDefault();

                var $index = $(this).index();
                var options = {
                    index: $index-3,
                    bgOpacity: 0.7,
                    showHideOpacity: true
                }

                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });

        });
    }
    $('#pa_size').change();
    $('#pa_size_mobile').change();
//})
});