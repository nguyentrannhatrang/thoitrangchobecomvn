jQuery(function($){
    var page = 1;
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
    $('#submit').click(function (e) {
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
                        template = template.replace("{{email}}", value.email);
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

})