
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="booking-success">
            <div class="grid">
                <div class="grid__item one-whole align-center">
                    <h2>Cám ơn bạn đã đặt hàng tại Cherry Store</h2>
                </div>
                <div class="grid__item one-whole">
                    <?php
                    /**@var Booking $booking */
                    /**@var TravellerModel $traveller */
                    ?>
                    <p>
                        Đơn hàng của bạn là <b><?= $booking->booking->refNo ?></b> . Chúng tôi sẽ liên hệ với bạn bằng <strong><?= $traveller->email ?></strong> hoặc <strong><?= $traveller->phone ?></strong> để xác nhận đơn hàng.

                    </p>

                </div>
            </div>
        </div>
        <div class="my-cart">
            <!--s-has-data -->
            <?php if(!empty($data_item)){ ?>
                <div class="split-block">
                    <?php foreach ($data_item as $item) {?>
                            <div class="grid">
                                <div class="grid__item one-quarter lap--one-third">
                                    <div style="background-image: url('<?= base_url('/attachments/shop_images/'.$item['image'])?>')" class="split-block-photo"></div>
                                </div>
                                <div class="grid__item three-quarters lap--two-thirds">
                                    <div class="split-block-bio">
                                        <div class="grid">
                                            <div class="grid__item three-quarters palm--one-whole">
                                                <h5 class="item-product-name"><a href="/product/<?= $item['url']?>"><?= $item['name']?></a></h5><br>
                                                <div>Size: <?= $item['size']?></div>
                                                <div>Đơn giá: <?= number_format($item['price'], 0, '', '.') ?> đồng</div>
                                                <div class="date">Số lượng: <?= $item['quantity']?> sản phẩm</div><br>
                                            </div>
                                            <div class="grid__item one-quarter palm--one-whole">
                                                <div class="cart-total">
                                                    <h5><?= number_format($item['total'], 0, '', '.') ?> đồng</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-tour-info">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <div class="cart-sub-total">
                    <div class="grid">
                        <div class="grid__item one-quarter"></div>
                        <div class="grid__item three-quarters">
                            <div class="sub-total">
                                <p class="title">Tổng tiền: <span class="price"><?= number_format($booking->booking->getTotal(), 0, '', '.') ?> đồng</span></p>
                                <!--                            <p class="conditions">Prices above include all applicable taxes and service charges</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--e-has-data -->
        </div>
        <!--e-referral-program-->
        <!--<div class="sections">
            <div class="site-section spacer">

                <div class="site-section-header small-spacer">
                    <h3>You may also like</h3>
                </div>
                <div class="grid">
                    &lt;&gt;
                    <div class="grid__item one-third palm--one-whole spacer"><a href="http://test-ua.urbanadventures.com/hanoi-tour-a-private-tour" class="tour-tile thumb-sx">
                            <div class="large  ribbon"></div>
                            <div style="background-image: url('http://d9nqu5ycnl5tw.cloudfront.net/data/54/tour_1015/xm-');" class="tour-tile-image"></div>
                            <div class="tour-tile-info">
                                <h5 class="tour-tile-title">A private tour</h5><span class="tour-tile-location">Hanoi, Vietnam</span><span class="icon icon-encircled-right-arrow"></span>
                            </div></a></div>
                    &lt;&gt;
                    &lt;&gt;
                    <div class="grid__item one-third palm--one-whole spacer"><a href="http://test-ua.urbanadventures.com/hanoi-tour-gom-su-ha-noi" class="tour-tile thumb-sx">
                            <div class="large new-tour ribbon"></div>
                            <div style="background-image: url('http://d9nqu5ycnl5tw.cloudfront.net/data/54/tour_941/xm-gom-bt1.jpg');" class="tour-tile-image"></div>
                            <div class="tour-tile-info">
                                <h5 class="tour-tile-title">Gom Su Ha Noi</h5><span class="tour-tile-location">Hanoi, Vietnam</span><span class="icon icon-encircled-right-arrow"></span>
                            </div></a></div>
                    &lt;&gt;
                    &lt;&gt;
                    <div class="grid__item one-third palm--one-whole spacer"><a href="http://test-ua.urbanadventures.com/hanoi-tour-ho-chi-minh-s-hanoi" class="tour-tile thumb-sx">
                            <div class="large pop-up ribbon"></div>
                            <div style="background-image: url('http://d9nqu5ycnl5tw.cloudfront.net/data/54/tour_31/xm-c-fakepath-ua-vlt-e-kobra-alta-definicao-13.jpg');" class="tour-tile-image"></div>
                            <div class="tour-tile-info">
                                <h5 class="tour-tile-title">Hanoi Highlights</h5><span class="tour-tile-location">Hanoi, Vietnam</span><span class="icon icon-encircled-right-arrow"></span>
                            </div></a></div>
                    &lt;&gt;
                </div>

            </div>
        </div>-->
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>