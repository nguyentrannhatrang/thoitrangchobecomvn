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
                                                <h5 class="item-product-name"><a href="<?= $item['url']?>"><?= $item['name']?></a></h5><br>
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
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--e-has-data -->
        </div>
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>