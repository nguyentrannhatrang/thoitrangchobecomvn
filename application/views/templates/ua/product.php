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
                    </div>
                    <div class="combo-last">
                        <p class="from-price"><?= $product->getPriceFormat() ?> đồng</p>
                    </div>
                </div>
                <div class="mobile-tour-info">
                    <?= $product->getBasicDescription() ?>
                </div>
            </div>
        </div>
        <div  class="tour-booking large--show">
            <div class="grid large--show product-main-image-page">
                <div class="grid__item two-thirds lap--one-third bkg-image" >
                    <img src="<?= base_url('/attachments/shop_images/'.$product->image)?>">
                </div>
                <div class="grid__item one-third lap--two-thirds">
                    <div class="booking">
                        <div class="booking-header">
                            <div class="tour-title font-carto-gothic-regular">
                                <p class="main-name-title"><?= $product->getName() ?></p>
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
                                    <div class="percent45">
                                        <p>Size</p>
                                        <select id="pa_size" name="size" class="depart form-select">
                                            <option value="">Chọn kích cỡ</option>
                                            <?php $first = true; foreach ($sizes_data as $size){?>
                                                <option value="<?= $size['code']?>" <?php echo $first?'selected':''; ?> ><?= $size['name']?></option>
                                                <?php
                                                $first = false;
                                            }?>
                                        </select><br/>
                                        <span class="error" id="error_pa_size"></span>
                                    </div>
                                    <div class="percent45-right">
                                        <p>Số lượng</p>
                                        <div class="quantity">
                                            <input type="number" class="qty" step="1" min="0" max="0" id="quantity" name="quantity" value="0" />
                                            <br/>
                                            <span class="error" id="error_quantity"></span>
                                        </div>
                                    </div>
                                </div>                            
                                <br style="margin-bottom: 15px;"/>
                                <div style="clear: both;" class="total-price hide">
                                    <span>Tổng tiền: </span>
                                    <span class="price" id="total-price"></span> đồng
                                </div>
                                <div class="submit-button">
                                    <a id="add_to_cart" href="#" class="wide button">Thêm Vào Giỏ</a>
                                </div>
                                <div>
                                    <a href="#"  class="color-pink info-size"><i class="fa fa-info-circle" aria-hidden="true"></i> Hướng dẫn chọn size</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tour-booking palm--show"
            style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image)?>')">
        </div>
        <div class="mobile-booking-header palm--show">
            <div class="book-now">
                <form name="frm-product" id="frm-product-mobile" action="" method="post">
                    <input type="hidden" name="product_id" id="product_id" value="<?= $product->getId() ?>">
                    <input type="hidden" name="product_price" id="product_price_mobile" value="<?= $product->getPrice() ?>">
                    <div class="time-selector">
                        <p>Size</p>
                        <select id="pa_size_mobile" name="size" class="depart form-select">
                            <option value="">Chọn kích cỡ</option>
                            <?php $first = true; foreach ($sizes_data as $size){?>
                                <option value="<?= $size['code']?>" <?php echo $first?'selected':''; ?>><?= $size['name']?></option>
                            <?php $first = false; }?>
                        </select><br/>
                        <span class="error" id="error_pa_size_mobile"></span>
                    </div>
                    <div class="time-selector">
                        <p>Số lượng</p>
                        <div class="quantity">
                            <input type="number" class="qty" step="1" min="0" max="0" id="quantity_mobile" name="quantity" value="0" />
                            <br/>
                            <span class="error" id="error_quantity_mobile"></span>
                        </div>
                    </div>
                    <div class="total-price hide">
                        <span>Tổng tiền: </span>
                        <span class="price" id="total-price-mobile"></span> đồng
                    </div>
                    <div class="submit-button">
                        <a id="add_to_cart_mobile" href="#" class="wide button">Thêm Vào Giỏ</a>
                    </div>
                    <div>
                        <a href="#"  class="color-pink info-size"><i class="fa fa-info-circle" aria-hidden="true"></i> Hướng dẫn chọn size</a>
                    </div>
                </form>
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
                                    <img id="img_main" src="<?= base_url('/attachments/shop_images/'.$product->image) ?>" title="<?= $product->getName()?>"  alt="<?= $product->getName() ?>, thoitrangchobe"  />
                                    <?php foreach ($others_image as $index=>$other) {?>
                                    <img id="img_<?= $index ?>" src="<?= $other ?>" title="<?= $product->getName()?>"  alt="<?= $product->getName() ?>, thoitrangchobe"  />
                                    <?php } ?>
                                </div>
                                <div class="gallery-tiles">
                                    <div class="gallery-offset">
                                        <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image) ?>');" rel="<?= base_url('/attachments/shop_images/'.$product->image) ?>" id="img_main" class="gallery-tile"></div>
                                        <?php foreach ($others_image as $index=>$other) {?>
                                        <div style="background-image: url('<?= $other ?>');" rel="<?= $other ?>" id="img_<?= $index ?>" class="gallery-tile"></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="carousel mobile-tour-carousel pictures">
                                    <ul class="bxslider-carousel">
                                        <li>
                                            <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$product->image) ?>');" rel="<?= base_url('/attachments/shop_images/'.$product->image) ?>" id="img_main" class="carousel-image">
                                                <a href="<?= base_url('/attachments/shop_images/'.$product->image) ?>" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe" title="<?= $product->getName()?>" >
                                                    <img src="<?= base_url('/attachments/shop_images/'.$product->image) ?>" style="display:none" title="<?= $product->getName()?>" alt="<?= $product->getName()?>" >
                                                </a>
                                            </div>
                                        </li>
                                        <?php foreach ($others_image as $index=>$other) {?>
                                        <li>
                                            <div style="background-image: url('<?= $other ?>');" rel="<?= $other ?>" id="img_<?= $index ?>" class="carousel-image">
                                                <a href="<?= $other ?>" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe" title="<?= $product->getName()?>" >
                                                    <img src="<?= $other ?>" style="display:none" title="<?= $product->getName()?>" alt="<?= $product->getName()?>" >
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
            <div id="nav-section2" class="accordion">MÔ TẢ SẢN PHẨM</div>
            <div class="container">
                <?= $product->getDescription()?>
            </div>
            <div id="nav-section3" class="accordion">ĐÁNH GIÁ</div>
            <div class="container">
                <div class="rating-header">
                    <div class="grid">
                        <div class="grid__item one-half palm--one-whole">
                            <div class="">
                                <form action="http://thoitrangchobe.com.vn" method="post" id="commentform" class="comment-form" novalidate>
                                    <p class="error" id="review_error"></p>
                                    <p class="mesage-success" id="review_success"></p>
                                    <div class="row">
                                        <p class="comment-form-author"><label for="author">Họ tên <span class="required">*</span></label>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required />
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="comment-form-comment">
                                            <label for="comment">Ý kiến của bạn <span class="required">*</span></label>
                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
                                        </p>
                                        <br/>
                                    </div>
                                    <div class="row">
                                        <p class="form-submit">
                                            <input name="submit-review" type="submit" id="submit" class="submit" value="Submit" />
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="grid__item palm--one-whole">
                            <div class="traveller-comment-content">
                                <div id="comments">
                                    <input id="number_review" type="hidden" value="<?= $count_reviews ?>" />
                                    <?php if($count_reviews == 0){ ?>
                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                    <?php } ?>
                                </div>
                                <div id="template-comment-view" style="display: none;">
                                    <div class="media clearfix">
                                        <div class="media-left">
                                            <a href="javascript:;">
                                                <img title="<?= $product->getName()?>" alt="<?= $product->getName()?>"  src="/assets/images/ua/no-avatar.png">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"> {{name}}  </h4>
                                            {{comment}}
                                            <div class="trg-botcmm clearfix">
                                                <div class="left">
                                                    <span class="comment-date">{{time}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" id="load_more">Hiển thị thêm</a>
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
        <?php if(!empty($relation_products)){ ?>
        <div class="other-tours">
            <h3>Có thể bạn thích</h3>
            <div class="grid">
                <?php
                /**
                 * @var ProductModel  $_product
                 */
                foreach ($relation_products as $index=>$_product){?>
                <div class="grid__item one-third palm--one-whole spacer">
                    <a href="/category-<?= $_product->urlCategory ?>/<?=$_product->getUrl() ?>" class="tour-tile" title="<?= $_product->getName()?>" >
                        <div style="background-image: url(<?= base_url('/attachments/shop_images/'.$_product->getImage()) ?>);" class="tour-tile-image"></div>
                        <div class="tour-tile-info">
                            <h5 class="tour-tile-title"><?= $_product->getName() ?></h5>
                            <span class="tour-info-tile-price"><?= $_product->getPriceFormat()?> đồng</span>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
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
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
<script type="text/javascript">
    var error = 0;
    var isPopup = false;
    var size_quantity = '<?php echo json_encode($sizes_data);?>';
    var size_price = '<?php echo json_encode($sizes_data_price);?>';
    var data_cart = '';
</script>
<div id="popup_info_size" style="display:none" class="">
    <div class="content">
        <img src="/assets/images/ua/dam-cherry-size.png">
    </div>
</div>t>-->
