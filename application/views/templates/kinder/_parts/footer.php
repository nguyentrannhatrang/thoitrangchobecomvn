<br style="clear: both;"/>
<div id="shopify-section-footer" class="shopify-section">
    <footer class="footer-area">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-logo">

                        <a href="/"><img src="http://cdn.shopify.com/s/files/1/1010/9088/files/logospring_compact.png?v=1498184055" alt=""></a>

                        <p>Kinder Kouture is an online retail store that specializes in making beautiful clothing for little boys and girls.   <br><br>
                            Cherry Fashion <br>
                            Tel: <a href="tel:0969188827">0969.188.827</a> <br>
                            Email: thoitrangchobe.store@gmail.com<br>
                            Địa chỉ: 269/12B11 Bà Hom P.13 Q.6 TP.HCM <br>
                            Fanpage: <a target="_blank" href="https://fb.com/cherryfashion.vn">fb.com/cherryfashion.vn</a>
                        </p>

                        <ul>
                            <li>
                                <a target="_blank" class="facebook" href="http://www.facebook.com/cherryfashion.vn" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <?php foreach ($top_menu as $item){?>
                    <div class="footer-title res-mrg">
                        <h3><a href="/category-<?= $item['info']['url'] ?>"><?= $item['info']['name'] ?></a></h3>
                        <div class="footer-menu">
                            <?php if(!empty($item['children'])){ ?>
                            <ul>
                                <?php foreach ($item['children'] as $child){ ?>
                                <li><a href="/category-<?= $child['url'] ?>"><?= $child['name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-title res-mrg-2">
                        <div class="footer-newsletter">
                            <div class="fb-follow" data-href="https://www.facebook.com/cherryfashion.vn" data-width="320" data-height="100" data-layout="box_count" data-size="small" data-show-faces="true"></div>
                            <!-- Your share button code -->
                            <div class="fb-share-button"
                                 data-href="http://thoitrangchobe.com.vn<?= $_SERVER['REQUEST_URI'] ?>"
                                 data-layout="button_count">
                            </div>
                            <div class="fb-messengermessageus"
                                 messenger_app_id="434363263629006"
                                 page_id="1754154044896831"
                                 color="blue"
                                 size="standard" >
                            </div>
                            <!--                            <div class="fb-like" data-href="https://www.facebook.com/cherryfashion.vn/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>-->
                            <div class="fb-page" data-href="https://www.facebook.com/cherryfashion.vn/"
                                 data-tabs="timeline" data-width="250" data-height="50" data-small-header="false"
                                 data-adapt-container-width="true" data-hide-cover="false"
                                 data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/cherryfashion.vn/" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/cherryfashion.vn/">Cherry fashion - Thời trang thiết kế cho bé</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!--<div class="footer-title res-mrg-2">
                        <h3>Newsletter</h3>
                        <div class="footer-newsletter">
                            <p>We promise to only send you pretty things.</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="http://eepurl.com/uui_X" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="kinderkouture@gmail.com" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <!--<div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>-->
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="footer-bottom text-center ptb-20">
                <p>
                    <i class="fa fa-copyright" aria-hidden="true"></i> 2017 <a href="http://thoitrangchobe.com.vn" target="_blank">Cherry Fashion</a>.
                </p>
            </div>
        </div>

    </footer>
</div>
</div>
<!-- modalAddToCart -->
<div class="modal fade ajax-popup" id="modalAddToCart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog white-modal modal-sm">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="pe-7s-check"></i>
                    <span class="success-message">Added to cart successfully!</span>
                </div>
            </div>
            <div class="modal-footer text-center cart-buttons">
                <a href="/cart" class="">View Cart</a>
            </div>
        </div>
    </div>
</div>
<!-- /modalAddToCart -->
<!-- modalAddToCart Error -->
<div class="modal fade ajax-popup" id="modalAddToCartError" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog white-modal modal-sm">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center error_message">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    $(function() {
        // Current Ajax request.
        var currentAjaxRequest = null;
        // Grabbing all search forms on the page, and adding a .search-results list to each.
        // Clicking outside makes the results disappear.
        $('body').bind('click', function(){
            $('.search-results').hide();
        });
    });
</script>

<!-- Some styles to get you started. -->
<style>
    .search-results {
        z-index: 8889;
        list-style-type: none;
        width: 190px;
        margin: 0;
        padding: 0;
        background: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 0px;
        -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    .search-results li {
        display: block;
        width: 100%;
        height: 38px;
        margin: 0;
        padding: 0;
        border-top: 1px solid #cccccc;
        line-height: 38px;
        overflow: hidden;
    }
    .search-results li:first-child {
        border-top: none;
    }
    .search-results .title {
        float: left;
        width: 140px;
        padding-left: 8px;
        white-space: nowrap;
        overflow: hidden;
        /* The text-overflow property is supported in all major browsers. */
        text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        text-align: left;
        font-size:12px;
        line-height:38px;
        color:#515151;
        font-weight:normal;
    }
    .search-results .title:hover{
        color:#CE9634;
    }
    .search-results .thumbnail {
        float: left;
        display: block;
        width: 32px;
        height: 32px;
        margin: 3px 0 3px 3px;
        padding: 0;
        text-align: center;
        overflow: hidden;
        border-radius:0px;
    }
</style>

<!-- QUICKVIEW PRODUCT -->
<div class="quickViewModal_info" style="display: none;">
    <div class="button">Add to Cart</div>
    <div class="button_added"><i class="fa fa-check"></i></div>
    <div class="button_error"><span class="icon icon-shopping_basket"></span> Limit Products</div>
    <div class="button_wait"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<!-- END QUICKVIEW PRODUCT -->
<!-- Begin Recently Viewed Products -->
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel();
    });
</script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '434363263629006',
            xfbml      : true,
            version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    <?php if(isset($listProductName)){?>
    var availableTags = [
        <?= $listProductName ?>
    ];
    <?php } else {?>
    var availableTags = [];
    <?php } ?>
</script>
</body>
</html>