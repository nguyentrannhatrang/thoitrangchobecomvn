
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
                        <span><?= $current_categorie->getName() ?></span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<main role="main">
    <div id="category-listing" class="shopify-section"><!-- shop area start -->
        <div class="shop-area pt-100 pb-70">
            <div class="container-fluid">

                <div class="shop-title-text text-center">
                    <h2><?= $current_categorie->getName() ?></h2>
                </div>
                <div class="shop-style-all mt-50">
                    <div class="row">
                        <div class="grid">

                            <?php
                            /**
                             * @var ProductModel  $product
                             */
                            foreach ($products as $index=>$product){?>
                            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1 shop-grid-view">
                                <div class="shop hover-style mb-30">
                                    <div class="shop-img">
                                        <div class="shop-single-img">
                                            <a href="/category-<?= $product->urlCategory ?>/<?= $product->url?>" title="Đầm bé gái - <?= $product->getName()?>">
                                                <img src="<?= base_url('/attachments/shop_images/'.$product->image)?>" alt="Đầm bé gái - <?= $product->getName()?>" />
                                            </a>
                                            <?php if($product->getQuantity() < 1 ) {?>
                                            <div class="sold-out" style="">
                                                <div style="">Hết hàng</div>
                                            </div>
                                            <?php } ?>
                                            <!--<div class="product-cart-3">

                                                <a href="javascript:void(0);" onclick="Shopify.addItem(425310715932, 1); return false;" title="Add to Cart"><i class="pe-7s-cart"></i></a>

                                                <a href="javascript:void(0);" onclick="quiqview('halloween-pretty-pumpkin-girls-dress')" data-toggle="modal" title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>-->
                                        </div>
                                        <div class="title-style-3 text-center">
                                            <h3><a href="/category-<?= $product->urlCategory ?>/<?= $product->url?>"><?= $product->getNameLimit(150)?></a></h3>
                                            <span class="new-price"><?= $product->getPriceFormat()?> đồng</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end -->



















    </div>

</main>