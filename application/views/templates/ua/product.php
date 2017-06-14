
<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="mobile-booking-header palm--show">
            <div class="mobile-book-now">
                <div class="combo reversed">
                    <div class="combo-first">
                        <div class="tour-title font-carto-gothic-regular">
                            <p><?= $product->getName() ?></p>
                        </div>
                        <div class="tour-location font-open-sans">
                            <p><?= $product->getPriceFormat() ?> đồng</p>


                        </div>
                    </div>
                    <div class="combo-last">
                        <!--start price mobile-->
                        <p class="from-price"><?= $product->getPriceFormat() ?> đồng</p>
                        <!--meta(content="#{tour.currency}", itemprop="priceCurrency")-->
                        <!--meta(content="#{tour.price2}", itemprop="price")-->
                        <!--end price mobile-->
                        <div class="submit-button">
                            <a href="Cinque-Terre-tour-this-is-aperitivo" class="wide button palm--hidden">Book Now</a>
                            <a href="/mobile/Cinque-Terre-tour-this-is-aperitivo" class="wide button large--hidden">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-tour-info">
                <p>Office phone number: <a href="tel:+39 338 884 7405">+39 338 884 7405</a></p>
                <!--reserve now button-->
            </div>
        </div>
        <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image)?>')" class="tour-booking">
            <div class="grid large--show">
                <div class="grid__item two-thirds lap--one-third"></div>
                <div class="grid__item one-third lap--two-thirds">
                    <div class="booking">
                        <div class="booking-header">
                            <div class="tour-title font-carto-gothic-regular">
                                <p><?= $product->getName() ?></p>
                            </div>
                            <div class="tour-location font-open-sans">
                                <p><?= $product->getPriceFormat() ?> đồng</p>
                            </div>
                        </div>
                        <div class="description">
                            <?= $product->getBasicDescription() ?>
                        </div>
                        <div class="book-now">
                            <form name="frm-product" id="frm-product" action="" method="post">
                                <input type="hidden" name="product_id" id="product_id" value="<?= $product->getId() ?>">
                                <input type="hidden" name="product_price" id="product_price" value="<?= $product->getPrice() ?>">
                                <div class="time-selector">
                                    <p>Size</p>
                                    <select id="pa_size" name="size" class="depart form-select">
                                        <option value="">Chọn kích cỡ</option>
                                        <?php foreach ($sizes_data as $size){?>
                                            <option value="<?= $size['code']?>" ><?= $size['name']?></option>
                                        <?php }?>
                                    </select><br/>
                                    <span class="error" id="error_pa_size"></span>
                                </div>
                                <div class="time-selector">
                                    <p>Số lượng</p>
                                    <div class="quantity">
                                        <input type="number" class="qty" step="1" min="0" max="0" id="quantity" name="quantity" value="0" />
                                        <br/>
                                        <span class="error" id="error_quantity"></span>
                                    </div>
                                </div>
                                <div class="total-price hide">
                                    <span>Tổng tiền: </span>
                                    <span class="price" id="total-price"></span> đồng
                                </div>
                                <div class="submit-button">
                                    <a id="add_to_cart" href="#" class="wide button">Thêm Vào Giỏ</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid--narrow">

        </div>
        <div class="accordion-container tour-accordion">

            <div id="nav-section1" class="accordion">HÌNH ẢNH</div>
            <div class="container mobile-tour-container">
                <ul class="accordion-item">
                    <li>
                        <div class="photo-gallery">
                            <div class="photo-gallery-row">
                                <div class="current-photo">
                                    <?php foreach ($others_image as $index=>$other) {?>
                                    <img id="img_<?= $index ?>" src="<?= $other ?>"   alt="<?= $product->getName() ?>, thoitrangchobe"  />
                                    <?php } ?>
                                </div>
                                <div class="gallery-tiles">
                                    <div class="gallery-offset">
                                        <?php foreach ($others_image as $index=>$other) {?>
                                        <div style="background-image: url('<?= $other ?>');" rel="<?= $other ?>" id="img_<?= $index ?>" class="gallery-tile"></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="carousel mobile-tour-carousel pictures">
                                    <ul class="bxslider-carousel">
                                        <?php foreach ($others_image as $index=>$other) {?>
                                        <li>
                                            <div style="background-image: url('<?= $other ?>');" rel="<?= $other ?>" id="img_<?= $index ?>" class="carousel-image">
                                                <a href="<?= $other ?>" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe">
                                                    <img src="<?= $other ?>" style="display:none">
                                                </a>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="carousel-outside"><i id="slider-prev"></i><i id="slider-next"></i></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="nav-section2" class="accordion">TOUR SNAPSHOT</div>
            <div class="container">
                <ul class="accordion-item">

                    <!--s-snapshot  -->
                    <li id="snapshot_tour" class="snapshot_tour">
                        <h4>Tour snapshot</h4><p>Great views, great food, great wine, and great stories — this tour has it all! Get a taste for both old and new Monterosso on this walking tour, before digging into authentic <em>aperitivo</em> at a traditional local cafe.</p>
                    </li>
                    <!--e-snapshot-->
                    <li id="hightlight_tour">
                        <h4>Highlights</h4><ul>
                            <li>Participate in traditional <em>aperitivo</em> at a local cafe</li>
                            <li>Sample local food, paired with local wine</li>
                            <li>Explore on foot both the old and new towns of Monterosso</li>
                            <li>Get spectacular views of the coastline and coloured houses of the village</li>
                            <li>Learn the history and traditions of Monterosso, directly from the local people</li>
                        </ul>
                    </li>
                    <!--s-inclusion1-->
                    <p>Inclusions: Local English-speaking guide, food and drink tastings (samples may vary depending on the season and what’s freshly available, but expect treats like bruschetta, olives, focaccia, pesto, anchovies, and cheese, along with two wines or soft drinks per person).</p>
                    <!--e-inclusion1-->
                    <!--s-exclusion1-->
                    <p>Exclusions: Additional food and drinks, souvenirs and items of a personal nature, tips/gratuities for your guide.</p>
                    <!--e-exclusion1-->
                    <li>
                        <h4>Schedule details</h4>
                        <ul class="unordered-list">
                            <li>Duration: 2 hours</li>
                            <li class="pickup-location">Meeting point: <p>Monterosso train station on platform 1, just outside the tourist information office</p></li>
                            <li class="pickup-time">Starting time: 5.30 PM, 6.30 PM</li>
                            <li class="dropoff-location">Ending point: <p>Monterosso Old Town</p></li>
                        </ul>
                    </li>


                    <!--s-actionaid--><a href="https://www.urbanadventures.com/action-aid"><img src="https://media-cdn.urbanadventures.com/images/en/ActionAid-Tour-Page-banner.jpg" class="hero-photo padding-10"></a>
                    <!--e-actionaid-->
                </ul>
            </div>
            <div id="nav-section3" class="accordion">FULL ITINERARY</div>
            <div class="container">
                <ul class="accordion-item">
                    <li class="itinerary-container"><p>Your Cinque Terre tour will start out in the new part of Monterosso village, where there’s plenty of coastline and little rocky beaches to see. We’ll walk to the end of this area and check out the ancient statue on the rocks, called “the Giant of Monterosso.” </p>
                        <p>From there, we’ll continue to a spot that overlooks the Mediterranean Sea and the coast of Cinque Terre. Trust us, there are beautiful views to be found here! From this point, we’ll continue along a short path that takes us down to the old area of Monterosso. We’ll walk through the narrow streets where the houses are brightly coloured, and take a look at the old Genoese gothic church. Then, finally, we’ll grab a seat to enjoy our <em>aperitivo</em>! </p>
                        <p>We’ll settle into a traditional cafe, where you can experience the best bites of local food, and sip wine produced in Cinque Terre. While enjoying all the traditional flavours, the owner will share the local secrets behind what we're eating and drinking, as well as a few good stories about Monterosso.</p></li>
                    <li>
                        <h4>Additional information</h4>
                        <!--s-inclusion-->
                        <p>Inclusions: Local English-speaking guide, food and drink tastings (samples may vary depending on the season and what’s freshly available, but expect treats like bruschetta, olives, focaccia, pesto, anchovies, and cheese, along with two wines or soft drinks per person).</p>
                        <!--e-inclusion-->
                        <!--s-exclusion-->
                        <p>Exclusions: Additional food and drinks, souvenirs and items of a personal nature, tips/gratuities for your guide.</p>
                        <!--e-exclusion-->
                        <!--s-dress_standard-->
                        <p>Dress standard: Please wear comfortable shoes for walking. You will need to have your knees and shoulders covered to enter the church.</p>
                        <!--e-dress_standard-->
                        <!--s-yourtrip-->
                        <p>Your Trip: For your Urban Adventure you will be in a small group of a maximum of 12 people.</p>
                        <!--e-yourtrip-->
                        <!--s-confirmation-->
                        <p>Confirmation of booking: If you have your voucher, your booking is confirmed. We'll see you at the start point. Get in touch if you have any concerns or require more information via the email address or phone number (business hours only) on your voucher.</p>
                        <!--e-confirmation-->


                        <!--s-child_policy-->
                        <p>Child Policy: This is a child-friendly tour. Children between the ages of 6 and 11 inclusively are permitted on this tour at the rate listed above. Please select ‘child’ above when booking. Children under the age of 6 are permitted to join this tour free of charge. Please inform us at the time of booking if you’ll be bringing a child under the age of 6. You can do so in the special request box on the checkout page.</p>
                        <!--e-child_policy-->
                    </li>

                    <li>
                        <h4>Local contact</h4>
                        <p>Office phone number: <a href="tel:+39 338 884 7405">+39 338 884 7405</a> <br/> Email address: info@cinqueterreurbanadventures.com</p>
                    </li>
                </ul>
            </div>
            <div id="nav-section4" class="accordion">REVIEWS</div>
            <div class="container">
                <div class="rating-header">
                    <div class="grid">
                        <div class="grid__item one-half palm--one-whole">
                            <div class="traveller-rating">
                                <h4>Traveller rating</h4>
                                <div class="traveller-rating-items">
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Excellent</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Very good</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Average</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Poor</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Terrible</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__item one-half palm--one-whole">
                            <div class="rating-summary">
                                <h4>Rating summary</h4>
                                <div class="rating-summary-items">
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Overall experience</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Guide</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Local learning</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Responsible travel</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Met expectations</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="accordion-item">

                </ul>
            </div>
        </div>
        <!--start other tours-->
        <div class="other-tours">
            <h3>Có thể bạn thích</h3>
            <div class="grid">
                <?php
                /**
                 * @var ProductModel  $_product
                 */
                foreach ($relation_products as $index=>$_product){?>
                <div class="grid__item one-third palm--one-whole spacer">
                    <a href="/product-<?=$_product->getUrl() ?>" class="tour-tile">
                        <div style="background-image: url(<?= base_url('/attachments/shop_images/'.$_product->getImage()) ?>);" class="tour-tile-image"></div>
                        <div class="tour-tile-info">
                            <h5 class="tour-tile-title"><?= $_product->getName() ?></h5>
                            <span class="tour-info-tile-price"><?= $_product->getPriceFormat()?> đồng</span>
                            <span class="icon icon-encircled-right-arrow"></span>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <!--end other tour-->
        <!-- start photoswipe-->
        <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                        <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                        <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                    <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end photoswipe-->
        <div id="fb-root"></div>
        <script language="javascript" type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
        <script type="text/javascript">
            FB.api(
                '/',
                'POST',
                {"scrape": "true", "id": "https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg"},
                function (response) {
                }
            );
            // Code for deleting facebook cache
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=745779065559164facebookAppId";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--.fb-share-button(data-href="#{tour.image_full}" data-layout="button")
        -->
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
<script type="text/javascript">
    var error = 0;
    var isPopup = false;
    var size_quantity = '<?php echo json_encode($sizes_data);?>';

</script>
<script src="<?= base_url('templatejs/function.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('templatejs/product.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('templatejs/cart.js') ?>" type="text/javascript"></script>
