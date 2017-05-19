
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php $this->view('templates/corner/_parts/footer-menu',array('categories'=>$menu,'current_menu'=>$current_menu)); ?>
    <!-- top footer end -->
    <div class="footer-bottom">
        <div class="ak-container">
            <div class="site-info">
                © 2017 Cherry Fashion
            </div><!-- .site-info -->
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->
<div id="ak-top"><i class="fa fa-reply"></i></div>
<script type='text/javascript' src='<?= base_url('templatejs/other.min.js') ?>'></script>
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery-migrate.min.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/owl.carousel.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-social-icons/js/frontend.js?ver=1.6.7'></script>-->
<!--<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-social-login-lite/js/frontend.js?ver=3.2.6'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery.bxslider.min.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-twitter-feed/js/frontend.js?ver=1.5.5'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery.selectbox-0.2.min.js') ?><!--'></script>-->
<!--<script type='text/javascript'>
    /* <![CDATA[ */
    var frontend_js_obj = {"default_error_message":"This field is required","ajax_url":"http:\/\/jenscornershop.com.au\/wp-admin\/admin-ajax.php","ajax_nonce":"60dd2b13e7"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/ultimate-form-builder-lite/js/frontend.js?ver=1.3.3'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery-ui.js') ?><!--'></script>-->
<script type="text/javascript">
    jQuery(function($){
        if($('body').hasClass('rtl')){
            var rtlClass = true;
        } else {
            var rtlClass = false;
        }
        $('#main-slider .bx-slider').slick({
            dots: true,
            arrows: true,
            speed: 5000,
            fade: true,
            cssEase: 'linear',
            autoplaySpeed:5000,
            autoplay:true,
            adaptiveHeight:true,
            infinite:true,
            draggable: true,
            rtl: rtlClass,
        });

        $('#main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

            $('#main-slider .slick-slide .caption-title').removeClass('fadeInDown animated displayNone');
            $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-title').addClass('fadeInDown animated');
            $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-title').addClass('displayNone');

            $('#main-slider .slick-slide .caption-content').removeClass('fadeInUp animated displayNone');
            $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-content').addClass('fadeInUp animated');
            $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-content').addClass('displayNone');

            $('#main-slider .slick-slide .caption-read-more1').removeClass('zoomIn animated displayNone');
            $('#main-slider .slick-slide[data-slick-index='+nextSlide+'] .caption-read-more1').addClass('zoomIn animated');
            $('#main-slider .slick-slide[data-slick-index='+currentSlide+'] .caption-read-more1').addClass('displayNone');

        });
        $('.images-slick').slick({
            slidesToShow: 3,
            slidesToScroll: 1
        });
        $('.item-image').click(function () {
            $('#main-image img').attr('src',$(this).find('img').attr('src'));
        });
    });
</script>
<!--<script data-cfasync="false" type="text/javascript">
    var addthis_config = {"data_track_clickback":true,"ui_atversion":300,"ignore_server_config":true};
    var addthis_share = {};
</script>
<!-- AddThis Settings Begin -->
<!--<script data-cfasync="false" type="text/javascript">
    var addthis_product = "wpp-5.3.5";
    var wp_product_version = "wpp-5.3.5";
    var wp_blog_version = "4.7.3";
    var addthis_plugin_info = {"info_status":"enabled","cms_name":"WordPress","plugin_name":"Share Buttons by AddThis","plugin_version":"5.3.5","anonymous_profile_id":"wp-ac17b36dc02dd63adf0b2167bf3c4f9a","plugin_mode":"WordPress","select_prefs":{"addthis_per_post_enabled":true,"addthis_above_enabled":false,"addthis_below_enabled":true,"addthis_sidebar_enabled":false,"addthis_mobile_toolbar_enabled":false,"addthis_above_showon_home":true,"addthis_above_showon_posts":true,"addthis_above_showon_pages":true,"addthis_above_showon_archives":true,"addthis_above_showon_categories":true,"addthis_above_showon_excerpts":true,"addthis_below_showon_home":true,"addthis_below_showon_posts":true,"addthis_below_showon_pages":true,"addthis_below_showon_archives":true,"addthis_below_showon_categories":true,"addthis_below_showon_excerpts":true,"addthis_sidebar_showon_home":true,"addthis_sidebar_showon_posts":true,"addthis_sidebar_showon_pages":true,"addthis_sidebar_showon_archives":true,"addthis_sidebar_showon_categories":true,"addthis_mobile_toolbar_showon_home":true,"addthis_mobile_toolbar_showon_posts":true,"addthis_mobile_toolbar_showon_pages":true,"addthis_mobile_toolbar_showon_archives":true,"addthis_mobile_toolbar_showon_categories":true,"sharing_enabled_on_post_via_metabox":true},"page_info":{"template":"home","post_type":""}};
    if (typeof(addthis_config) == "undefined") {
        var addthis_config = {"data_track_clickback":true,"ui_atversion":300,"ignore_server_config":true};
    }
    if (typeof(addthis_share) == "undefined") {
        var addthis_share = {};
    }
    if (typeof(addthis_layers) == "undefined") {
        var addthis_layers = {};
    }
</script>-->
<!--<script
    data-cfasync="false"
    type="text/javascript"
    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=wp-ac17b36dc02dd63adf0b2167bf3c4f9a "
    async="async"
