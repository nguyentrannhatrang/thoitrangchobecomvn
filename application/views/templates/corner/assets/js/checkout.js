jQuery(function($){
    $('#place_order').click(function (e) {
        e.preventDefault();
        //check valid        
        $('#frm-checkout .required').removeClass('error');
        if(!check_valid('frm-checkout')) return;
        $('#frm-checkout').submit();

    });

    function check_valid(form) {
        var valid = true;
        $('#'+form +' .require').each(function () {
            if($(this).val() == ''){
                valid = false;
                $(this).addClass('error');
            }
        });
        return valid;
    }
})