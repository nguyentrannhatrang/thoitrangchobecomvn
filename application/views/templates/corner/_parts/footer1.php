<?php $this->view('templates/corner/_parts/cart-content');?>
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

<!--<script type="text/javascript">
    <?php /*echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/corner/assets/js/other.min.js'); */?>
</script>-->
<script type='text/javascript' src='<?= base_url('templatejs/other.min.js') ?>'></script>
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
        $(document).on('click','.item-image',function () {
            $('#main-image img').attr('src',$(this).find('img').attr('src'));
        });
    });
</script>
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
<!--wp_footer-->
</body>
</html>
