$(document).ready(function () {
    $('#btn-add-detail').click(function () {
       var html = $('#color_size_add').html();
        $(html).insertBefore('#color_size_add');
    });
    $('.format_price').priceFormat({
        prefix: '',
        suffix: 'VND',
        thousandsSeparator: ',',
        centsLimit:0
    });
    $('.format_price').keyup(function () {
        $(this).parent().find('.product_price').val($(this).unmask());
    });
    $('#title_for_url').change(function () {
        check_url_unique();
    });

    function check_url_unique() {
        var option = {
            type: 'GET',
            url: '/admin/publish/checkUrlUnique/'+$('#product_id').val(),
            dataType: 'json',
            data: 'product_url='+$('#title_for_url').val(),
            success:  function(data) {
                if(!(typeof data !== 'undefined' && typeof data.result !== 'undefined' &&
                    data.result == 1)){
                    $('#title_for_url').val('');
                }

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        };
        $.ajax(option);
    }
})
