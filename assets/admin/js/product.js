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
})