>
</script>-->
<!--<script data-cfasync="false" type="text/javascript">
    (function() {
        var at_interval = setInterval(function () {
            if(window.addthis) {
                clearInterval(at_interval);
                addthis.layers(addthis_layers);
            }
        },1000)
    }());
</script>-->
<!--<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
        if(element.addEventListener) {
            element.addEventListener(event,handler, false);
        } else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
        }
    }function maybePrefixUrlField() {
        if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
        }
    }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if( urlFields && urlFields.length > 0 ) {
            for( var j=0; j < urlFields.length; j++ ) {
                addEventListener(urlFields[j],'blur',maybePrefixUrlField);
            }
        }/* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if( testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for(var i=0; i<dateFields.length; i++) {
                if(!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if(!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script><link rel='stylesheet' id='addthis_output-css'  href='http://jenscornershop.com.au/wp-content/plugins/addthis/css/output.css?ver=4.7.3' type='text/css' media='all' />-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/lightbox.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-instagram-feed/js/isotope.pkgd.min.js?ver=2.2.0'></script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-instagram-feed/js/modernizr.custom.26633.js?ver=2.2.7'></script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-instagram-feed/js/jquery.gridrotator.js?ver=2.2.7'></script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/accesspress-instagram-feed/js/frontend.js?ver=2.2.7'></script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.7'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var es_widget_notices = {"es_email_notice":"Please enter email address","es_incorrect_email":"Please provide a valid email address","es_load_more":"loading...","es_ajax_error":"Cannot create XMLHTTP instance","es_success_message":"Successfully Subscribed.","es_success_notice":"Your subscription was successful! Within a few minutes, kindly check the mail in your mailbox and confirm your subscription. If you can't see the mail in your mailbox, please check your spam folder.","es_email_exists":"Email Address already exists!","es_error":"Oops.. Unexpected error occurred.","es_invalid_email":"Invalid email address","es_try_later":"Please try after some time","es_problem_request":"There was a problem with the request"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/email-subscribers/widget/es-widget.js?ver=4.7.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var es_widget_page_notices = {"es_email_notice":"Please enter email address","es_incorrect_email":"Please provide a valid email address","es_load_more":"loading...","es_ajax_error":"Cannot create XMLHTTP instance","es_success_message":"Successfully Subscribed.","es_success_notice":"Your subscription was successful! Within a few minutes, kindly check the mail in your mailbox and confirm your subscription. If you can't see the mail in your mailbox, please check your spam folder.","es_email_exists":"Email Address already exists!","es_error":"Oops.. Unexpected error occurred.","es_invalid_email":"Invalid email address","es_try_later":"Please try after some time","es_problem_request":"There was a problem with the request"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/email-subscribers/widget/es-widget-page.js?ver=4.7.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var sb_instagram_js_options = {"sb_instagram_at":"1561285052.3a81a9f.b865b4ad106d4a119a9ca8227803557d"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.4.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/jenscornershop.com.au\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>-->
<!--<script type='text/javascript' src='//jenscornershop.com.au/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.0.1'></script>-->
<!--<script type='text/javascript' src='//jenscornershop.com.au/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>-->
<!--<script type='text/javascript' src='//jenscornershop.com.au/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.3'></script>-->
<!--<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='//jenscornershop.com.au/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.0.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
    /* ]]> */
</script>
<script type='text/javascript' src='//jenscornershop.com.au/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.0.1'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/navigation.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/slick.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/wow.min.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/jquery.ticker.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/skip-link-focus-fix.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/custom.js') ?><!--'></script>-->
<script type="text/javascript">
    jQuery(function($){
        $('#grid').click(function (e) {
            e.preventDefault();
            $('ul.products').removeClass('list');
            $('ul.products').addClass('grid');
            $(this).addClass('active');
            $('#list').removeClass('active');
        });
        $('#list').click(function (e) {
            e.preventDefault();
            $('ul.products').removeClass('grid');
            $('ul.products').addClass('list');
            $(this).addClass('active');
            $('#grid').removeClass('active');
        });


        //product detail
        function active_tabs(element){
            $('#tab-title-description').removeClass('active');
            $('#tab-title-additional_information').removeClass('active');
            $('#tab-title-reviews').removeClass('active');
            $('#'+element).addClass('active');
            $('#tab-description').css('display','none');
            $('#tab-additional_information').css('display','none');
            $('#tab-reviews').css('display','none');
            var id = $('#'+element+' a').attr('href');
            $(id).css('display','block');

        }
        $('.tab-details').click(function (e) {
            e.preventDefault();
            active_tabs($(this).attr('id'));
        });
        $('#tab-title-description').click();
        });
</script>
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/function.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/product.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/cart.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='--><?//= base_url('templatejs/checkout.js') ?><!--'></script>-->
<!--<script type='text/javascript' src='http://jenscornershop.com.au/wp-includes/js/wp-embed.min.js?ver=4.7.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var rm_pre_data = {"ajax_url":"http:\/\/jenscornershop.com.au\/wp-admin\/admin-ajax.php","rm_nonce_field":"fba09bed07"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/icegram-rainmaker/classes/../assets/js/main.js?ver=0.17'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=4.1.0'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://jenscornershop.com.au/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.0'></script>-->
<!--[endif]-->
<!--wp_footer--></body>
</html>
