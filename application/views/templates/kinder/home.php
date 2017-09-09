

<main role="main">
    <!-- BEGIN content_for_index -->
    <div class="shopify-section"><!-- slider start -->
        <div class="slider-area text-center mb-100">
            <div class="container-fluid">
                <div class="slider-active">
                    <div class="single-slider slider-opacity ptb-250" style="background-image: url(//cdn.shopify.com/s/files/1/1010/9088/files/somewhere-to-anywhereD.jpg?v=1504755993)">
                        <div class="slider-text">
                            <h2>Fall Collection 2017</h2>
                            <h3>Cute, Fun, Fall Designs</h3>
                            <a href="/collections/fall-dress">Shop The Collection</a>
                        </div>
                    </div>
                    <div class="single-slider slider-opacity ptb-250" style="background-image: url(//cdn.shopify.com/s/files/1/1010/9088/files/IMG_0209-Banner1920px_fbd60d10-f01e-42fe-bcc0-b21db4374aca.jpg?v=1504443054)">
                        <div class="slider-text">
                            <h2>HOLIDAY COLLECTION</h2>
                            <h3>Everything you need for Halloween, Thanksgiving and Christmas.</h3>
                            <a href="/collections/christmas">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </div>


    <div class="shopify-section-all"><!-- shop area start -->
        <?php foreach ($products as $key=>$arrData){ ?>
        <div class="shop-area pb-100">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <h3><?= $arrData['name']?></h3>
                    <p>OUR 2017 FALL COLLECTION.  Everything you need for Back-to-School, Chilly days, and the Holidays.</p>
                </div>
                <div class="shop-style-all">
                    <div class="row">
                        <div class="grid">
                            <?php foreach ($arrData['data'] as $index=>$product) {?>
                            <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1 featured-product-grid">
                                <div class="shop hover-style mb-30">
                                    <div class="shop-img">
                                        <a href="/category-<?= $product->urlCategory ?>/<?=$product->url?>" title="Đầm bé gái - <?=$product->getName()?>">
                                            <img src="<?= base_url('/attachments/shop_images/'.$product->image)?>" alt="Đầm bé gái - <?=$product->getName()?>" />
                                        </a>
                                        <div class="shop-title title-style-1">
                                            <h3><a href="/category-<?= $product->urlCategory ?>/<?=$product->url?>/" title="Đầm bé gái - <?=$product->getName()?>"><?=$product->getName()?></a></h3>
                                            <span class="new-price"><?= $product->getPriceFormat()?> đồng</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <br style="clear: both;"/>
                <div class="view-more text-center mt-30">
                    <a href="/category-<?= $arrData['url']?>" title="<?= $arrData['name']?>">Xem Thêm</a>
                </div>

            </div>
        </div>
        <?php } ?>
        <!-- shop area end -->
    </div>
</main>
