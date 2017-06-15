<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="booking-success">
            <div class="grid">
                <div class="grid__item one-whole align-center">
                    <h2>Cám ơn bạn đã đặt hàng tại Thời Trang Cho Bé</h2>
                </div>
                <div class="grid__item one-whole">
                    <?php
                    /**@var Booking $booking */
                    /**@var TravellerModel $traveller */
                    ?>
                    <p>
                        Đơn hàng của bạn là <b><?= $booking->booking->refNo ?></b> . Chúng tôi sẽ liên hệ với bạn bằng <?= $traveller->email ?> hoặc <?= $traveller->phone ?> để xác nhận đơn hàng.

                    </p>

                </div>
            </div>
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