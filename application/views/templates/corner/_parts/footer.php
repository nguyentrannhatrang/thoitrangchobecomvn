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
<script type="text/javascript">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/application/views/templates/corner/assets/js/home.min.js'); ?>
</script>
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

    });
</script>
<!--wp_footer-->
</body>
</html>
