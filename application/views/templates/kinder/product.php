
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
    <div class="product">
        <div class="row">
            <!--s main image-->
            <div class="col-md-5 col-sm-12 product-img-box ">
                <div class="product-photo-container">
                    <a href="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0224A_1024x1024.jpg?v=1504995747">
                        <div style="height:450px;width:100%;" class="zoomWrapper">
                            <img id="product-featured-image" src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0224A_grande.jpg?v=1504995747" alt="Fall Girls Cinnamon Avalon Dress - Kinder Kouture
 - 1">
                        </div>
                    </a>
                </div>

                <div class="more-view-wrapper  more-view-wrapper-owlslider ">
                    <ul id="more-view-carousel" class="product-photo-thumbs jcarousel-skin-tango owl-carousel owl-theme" style="opacity: 1; display: block; visibility: visible;">

                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 504px; left: 0px; display: block;"><div class="owl-item" style="width: 84px;"><li class="grid-item">
                                        <a href="javascript:void(0)" data-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0224A_grande.jpg?v=1504995747" data-zoom-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0224A_1024x1024.jpg?v=1504995747">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0224A_compact.jpg?v=1504995747" alt="Fall Girls Cinnamon Avalon Dress - Kinder Kouture
 - 1">
                                        </a>
                                    </li></div><div class="owl-item" style="width: 84px;"><li class="grid-item">
                                        <a href="javascript:void(0)" data-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0213_grande.jpg?v=1493846448" data-zoom-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0213_1024x1024.jpg?v=1493846448">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0213_compact.jpg?v=1493846448" alt="Fall Girls Cinnamon Avalon Dress - Kinder Kouture
 - 2">
                                        </a>
                                    </li></div><div class="owl-item" style="width: 84px;"><li class="grid-item">
                                        <a href="javascript:void(0)" data-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0199_grande.jpg?v=1493846447" data-zoom-image="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0199_1024x1024.jpg?v=1493846447">
                                            <img src="//cdn.shopify.com/s/files/1/1010/9088/products/IMG_0199_compact.jpg?v=1493846447" alt="Fall Girls Cinnamon Avalon Dress - Kinder Kouture
 - 3">
                                        </a>
                                    </li></div></div></div>





                        <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></ul>
                </div>


            </div>
            <!--e main image-->
            <div class="col-md-7 col-sm-12 product-shop">
                <header class="product-title">
                    <h2>Fall Girls Cinnamon Avalon Dress</h2>
                </header>
                <div class="description">
                    Girls Fall/Thanksgiving Cinnamon Avalon Dress with Flutter sleeves, sewn in sash, and lots of other lovely details.  It's the perfect boutique style Holiday dress for every little girl.
                </div>
                <div class="prices">
                    <span class="price" itemprop="price">$ 68.00</span>
                </div>
                <form action="/cart/add" method="post" enctype="multipart/form-data" id="add-to-cart-form">
                    <div id="product-variants">
                        <select id="product-selectors" name="id" style="display:none">
                            <option selected="selected" value="5918416580">12mos - $ 68.00</option>
                            <option value="5918480004">2T - $ 68.00</option>
                            <option value="5918480068">3T - $ 68.00</option>
                            <option value="5918480132">4T - $ 68.00</option>
                            <option value="5918480196">5 - $ 68.00</option>
                            <option value="5918480260">6 - $ 68.00</option>
                            <option value="5918480324">7 - $ 72.00</option>
                            <option value="5918480388">8 - $ 72.00</option>
                        </select>
                        <div class="swatch clearfix" data-option-index="0">
                            <div class="header">Size</div>
                            <div data-value="12mos" class="swatch-element 12mos available">
                                <input id="swatch-0-12mos" name="option-0" value="12mos" checked="" type="radio">
                                <label for="swatch-0-12mos">
                                    12mos
                                    <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/soldout.png?4734120625161860517">
                                </label>
                            </div>
                            <div data-value="2T" class="swatch-element 2t available">
                                <input id="swatch-0-2t" name="option-0" value="2T" type="radio">
                                <label for="swatch-0-2t">
                                    2T
                                    <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/soldout.png?4734120625161860517">
                                </label>
                            </div>
                            <div data-value="3T" class="swatch-element 3t available">

                                <input id="swatch-0-3t" name="option-0" value="3T" type="radio">

                                <label for="swatch-0-3t">
                                    3T
                                    <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/soldout.png?4734120625161860517">
                                </label>
                            </div>
                            <div data-value="4T" class="swatch-element 4t available">

                                <input id="swatch-0-4t" name="option-0" value="4T" type="radio">

                                <label for="swatch-0-4t">
                                    4T
                                    <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1010/9088/t/47/assets/soldout.png?4734120625161860517">
                                </label>

                            </div>
                        </div>
                    </div>

                    <div class="header">Quantity</div>
                    <div class="row">
                        <div class="col-md-2 col-sm-4"><input min="1" id="quantity" name="quantity" value="1" type="number"></div>
                        <div class="col-md-10 col-sm-8"><input name="add" class="btn hide-cart-button" id="product-add-to-cart" value="Add to Cart" style="display: none;" type="submit">
                            <input name="add" class="btn button" id="addToCartCopy" value="Add to Cart" style="opacity: 1;" type="button">
                        </div>
                    </div>




                    <div id="w3-product-accessories" style="display: none;">
                        <div id="w3-money-format" style="display:none;">$ {{amount}}</div>
                        <div id="accessories-container-heading"><h3></h3></div></div>
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
            items:5
        });
    });
</script>