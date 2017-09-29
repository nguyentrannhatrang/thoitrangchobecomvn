
<!-- breadcrumb start -->
<div class="breadcrumb-area" style="background: #f6f6f6 url('http://cdn.shopify.com/s/files/1/1010/9088/files/blogbanner.jpg?v=1504932528') no-repeat scroll center center / cover !important">
    <div class="container-fluid text-center">
        <div class="breadcrumb-stye gray-bg ptb-100">
            <h2 class="page-title"><?= $current_categorie->getName() ?></h2>
            <nav class="" role="navigation" aria-label="breadcrumbs">
                <ul class="breadcrumb-list">
                    <li>
                        <a href="/" title="Quay lại trang chủ">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="/category-<?= $current_categorie->getUrlName() ?>" title="<?= $current_categorie->getName() ?>"><?= $current_categorie->getName() ?></a>
                    </li>
                    <li>
                        <span><?= $product->getName() ?></span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<br/>
<!-- breadcrumb end -->
<main role="main" class="main">
    <div class="product pt-120 pb-120">
        <div class="row">
            <!--s main image-->
            <div class="col-md-5 col-sm-12 product-img-box ">
                <div class="product-photo-container">
                    <a href="<?= base_url('/attachments/shop_images/'.$product->image)?>">
                        <div style="height:450px;width:100%;" class="zoomWrapper">
                            <img id="product-featured-image" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" alt="<?= $product->getName() ?> - Thoi Trang Cho Be
 - 1">
                        </div>
                    </a>
                </div>

                <div class="more-view-wrapper  more-view-wrapper-owlslider ">
                    <div class="owl-carousel owl-theme owl-loaded" id="ProductThumbs">
                        <div class="owl-item">
                            <img id="img_main" src="<?= base_url('/attachments/shop_images/'.$product->image)?>" title="Đầm bé gái - <?= $product->getName()?>"  alt="Đầm bé gái - <?= $product->getName() ?>"  />
                        </div>
                        <?php foreach ($others_image as $index=>$other) {?>
                            <div class="owl-item">
                                <img id="img_<?= $index ?>" src="<?= $other ?>" title="Đầm bé gái - <?= $product->getName()?>"  alt="Đầm bé gái - <?= $product->getName() ?>"  />
                            </div>
                        <?php } ?>
                    </div>

                </div>


            </div>
            <!--e main image-->
            <div class="col-md-7 col-sm-12 product-shop">
                <header class="product-title">
                    <h2><?= $product->getName() ?></h2>
                </header>
                <div class="description">
                    <?= $product->getBasicDescription() ?>
                </div>
                <div class="prices">
                    <span class="price" itemprop="price"><?= $product->getPriceFormat() ?> đồng</span>
                </div>
                <div style="display: none">
                    <?php foreach ($sizes_data_price as $s_code=>$s_price){
                        if(!$s_price) continue;
                        ?>
                        <input type="hidden" value="<?= $s_price?>" id="size-price-<?= $s_code?>">
                    <?php } ?>
                </div>
                <form action="/cart/add" method="post" enctype="multipart/form-data" id="frm-product">
                    <div id="product-variants">
                        <div class="list-size clearfix" data-option-index="0">
                            <div class="header">Size</div>
                            <?php $first = true; foreach ($sizes_data as $size){?>
                                <div data-value="<?= $size['code']?>" class="size-element <?= $size['code']?> available">
                                    <input id="size-0-<?= $size['code']?>" name="size-option-0" class="size-option" value="<?= $size['code']?>" <?= $first?'checked':'' ?> type="radio">
                                    <label for="size-0-<?= $size['code']?>">
                                        <?= $size['name']?>
                                        <!--                                    <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/soldout.png?4734120625161860517">-->
                                    </label>
                                </div>
                                <?php $first = false; }?>

                        </div>
                    </div>
                    <div class="error row" style="clear: both" id="error_pa_size"></div>
                    <div class="header">Số lượng</div>
                    <div class="row quantity-cart">
                        <div class="col-md-2 col-sm-4 product-quantity2">
                            <input id="quantity" name="quantity" value="1" min="" max="" type="text">
                        </div>
                        <div class="col-md-10 col-sm-8">
<!--                            <input name="add" class="btn hide-cart-button" id="product-add-to-cart" value="Add to Cart" style="display: none;" type="submit">-->
                            <input name="add" class="btn button" id="add_to_cart" value="Thêm vào giỏ" style="opacity: 1;" type="button">
                        </div>
                    </div>
                    <div class="error row" style="clear: both" id="error_quantity"></div>
                    <div class="header total-price" >Tổng tiền</div>
                    <div style="clear: both;" class="total-price">
                        <span class="price" id="total-price"></span> đồng
                    </div>
                    <input type="hidden" name="product_id" id="product_id" value="<?= $product->getId() ?>">
                    <input type="hidden" name="product_price" id="product_price_mobile" value="<?= $product->getPrice() ?>">
                    <input type="hidden" name="size" id="pa_size" value="">
                </form>

                <div class="panel-group" id="accordion">
                    <div class="panel wow fadeInUp" data-wow-delay="200ms">
                        <div class="panel-heading">
                            <h4 class="panel-title active">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tab1">
                                    Size Chart
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-tab1" class="panel-collapse collapse" style="height: auto;">
                            <div class="panel-body">
                                <img src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/custom_size_chart_content.jpg?4734120625161860517" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="panel wow fadeInUp" data-wow-delay="300ms">
                        <div class="panel-heading">
                            <h4 class="panel-title active">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tab2">
                                    Review
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-tab2" class="panel-collapse collapse" style="height: auto;">
                            <div class="panel-body">
                                mmmmm
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- relationship -->
    <section class="related-products">
        <h2>Related Products</h2>
            <div class="products-grid owl-carousel owl-theme">
                <?php for ($i=0;$i<10;$i++){ ?>
                    <div class="no_crop_image grid-item product-item" data-wow-delay="400ms">
                        <div class="product-image">
                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/Babypicnicsetproductimage2_large.jpg?v=1505569810" alt="Baby Picnic Two-Piece Summer Set">
                        </div>

                    </div>
                <?php } ?>
            </div>

    </section>
</main>
<script>
    jQuery(document).ready(function() {
        jQuery(".related-products .products-grid").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            nav: true,
            dots: false,
            margin:5,
            items:5,
            loop:true
        });
        <?php if(count($others_image)>4){ ?>
        jQuery("#ProductThumbs").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            nav: true,
            dots: false,
            margin:5,
            items:5,
            loop:true
        });
        <?php } ?>
    });
</script>


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
</div>