
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="my-cart">
            <h3>Sản phẩm đã chọn</h3>
            <?php
                if(empty($data_carts)){
            ?>
            <p class="font-open-sans-light-italic">Bạn chưa chọn sản phẩm nào</p>
            <?php } ?>
            <!--s-has-data -->
            <?php if(!empty($data_carts)){ ?>
                <div class="split-block">
                    <?php foreach ($data_carts as $productId=>$data_cart) {?>
                        <?php foreach ($data_cart as $sizeCode=>$item) {?>
                            <div class="grid">
                                <div class="grid__item one-quarter lap--one-third">
                                    <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$item['image'])?>')" class="split-block-photo"></div>
                                </div>
                                <div class="grid__item three-quarters lap--two-thirds">
                                    <div class="split-block-bio">
                                        <div class="grid">
                                            <div class="grid__item three-quarters palm--one-whole">
                                                <h5 class="item-product-name"><a href="/product/<?= $item['link']?>"><?= $item['name']?></a></h5><br>
                                                <div>Size: <?= $item['size']?></div>
                                                <div>Đơn giá: <?= number_format($item['price'], 0, '', '.') ?> đồng</div>
                                                <div class="date">Số lượng: <?= $item['quantity']?> sản phẩm</div><br>
                                            </div>
                                            <div class="grid__item one-quarter palm--one-whole">
                                                <div class="cart-total">
                                                    <h5><?= number_format($item['price'] * $item['quantity'], 0, '', '.') ?> đồng</h5>
                                                    <a class="remove-item-product hand-pointer" href="#" data-remove="/cart/removeItem?product=<?= $productId?>&size=<?= $sizeCode?>">Bỏ sản phẩm này</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-tour-info">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="cart-sub-total">
                    <div class="grid">
                        <div class="grid__item one-quarter"></div>
                        <div class="grid__item three-quarters">
                            <div class="sub-total">
                                <p class="title">Tổng tiền: <span class="price"><?= number_format($summary['total'], 0, '', '.') ?> đồng</span></p>
                                <!--                            <p class="conditions">Prices above include all applicable taxes and service charges</p>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-cart-book-now">
                    <div class="submit-button"><a href="/checkout" class="wide button">Đặt hàng</a></div>
                </div>
            <?php } ?>
            <!--e-has-data -->
            <?php if(empty($data_carts)){ ?>
                <div class="inline-buttons align-center">
                    <div class="large-spacer"><a href="/" class="button">TIẾP TỤC MUA HÀNG</a></div>
                </div>
                <?php if(!empty($top_sell_products)){ ?>
                <h3 class="spacer">SẢN PHẨM BÁN CHẠY</h3>
                <div class="grid">
                    <?php
                    /**
                     * @var ProductModel  $_product
                     */
                    foreach ($top_sell_products as $index=>$_product){?>
                        <div class="grid__item one-third palm--one-whole spacer">
                            <a href="/category-<?= $_product->urlCategory ?>/<?=$_product->getUrl() ?>" class="tour-tile"  title="<?= $_product->getName()?>">
                                <div style="background-image: url(<?= base_url('/attachments/shop_images/'.$_product->getImage()) ?>);" class="tour-tile-image"></div>
                                <div class="tour-tile-info">
                                    <h5 class="tour-tile-title"><?= $_product->getName() ?></h5>
                                    <span class="tour-info-tile-price"><?= $_product->getPriceFormat()?> đồng</span>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>