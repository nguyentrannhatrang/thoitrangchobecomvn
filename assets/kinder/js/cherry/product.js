jQuery(document).ready(function () {



//jQuery(function($){

    var page = 1;
    $(document).on('click','#ProductThumbs .owl-item',function () {
        var src_img = $(this).find('img').attr('src');
        $('#product-featured-image').attr('src',src_img);
    });
    $(document).on('click','.size-option',function () {
        change_size();
    });
    function get_price_by_size(size_current){
        var result = $('#size-price-'+size_current).val();
        return parseInt(result);
    }
    $(document).on('change','#quantity',function (e) {
        if($(this).val() > $(this).attr('max')){
            e.preventDefault();
            $(this).val($(this).attr('max'));
            $(this).change();
            return;
        }
        var size_change = $('input.size-option[name="size-option-0"]:checked').val();
        var total =get_price_by_size(size_change);
        if(total > 0)
            $('.total-price').removeClass('hide');
        else{
            if(!$('.total-price').hasClass('hide'))
                $('.total-price').addClass('hide');
        }
        total = total*$(this).val();
        $('#total-price').text(NTNT.format_price(total));
    });

    function change_size() {
        var size_change = $('input.size-option[name="size-option-0"]:checked').val();
        $('#pa_size').val(size_change);
        var price = $('#'+size_change).val();
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
        $('#quantity').change();
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
    change_size();

    $(document).on('click','.info-size',function (e) {
        e.preventDefault();
        $('#popup_info_size').modal();
    });
//})
});