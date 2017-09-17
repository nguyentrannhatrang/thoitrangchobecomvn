jQuery(function($){
    $('#btnBack').click(function (e) {
        location.href = '/cart';
    });
    $('#place_order').click(function (e) {
        e.preventDefault();
        //check valid        
        $('#frm-checkout .required').removeClass('error');
        if(!check_valid('frm-checkout')) return;
        $('#frm-checkout').submit();

    });

    function check_valid(form) {
        var valid = true;
        var element = '';
        $('#'+form +' .require').each(function () {
            if($(this).val() === ''){
                valid = false;
                $(this).addClass('error');
            }
            if(element === '')
                element = $(this).attr('id');
        });
        if(element !== ''){
            $('html, body').animate({
                scrollTop: $("#" + element).offset().top - 50
            }, 200);
        }
        return valid;
    }
})